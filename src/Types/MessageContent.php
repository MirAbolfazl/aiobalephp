<?php

declare(strict_types=1);

namespace Aiobale\Types;

class MessageContent extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "document" => ['alias' => "4", 'type' => \Aiobale\Types\DocumentMessage::class, 'default' => null],
            "empty" => ['alias' => "5", 'type' => "bool", 'default' => false],
            "text" => ['alias' => "15", 'type' => \Aiobale\Types\TextMessage::class, 'default' => null],
            "service_message" => ['alias' => "11", 'type' => \Aiobale\Types\ServiceMessage::class, 'default' => null],
            "bot_message" => ['alias' => "13", 'type' => \Aiobale\Types\TemplateMessage::class, 'default' => null],
            "gift" => ['alias' => "17", 'type' => \Aiobale\Types\GiftPacket::class, 'default' => null],
        ]);
    }
}
