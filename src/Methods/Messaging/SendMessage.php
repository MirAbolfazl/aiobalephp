<?php

declare(strict_types=1);

namespace Aiobale\Methods\Messaging;

class SendMessage extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "message_id" => ['alias' => "2", 'type' => "int", 'required' => true],
            "content" => ['alias' => "3", 'type' => \Aiobale\Types\MessageContent::class, 'required' => true],
            "reply_to" => ['alias' => "5", 'type' => \Aiobale\Types\InfoMessage::class, 'default' => null],
            "chat" => ['alias' => "6", 'type' => \Aiobale\Types\Chat::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.messaging.v2.Messaging"; }
    public static function methodName(): string { return "SendMessage"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\MessageResponse::class; }
}
