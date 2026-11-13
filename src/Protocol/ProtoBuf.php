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
        $values = $message instanceof BaleObject ? $message->modelDump() : $message;
        $encoded = '';

        foreach ($values as $number => $value) {
            if (!is_numeric((string) $number) || (int) $number < 1 || $value === null) {
                continue;
            }

            foreach (is_array($value) && array_is_list($value) ? $value : [$value] as $item) {
                $fieldNumber = (int) $number;
                if (is_array($item) || $item instanceof BaleObject) {
                    $body = $this->encode($item);
                    $encoded .= self::varint(($fieldNumber << 3) | 2)
                        . self::varint(strlen($body))
                        . $body;
                } elseif (is_int($item) || is_bool($item)) {
                    $encoded .= self::varint($fieldNumber << 3)
                        . self::varint((int) $item);
                } elseif (is_string($item)) {
                    $encoded .= self::varint(($fieldNumber << 3) | 2)
                        . self::varint(strlen($item))
                        . $item;
                } else {
                    throw new InvalidArgumentException(
                        sprintf('Cannot encode protobuf field %d of type %s.', $fieldNumber, get_debug_type($item)),
                    );
                }
            }
        }

        return $encoded;
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
            if ($wireType === 0) {
                $value = self::readVarint($bytes, $offset);
            } elseif ($wireType === 1) {
                $value = self::readFixed($bytes, $offset, 8);
            } elseif ($wireType === 2) {
                $payloadLength = self::readVarint($bytes, $offset);
                if ($payloadLength < 0 || $offset + $payloadLength > $length) {
                    throw new UnexpectedValueException('Invalid protobuf length-delimited field.');
                }
                $payload = substr($bytes, $offset, $payloadLength);
                $offset += $payloadLength;
                $value = $this->decodeLengthDelimited($payload, $field, $name, $modelClass, $resultType);
            } elseif ($wireType === 5) {
                $value = self::readFixed($bytes, $offset, 4);
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

    private static function varint(int $value): string
    {
        if ($value < 0) {
            return str_repeat("\xff", 9) . "\x01";
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
