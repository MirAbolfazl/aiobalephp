<?php

declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

use Aiobale\Client\Client;
use Aiobale\Methods\MethodRegistry;
use function Amp\async;

$methodName = $argv[1] ?? null;
$payloadJson = $argv[2] ?? '{}';

if ($methodName === null) {
    fwrite(STDERR, "Usage: php example/rpc.php <registry-key> [JSON-object-payload]\n");
    exit(2);
}

try {
    $decodedPayload = json_decode($payloadJson, flags: JSON_THROW_ON_ERROR);
    if (!$decodedPayload instanceof stdClass) {
        throw new InvalidArgumentException('The RPC payload must be a JSON object.');
    }

    $methodClass = MethodRegistry::resolve($methodName);
    if ($methodClass === null) {
        throw new InvalidArgumentException(sprintf('Unknown Bale RPC method: %s', $methodName));
    }

    $sessionFile = getenv('BALE_SESSION_FILE') ?: dirname(__DIR__) . '/var/bale-session.json';
    $client = new Client(sessionFile: $sessionFile);
    $accessToken = getenv('BALE_ACCESS_TOKEN');
    if ($accessToken !== false && $accessToken !== '') {
        $client->setSessionToken($accessToken);
    }

    $result = async(static fn () => $client->invoke(
        new $methodClass((array) $decodedPayload),
    )->await())->await();

    echo json_encode(
        $result,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR,
    ) . PHP_EOL;
} catch (Throwable $exception) {
    fwrite(STDERR, $exception->getMessage() . PHP_EOL);
    exit(1);
}
