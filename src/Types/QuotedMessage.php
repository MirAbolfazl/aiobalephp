<?php

declare(strict_types=1);

namespace Aiobale\Types;

class QuotedMessage extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "message_id" => ['alias' => "1", 'type' => \Aiobale\Types\IntValue::class, 'required' => true],
            "sender_id" => ['alias' => "3", 'type' => "int", 'required' => true],
            "date" => ['alias' => "4", 'type' => "int", 'required' => true],
            "content" => ['alias' => "5", 'type' => \Aiobale\Types\MessageContent::class, 'required' => true],
            "peer" => ['alias' => "6", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "chat" => ['alias' => "chat", 'type' => \Aiobale\Types\Chat::class, 'default' => null],
        ]);
    }
}
