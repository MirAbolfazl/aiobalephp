<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Wallet extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "is_merchant" => ['alias' => "1", 'type' => "bool", 'default' => false],
            "app" => ['alias' => "2", 'type' => "string", 'required' => true],
            "balance" => ['alias' => "3", 'type' => "int", 'default' => 0],
            "token" => ['alias' => "4", 'type' => "string", 'required' => true],
            "level" => ['alias' => "5", 'type' => "int", 'default' => 0],
            "pan" => ['alias' => "6", 'type' => "string", 'default' => null],
            "account" => ['alias' => "7", 'type' => "string", 'default' => null],
        ]);
    }
}
