<?php

declare(strict_types=1);

require dirname(__DIR__, 2) . '/vendor/autoload.php';

use Aiobale\Methods\MethodRegistry;
use Aiobale\Model\BaleMethod;

$outputPath = $argv[1] ?? __DIR__ . '/rpc-reference.md';
if (!str_starts_with($outputPath, '/')) {
    $outputPath = getcwd() . '/' . $outputPath;
}

$entries = [];
$uniqueMethods = [];
foreach (MethodRegistry::all() as $registryName => $class) {
    if (!is_subclass_of($class, BaleMethod::class)) {
        continue;
    }

    $service = $class::service();
    $method = $class::methodName();
    $uniqueMethods[$service . "\0" . $method] = true;
    $fields = [];

    foreach ($class::schema() as $name => $definition) {
        $type = match ($definition['type'] ?? 'mixed') {
            'array' => 'list<' . ($definition['items'] ?? 'mixed') . '>',
            'map' => 'map<' . ($definition['key_type'] ?? 'mixed')
                . ', ' . ($definition['value_type'] ?? 'mixed') . '>',
            default => $definition['type'] ?? 'mixed',
        };
        $field = '`' . $name . '`: `' . $type . '`';
        if (isset($definition['alias'])) {
            $field .= ' (protobuf #' . $definition['alias'] . ')';
        }
        if (($definition['required'] ?? false) === true) {
            $field .= ' **required**';
        }
        if (isset($definition['wire'])) {
            $field .= ' / wire `' . $definition['wire'] . '`';
        }
        if (isset($definition['items_wire'])) {
            $field .= ' / item wire `' . $definition['items_wire'] . '`';
        }
        $fields[] = $field;
    }

    $entries[] = [
        'name' => (string) $registryName,
        'service' => $service,
        'method' => $method,
        'fields' => $fields === [] ? 'none' : implode('<br>', $fields),
        'response' => $class::returning() ?? 'no declared response model',
    ];
}

usort($entries, static fn (array $left, array $right): int =>
    [$left['service'], $left['method'], $left['name']]
    <=> [$right['service'], $right['method'], $right['name']]
);

$lines = [
    '# Complete RPC Method Reference',
    '',
    sprintf(
        'This generated reference contains **%d registry entries** covering **%d unique service/method pairs**.',
        count($entries),
        count($uniqueMethods),
    ),
    '',
    'The **Registry key** is accepted by `MethodRegistry::resolve()` and by the API `method` route. '
        . 'The **RPC** column shows the exact service and method sent over the Bale transport. '
        . 'Protobuf field numbers are shown as `#N`; required fields are marked explicitly. '
        . 'Nested fields use their PHP model or enum class name.',
    '',
    'Use a service-qualified registry key when method names are ambiguous. Authentication methods '
        . 'in the API are handled by the dedicated sign-in endpoints. For recursively expanded API '
        . 'schemas, query `GET /api/v1/bale/methods` in aiobalephpapi.',
    '',
];

$currentService = null;
foreach ($entries as $entry) {
    if ($entry['service'] !== $currentService) {
        $currentService = $entry['service'];
        $lines[] = '## ' . $currentService;
        $lines[] = '';
        $lines[] = '| Registry key | RPC method | Request fields | Response model |';
        $lines[] = '| --- | --- | --- | --- |';
    }

    $rpc = '`' . $entry['service'] . '/' . $entry['method'] . '`';
    $lines[] = '| `' . $entry['name'] . '` | ' . $rpc . ' | '
        . $entry['fields'] . ' | `' . $entry['response'] . '` |';
}

$lines[] = '';
$lines[] = 'Regenerate this file from the aiobalephp library root with the current `MethodRegistry`:';
$lines[] = '';
$lines[] = '```bash';
$lines[] = 'php docs/swagger/generate-rpc-reference.php';
$lines[] = '# To refresh the aiobalephpapi copy in a sibling workspace:';
$lines[] = 'php docs/swagger/generate-rpc-reference.php ../aiobalephpapi/docs/rpc-reference.md';
$lines[] = '```';
$lines[] = '';

$directory = dirname($outputPath);
if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
    throw new RuntimeException(sprintf('Could not create documentation directory: %s', $directory));
}

if (file_put_contents($outputPath, implode(PHP_EOL, $lines) . PHP_EOL, LOCK_EX) === false) {
    throw new RuntimeException(sprintf('Could not write RPC reference: %s', $outputPath));
}

printf("Generated %d RPC registry entries at %s\n", count($entries), $outputPath);
