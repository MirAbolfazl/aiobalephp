<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Condition extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "excepted_permissions" => ['alias' => "1", 'type' => \Aiobale\Types\BoolValue::class, 'default' => null],
            "contacts" => ['alias' => "2", 'type' => \Aiobale\Types\BoolValue::class, 'default' => null],
        ]);
    }
}
