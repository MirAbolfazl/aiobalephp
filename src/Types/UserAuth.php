<?php

declare(strict_types=1);

namespace Aiobale\Types;

class UserAuth extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "access_hash" => ['alias' => "2", 'type' => "int", 'default' => -1],
            "name" => ['alias' => "3", 'type' => "string", 'required' => true],
            "username" => ['alias' => "9", 'type' => \Aiobale\Types\StringValue::class, 'default' => null],
        ]);
    }
}
