<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Member extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "inviter_id" => ['alias' => "2", 'type' => "int", 'default' => null],
            "date" => ['alias' => "3", 'type' => "int", 'default' => null],
            "is_admin" => ['alias' => "4", 'type' => "bool", 'default' => false],
            "promoted_by" => ['alias' => "5", 'type' => "int", 'default' => null],
            "promoted_at" => ['alias' => "6", 'type' => "int", 'default' => null],
            "permissions" => ['alias' => "7", 'type' => "array", 'items' => \Aiobale\Types\Permissions::class, 'default' => null],
        ]);
    }
}
