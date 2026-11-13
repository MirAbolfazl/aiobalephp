<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Response extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "response" => ['alias' => "1", 'type' => \Aiobale\Types\ResponseBody::class, 'default' => null],
            "update" => ['alias' => "2", 'type' => \Aiobale\Types\UpdateField::class, 'default' => null],
            "terminate_session" => ['alias' => "3", 'type' => "mixed", 'default' => null],
            "pong" => ['alias' => "4", 'type' => \Aiobale\Types\IntValue::class, 'default' => null],
            "handshake" => ['alias' => "5", 'type' => "mixed", 'default' => null],
        ]);
    }
}
