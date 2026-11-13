<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class WalletResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "wallet" => ['alias' => "1", 'type' => \Aiobale\Types\Wallet::class, 'default' => null],
            "first_name" => ['alias' => "2", 'type' => "string", 'default' => null],
            "last_name" => ['alias' => "3", 'type' => "string", 'default' => null],
        ]);
    }
}
