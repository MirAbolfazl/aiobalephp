<?php

declare(strict_types=1);

namespace Aiobale\Types;

class GiftOpened extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "user_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "others_count" => ['alias' => "2", 'type' => "int", 'default' => null],
            "message_id" => ['alias' => "3", 'type' => "int", 'required' => true],
            "message_date" => ['alias' => "4", 'type' => "int", 'required' => true],
        ]);
    }
}
