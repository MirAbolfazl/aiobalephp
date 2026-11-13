<?php

declare(strict_types=1);

namespace Aiobale\Types;

class MessageData extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "sender_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "message_id" => ['alias' => "2", 'type' => "int", 'required' => true],
            "date" => ['alias' => "3", 'type' => "int", 'required' => true],
            "content" => ['alias' => "4", 'type' => \Aiobale\Types\MessageContent::class, 'required' => true],
            "replied_to" => ['alias' => "8", 'type' => \Aiobale\Types\QuotedMessage::class, 'default' => null],
            "previous_message" => ['alias' => "10", 'type' => \Aiobale\Types\OtherMessage::class, 'default' => null],
            "next_message" => ['alias' => "11", 'type' => \Aiobale\Types\OtherMessage::class, 'default' => null],
            "edited_at" => ['alias' => "12", 'type' => "int", 'default' => null],
            "chat" => ['alias' => "chat", 'type' => \Aiobale\Types\Chat::class, 'default' => null],
        ]);
    }
}
