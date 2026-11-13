<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class PacketResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "receivers" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\Winner::class, 'default' => []],
            "status" => ['alias' => "2", 'type' => \Aiobale\Enums\GiftOpenning::class, 'default' => 0],
            "openned_count" => ['alias' => "3", 'type' => "int", 'required' => true],
            "win_amount" => ['alias' => "4", 'type' => "int", 'required' => true],
            "rank" => ['alias' => "5", 'type' => "int", 'required' => true],
        ]);
    }
}
