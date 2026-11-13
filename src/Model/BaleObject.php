<?php

declare(strict_types=1);

namespace Aiobale\Model;

use BackedEnum;
use JsonSerializable;
use UnexpectedValueException;

abstract class BaleObject implements JsonSerializable
{
    /** @var array<string, mixed> */
    private array $attributes = [];

    private ?object $boundClient = null;

    /** @return array<string, array<string, mixed>> */
    public static function schema(): array
    {
        return [];
    }

    /**
     * Accepts either an associative array or named arguments, e.g.
     * new Peer(user_id: 123), as well as new Peer(['user_id' => 123]).
     *
     * @param array<string|int, mixed> $data
     */
    public function __construct(array $data = [], mixed ...$fields)
    {
        $data = array_replace($data, $fields);
        $schema = static::schema();
        $byAlias = [];
        foreach ($schema as $name => $definition) {
            $byAlias[(string) ($definition['alias'] ?? $name)] = $name;
        }

        foreach ($data as $key => $value) {
            $name = $byAlias[(string) $key] ?? (string) $key;
            $definition = $schema[$name] ?? null;
            if ($definition !== null) {
                $this->attributes[$name] = self::normalize($value, $definition);
            } else {
                $this->attributes[$name] = self::normalizeValue($value);
            }
        }

        foreach ($schema as $name => $definition) {
            if (!array_key_exists($name, $this->attributes)) {
                if (array_key_exists('default', $definition)) {
                    $this->attributes[$name] = $definition['default'];
                } elseif (isset($definition['defaultFactory']) && is_callable($definition['defaultFactory'])) {
                    $this->attributes[$name] = ($definition['defaultFactory'])();
                } elseif (($definition['required'] ?? false) === true) {
                    throw new UnexpectedValueException(
                        sprintf('%s requires field "%s".', static::class, $name),
                    );
                }
            }
        }
    }

    public static function fromWire(array $data): static
    {
        return new static($data);
    }

    public function as(?object $client): static
    {
        $this->boundClient = $client;
        return $this;
    }

    public function client(): ?object
    {
        return $this->boundClient;
    }

    public function __get(string $name): mixed
    {
        return $this->attributes[$name] ?? null;
    }

    public function __set(string $name, mixed $value): void
    {
        $schema = static::schema();
        if (isset($schema[$name])) {
            $this->attributes[$name] = self::normalize($value, $schema[$name]);
        } else {
            $this->attributes[$name] = self::normalizeValue($value);
        }
    }

    public function __isset(string $name): bool
    {
        return isset($this->attributes[$name]);
    }

    /** @return array<string|int, mixed> */
    public function modelDump(bool $byAlias = true, bool $excludeNone = true): array
    {
        $result = [];
        $schema = static::schema();

        foreach ($this->attributes as $name => $value) {
            if ($excludeNone && $value === null) {
                continue;
            }

            $key = $byAlias && isset($schema[$name]['alias'])
                ? (string) $schema[$name]['alias']
                : $name;
            $result[$key] = self::dumpValue($value, $byAlias, $excludeNone);
        }

        return $result;
    }

    public function jsonSerialize(): array
    {
        return $this->modelDump();
    }

    /** @return array<string, mixed> */
    public function toArray(bool $byAlias = false): array
    {
        return $this->modelDump($byAlias, false);
    }

    /**
     * @param array<string, mixed> $definition
     */
    private static function normalize(mixed $value, array $definition): mixed
    {
        if ($value === null) {
            return null;
        }

        if (($definition['type'] ?? null) === 'array') {
            if (!is_array($value)) {
                if (!array_key_exists('items', $definition)) {
                    throw new UnexpectedValueException('Expected an array value.');
                }
                $value = [$value];
            }

            $itemType = $definition['items'] ?? 'mixed';
            return array_map(
                static fn (mixed $item): mixed => self::normalizeTyped($item, $itemType),
                $value,
            );
        }

        return self::normalizeTyped($value, $definition['type'] ?? 'mixed');
    }

    private static function normalizeTyped(mixed $value, mixed $type): mixed
    {
        if ($value === null || $type === 'mixed' || $type === 'array') {
            return self::normalizeValue($value);
        }

        if (
            is_array($value)
            && count($value) === 1
            && array_key_exists(1, $value)
            && ($type === 'int' || $type === 'bool' || $type === 'string' || (is_string($type) && enum_exists($type)))
        ) {
            $value = $value[1];
        }

        if (is_string($type) && enum_exists($type) && is_subclass_of($type, BackedEnum::class)) {
            if ($value instanceof $type) {
                return $value;
            }

            $enum = $type::tryFrom($value);
            if ($enum === null) {
                throw new UnexpectedValueException(sprintf('Invalid value for enum %s.', $type));
            }
            return $enum;
        }

        if (is_string($type) && class_exists($type)) {
            if ($value instanceof $type) {
                return $value;
            }

            if (is_array($value) && is_subclass_of($type, self::class)) {
                return $type::fromWire($value);
            }
        }

        if ($type === 'bool') {
            return (bool) $value;
        }

        return self::normalizeValue($value);
    }

    private static function normalizeValue(mixed $value): mixed
    {
        if ($value instanceof BackedEnum) {
            return $value->value;
        }

        if ($value instanceof self) {
            return $value;
        }

        if (is_array($value)) {
            foreach ($value as $key => $item) {
                $value[$key] = self::normalizeValue($item);
            }
        }

        return $value;
    }

    private static function dumpValue(mixed $value, bool $byAlias, bool $excludeNone): mixed
    {
        if ($value instanceof self) {
            return $value->modelDump($byAlias, $excludeNone);
        }

        if ($value instanceof BackedEnum) {
            return $value->value;
        }

        if (is_bool($value)) {
            return $value ? 1 : 0;
        }

        if (is_array($value)) {
            $result = [];
            foreach ($value as $key => $item) {
                if ($excludeNone && $item === null) {
                    continue;
                }
                $result[$key] = self::dumpValue($item, $byAlias, $excludeNone);
            }
            return $result;
        }

        return $value;
    }
}
