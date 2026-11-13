<?php

declare(strict_types=1);

namespace Aiobale\Methods\Messaging;

class UnPinMessages extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "messages" => ['alias' => "2", 'type' => "array", 'items' => \Aiobale\Types\OtherMessage::class, 'required' => true],
            "all_messages" => ['alias' => "3", 'type' => "bool", 'default' => false],
        ]);
    }

    public static function service(): string { return "bale.messaging.v2.Messaging"; }
    public static function methodName(): string { return "UnPinMessages"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
