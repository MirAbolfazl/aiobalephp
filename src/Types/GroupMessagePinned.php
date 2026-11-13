<?php

declare(strict_types=1);

namespace Aiobale\Types;

class GroupMessagePinned extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "group_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "message_data" => ['alias' => "2", 'type' => \Aiobale\Types\MessageData::class, 'required' => true],
            "message" => ['alias' => "message", 'type' => \Aiobale\Types\Message::class, 'default' => null],
        ]);
    }
}
