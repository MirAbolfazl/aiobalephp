<?php

declare(strict_types=1);

namespace Aiobale\Types;

class UpdatedMessage extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "message_id" => ['alias' => "2", 'type' => "int", 'required' => true],
            "content" => ['alias' => "3", 'type' => \Aiobale\Types\MessageContent::class, 'required' => true],
            "date" => ['alias' => "4", 'type' => \Aiobale\Types\IntValue::class, 'required' => true],
            "sender_id" => ['alias' => "5", 'type' => \Aiobale\Types\IntValue::class, 'required' => true],
        ]);
    }
}
