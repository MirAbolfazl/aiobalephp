<?php

declare(strict_types=1);

namespace Aiobale\Types;

class User extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "access_hash" => ['alias' => "2", 'type' => "int", 'required' => true],
            "name" => ['alias' => "3", 'type' => "string", 'required' => true],
            "local_name" => ['alias' => "4", 'type' => "string", 'default' => null],
            "sex" => ['alias' => "5", 'type' => "int", 'default' => null],
            "is_bot" => ['alias' => "7", 'type' => "bool", 'default' => false],
            "username" => ['alias' => "9", 'type' => "string", 'default' => null],
            "is_deleted" => ['alias' => "16", 'type' => "bool", 'default' => false],
            "created_at" => ['alias' => "19", 'type' => "int", 'required' => true],
            "ex_info" => ['alias' => "20", 'type' => \Aiobale\Types\ExInfo::class, 'required' => true],
        ]);
    }
}
