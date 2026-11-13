<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Request extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "body" => ['alias' => "1", 'type' => \Aiobale\Types\RequestBody::class, 'default' => null],
            "ping" => ['alias' => "2", 'type' => \Aiobale\Types\IntValue::class, 'default' => null],
            "handshake" => ['alias' => "3", 'type' => \Aiobale\Types\AuthBody::class, 'default' => null],
        ]);
    }
}
