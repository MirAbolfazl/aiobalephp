<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class GetPinsResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "pins_data" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\MessageData::class, 'default' => []],
            "count" => ['alias' => "2", 'type' => "int", 'default' => 0],
            "method_data" => ['alias' => "method_data", 'type' => "mixed", 'required' => true],
            "pins" => ['alias' => "pins", 'type' => "array", 'items' => \Aiobale\Types\Message::class, 'default' => []],
        ]);
    }
}
