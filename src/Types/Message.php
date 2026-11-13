<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Message extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "chat" => ['alias' => "1", 'type' => \Aiobale\Types\Chat::class, 'required' => true],
            "sender_id" => ['alias' => "2", 'type' => "int", 'required' => true],
            "date" => ['alias' => "3", 'type' => "int", 'required' => true],
            "message_id" => ['alias' => "4", 'type' => "int", 'required' => true],
            "content" => ['alias' => "5", 'type' => \Aiobale\Types\MessageContent::class, 'required' => true],
            "quoted_replied_to" => ['alias' => "7", 'type' => \Aiobale\Types\QuotedMessage::class, 'default' => null],
            "previous_message" => ['alias' => "9", 'type' => \Aiobale\Types\OtherMessage::class, 'default' => null],
            "next_message" => ['alias' => "next_message", 'type' => \Aiobale\Types\OtherMessage::class, 'default' => null],
            "replied_to" => ['alias' => "replied_to", 'type' => \Aiobale\Types\Message::class, 'default' => null],
        ]);
    }
}
