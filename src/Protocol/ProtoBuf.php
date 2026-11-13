<?php

declare(strict_types=1);

namespace Aiobale\Protocol;

use Aiobale\Model\BaleObject;
use InvalidArgumentException;
use UnexpectedValueException;

final class ProtoBuf
{
    public function encode(array|BaleObject $message): string
    {
        $fields = $message instanceof BaleObject
            ? $message->wireFields()
            : array_map(
                static fn (mixed $value): array => ['value' => $value, 'definition' => []],
                $message,
            );
        $encoded = '';

        foreach ($fields as $number => $entry) {
            if (!is_numeric((string) $number) || (int) $number < 1) {
                continue;
            }

            $definition = [];
            $value = $entry;
            if (
                is_array($entry)
                && array_key_exists('value', $entry)
                && array_key_exists('definition', $entry)
            ) {
                $value = $entry['value'];
                $definition = $entry['definition'];
            }

            $fieldNumber = (int) $number;
            if (($definition['type'] ?? null) === 'array') {
                $items = is_array($value) ? $value : [$value];
                $itemDefinition = [
                    'type' => $definition['items'] ?? 'mixed',
                    'wire' => $definition['items_wire'] ?? null,
                ];
                foreach ($items as $item) {
                    $encoded .= $this->encodeField($fieldNumber, $item, $itemDefinition);
                }
                continue;
            }

            if (($definition['type'] ?? null) === 'map') {
                if (!is_array($value)) {
                    throw new InvalidArgumentException(
                        sprintf('Protobuf field %d must be a map.', $fieldNumber),
                    );
                }

                foreach ($value as $key => $item) {
                    $keyType = $definition['key_type'] ?? 'mixed';
                    $keyValue = match ($keyType) {
                        'string' => (string) $key,
                        'bool' => (bool) $key,
                        'int' => (int) $key,
                        default => $key,
                    };
                    $entryBody = $this->encodeField(1, $keyValue, [
                        'type' => $keyType,
                        'wire' => $definition['key_wire'] ?? null,
                    ]);
                    $entryBody .= $this->encodeField(2, $item, [
                        'type' => $definition['value_type'] ?? 'mixed',
                        'wire' => $definition['value_wire'] ?? null,
                    ]);
                    $encoded .= self::varint(($fieldNumber << 3) | 2)
                        . self::varint(strlen($entryBody))
                        . $entryBody;
                }
                continue;
            }

            $encoded .= $this->encodeField($fieldNumber, $value, $definition);
        }

        return $encoded;
    }

    /**
     * @param array<string, mixed> $definition
     */
    private function encodeField(int $fieldNumber, mixed $value, array $definition): string
    {
        if ($value === null) {
            return '';
        }
        if ($value instanceof \BackedEnum) {
            $value = $value->value;
        }

        if ($value instanceof BaleObject || is_array($value)) {
            if (is_array($value) && array_is_list($value)) {
                $encoded = '';
                foreach ($value as $item) {
                    $encoded .= $this->encodeField($fieldNumber, $item, []);
                }
                return $encoded;
            }

            $body = $this->encode($value);
            return self::varint(($fieldNumber << 3) | 2)
                . self::varint(strlen($body))
                . $body;
        }

        $wire = $definition['wire'] ?? null;
        if ($wire === 'float' || $wire === 'fixed32' || $wire === 'sfixed32') {
            if (!is_int($value) && !is_float($value)) {
                throw new InvalidArgumentException(
                    sprintf('Protobuf field %d must be numeric.', $fieldNumber),
                );
            }
            $body = match ($wire) {
                'float' => pack('g', (float) $value),
                default => pack('V', (int) $value),
            };
            return self::varint(($fieldNumber << 3) | 5) . $body;
        }

        if ($wire === 'double' || $wire === 'fixed64' || $wire === 'sfixed64') {
            if (!is_int($value) && !is_float($value)) {
                throw new InvalidArgumentException(
                    sprintf('Protobuf field %d must be numeric.', $fieldNumber),
                );
            }
            $body = match ($wire) {
                'double' => pack('e', (float) $value),
                default => pack('P', (int) $value),
            };
            return self::varint(($fieldNumber << 3) | 1) . $body;
        }

        if (is_int($value) || is_bool($value)) {
            $number = (int) $value;
            $unsigned = false;
            if ($wire === 'sint32' || $wire === 'sint64') {
                $number = ($number << 1) ^ ($number >> 63);
                $unsigned = $number < 0;
            }
            return self::varint($fieldNumber << 3)
                . self::varint($number, $unsigned);
        }

        if (is_float($value)) {
            throw new InvalidArgumentException(
                sprintf('Protobuf field %d requires a float or double schema.', $fieldNumber),
            );
        }

        if (is_string($value)) {
            return self::varint(($fieldNumber << 3) | 2)
                . self::varint(strlen($value))
                . $value;
        }

        throw new InvalidArgumentException(
            sprintf('Cannot encode protobuf field %d of type %s.', $fieldNumber, get_debug_type($value)),
        );
    }

    /**
     * Decode a protobuf message using a generated Bale model as the field schema.
     *
     * @param class-string<BaleObject>|null $modelClass
     * @return array<string, mixed>
     */
    public function decode(string $bytes, ?string $modelClass = null, ?string $resultType = null): array
    {
        $schema = $modelClass !== null ? $modelClass::schema() : [];
        return $this->decodeWithSchema($bytes, $schema, $resultType, $modelClass);
    }

    /**
     * @param array<string, array<string, mixed>> $schema
     * @return array<string, mixed>
     */
    private function decodeWithSchema(
        string $bytes,
        array $schema,
        ?string $resultType = null,
        ?string $parentClass = null,
    ): array {
        $byNumber = [];
        foreach ($schema as $name => $field) {
            $byNumber[(int) ($field['alias'] ?? $name)] = [$name, $field];
        }

        $result = [];
        $offset = 0;
        $length = strlen($bytes);

        while ($offset < $length) {
            $tag = self::readVarint($bytes, $offset);
            $number = $tag >> 3;
            $wireType = $tag & 7;
            if ($number === 0) {
                throw new UnexpectedValueException('Protobuf field number cannot be zero.');
            }

            [$name, $field] = $byNumber[$number] ?? [(string) $number, ['type' => 'mixed']];
            $fieldWire = ($field['type'] ?? null) === 'array'
                ? ($field['items_wire'] ?? null)
                : ($field['wire'] ?? null);
            if ($wireType === 0) {
                $value = $this->decodeVarintValue(
                    self::readVarint($bytes, $offset),
                    $fieldWire,
                );
            } elseif ($wireType === 1) {
                $fixed = self::readFixed($bytes, $offset, 8);
                $value = $this->decodeFixedValue($fixed, $fieldWire);
            } elseif ($wireType === 2) {
                $payloadLength = self::readVarint($bytes, $offset);
                if ($payloadLength < 0 || $offset + $payloadLength > $length) {
                    throw new UnexpectedValueException('Invalid protobuf length-delimited field.');
                }
                $payload = substr($bytes, $offset, $payloadLength);
                $offset += $payloadLength;

                if (($field['type'] ?? null) === 'map') {
                    $entry = $this->decodeWithSchema($payload, [
                        'key' => [
                            'alias' => '1',
                            'type' => $field['key_type'] ?? 'mixed',
                            'wire' => $field['key_wire'] ?? null,
                        ],
                        'value' => [
                            'alias' => '2',
                            'type' => $field['value_type'] ?? 'mixed',
                            'wire' => $field['value_wire'] ?? null,
                        ],
                    ], $resultType);
                    $mapKey = $entry['1'] ?? $this->defaultValue($field['key_type'] ?? 'mixed');
                    $mapValue = $entry['2'] ?? $this->defaultValue($field['value_type'] ?? 'mixed');
                    $key = isset($field['alias']) ? (string) $field['alias'] : (string) $number;
                    $result[$key] ??= [];
                    $result[$key][$mapKey] = $mapValue;
                    continue;
                }

                if (
                    ($field['type'] ?? null) === 'array'
                    && $this->isPackable($field['items_wire'] ?? null)
                ) {
                    $values = $this->decodePacked($payload, $field['items_wire']);
                    $key = isset($field['alias']) ? (string) $field['alias'] : (string) $number;
                    $result[$key] ??= [];
                    array_push($result[$key], ...$values);
                    continue;
                }

                $value = $this->decodeLengthDelimited($payload, $field, $name, $parentClass, $resultType);
            } elseif ($wireType === 5) {
                $fixed = self::readFixed($bytes, $offset, 4);
                $value = $this->decodeFixedValue($fixed, $fieldWire);
            } else {
                throw new UnexpectedValueException(sprintf('Unsupported protobuf wire type %d.', $wireType));
            }

            $key = isset($field['alias']) ? (string) $field['alias'] : (string) $number;
            if (($field['type'] ?? null) === 'array' || ($field['repeated'] ?? false)) {
                $result[$key] ??= [];
                $result[$key][] = $value;
            } elseif (array_key_exists($key, $result)) {
                $result[$key] = (array) $result[$key];
                $result[$key][] = $value;
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }

    private function decodeVarintValue(int $value, mixed $wire): int|bool
    {
        if ($wire === 'sint32' || $wire === 'sint64') {
            return (($value >> 1) & PHP_INT_MAX) ^ -($value & 1);
        }
        if ($wire === 'bool') {
            return (bool) $value;
        }

        return $value;
    }

    private function decodeFixedValue(string $bytes, mixed $wire): mixed
    {
        return match ($wire) {
            'float' => unpack('gvalue', $bytes)['value'],
            'double' => unpack('evalue', $bytes)['value'],
            'fixed32' => unpack('Vvalue', $bytes)['value'],
            'sfixed32' => $this->signedFixed32(unpack('Vvalue', $bytes)['value']),
            'fixed64' => unpack('Pvalue', $bytes)['value'],
            'sfixed64' => unpack('qvalue', $bytes)['value'],
            default => $bytes,
        };
    }

    private function signedFixed32(int $value): int
    {
        return $value >= 0x80000000 ? $value - 0x100000000 : $value;
    }

    private function isPackable(mixed $wire): bool
    {
        return in_array($wire, [
            'varint',
            'int32',
            'int64',
            'uint32',
            'uint64',
            'enum',
            'bool',
            'sint32',
            'sint64',
            'fixed32',
            'sfixed32',
            'fixed64',
            'sfixed64',
            'float',
            'double',
        ], true);
    }

    /**
     * @return list<int|bool|float>
     */
    private function decodePacked(string $bytes, string $wire): array
    {
        $values = [];
        $offset = 0;
        $length = strlen($bytes);
        $fixedSize = in_array($wire, ['fixed32', 'sfixed32', 'float'], true)
            ? 4
            : (in_array($wire, ['fixed64', 'sfixed64', 'double'], true) ? 8 : null);

        while ($offset < $length) {
            if ($fixedSize === null) {
                $value = self::readVarint($bytes, $offset);
                $values[] = $this->decodeVarintValue($value, $wire);
                continue;
            }

            $fixed = self::readFixed($bytes, $offset, $fixedSize);
            $values[] = $this->decodeFixedValue($fixed, $wire);
        }

        return $values;
    }

    private function defaultValue(mixed $type): mixed
    {
        if ($type === 'bool') {
            return false;
        }
        if ($type === 'int') {
            return 0;
        }
        if ($type === 'float') {
            return 0.0;
        }
        if ($type === 'string' || $type === 'bytes') {
            return '';
        }
        if (is_string($type) && class_exists($type) && is_subclass_of($type, BaleObject::class)) {
            return $type::fromWire([]);
        }

        return null;
    }

    /** @param array<string, mixed> $field */
    private function decodeLengthDelimited(
        string $payload,
        array $field,
        string $fieldName,
        ?string $parentClass,
        ?string $resultType,
    ): mixed {
        $type = $field['type'] ?? 'mixed';
        if ($type === 'array') {
            $type = $field['items'] ?? 'mixed';
        }

        if (is_string($type) && class_exists($type) && is_subclass_of($type, BaleObject::class)) {
            return $this->decode($payload, $type, $resultType);
        }

        if ($parentClass === \Aiobale\Types\ResponseBody::class && $fieldName === 'result' && $resultType !== null) {
            return $this->decode($payload, $resultType, $resultType);
        }

        if ($type === 'string' || $type === 'bytes') {
            return $payload;
        }

        $candidate = $this->decodeUnknown($payload);
        return $candidate;
    }

    private function decodeUnknown(string $payload): mixed
    {
        if ($payload === '') {
            return [];
        }

        if (preg_match('//u', $payload) === 1 && preg_match('/[[:cntrl:]]/', $payload) !== 1) {
            return $payload;
        }

        try {
            return $this->decode($payload);
        } catch (\Throwable) {
            return $payload;
        }
    }

    private static function varint(int $value, bool $unsigned = false): string
    {
        if ($value < 0) {
            if (!$unsigned) {
                return str_repeat("\xff", 9) . "\x01";
            }

            $bytes = pack('P', $value);
            $result = '';
            for ($index = 0; $index < 10; $index++) {
                $bitOffset = $index * 7;
                $byteOffset = intdiv($bitOffset, 8);
                $shift = $bitOffset % 8;
                $chunk = ord($bytes[$byteOffset]) >> $shift;
                if ($byteOffset + 1 < 8) {
                    $chunk |= ord($bytes[$byteOffset + 1]) << (8 - $shift);
                }
                $chunk &= 0x7f;
                $result .= chr($index === 9 ? $chunk : $chunk | 0x80);
            }
            return $result;
        }

        $result = '';
        do {
            $byte = $value & 0x7f;
            $value >>= 7;
            $result .= chr($value === 0 ? $byte : $byte | 0x80);
        } while ($value !== 0);

        return $result;
    }

    private static function readVarint(string $bytes, int &$offset): int
    {
        $result = 0;
        $shift = 0;
        $length = strlen($bytes);

        while ($offset < $length && $shift < 70) {
            $byte = ord($bytes[$offset++]);
            $result |= ($byte & 0x7f) << $shift;
            if (($byte & 0x80) === 0) {
                return $result;
            }
            $shift += 7;
        }

        throw new UnexpectedValueException('Malformed protobuf varint.');
    }

    private static function readFixed(string $bytes, int &$offset, int $size): string
    {
        if ($offset + $size > strlen($bytes)) {
            throw new UnexpectedValueException('Unexpected end of protobuf fixed-width field.');
        }

        $result = substr($bytes, $offset, $size);
        $offset += $size;
        return $result;
    }
}
