<?php

declare(strict_types=1);

namespace Aiobale\Methods\Messaging;

class ForwardMessages extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "message_ids" => ['alias' => "2", 'type' => "array", 'items' => "int", 'required' => true],
            "forwarded_messages" => ['alias' => "3", 'type' => "array", 'items' => \Aiobale\Types\InfoMessage::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.messaging.v2.Messaging"; }
    public static function methodName(): string { return "ForwardMessages"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
