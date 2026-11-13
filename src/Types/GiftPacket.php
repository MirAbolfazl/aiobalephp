<?php

declare(strict_types=1);

namespace Aiobale\Types;

class GiftPacket extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "count" => ['alias' => "1", 'type' => "int", 'default' => 0],
            "total_amount" => ['alias' => "2", 'type' => "int", 'default' => 0],
            "giving_type" => ['alias' => "3", 'type' => \Aiobale\Enums\GivingType::class, 'default' => 0],
            "token" => ['alias' => "4", 'type' => \Aiobale\Types\StringValue::class, 'default' => null],
            "message" => ['alias' => "5", 'type' => \Aiobale\Types\StringValue::class, 'required' => true],
            "owner_id" => ['alias' => "6", 'type' => "int", 'default' => null],
            "show_amounts" => ['alias' => "7", 'type' => \Aiobale\Types\BoolValue::class, 'default' => null],
        ]);
    }
}
