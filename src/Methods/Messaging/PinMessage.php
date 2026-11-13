<?php

declare(strict_types=1);

namespace Aiobale\Methods\Messaging;

class PinMessage extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "message" => ['alias' => "2", 'type' => \Aiobale\Types\OtherMessage::class, 'required' => true],
            "just_me" => ['alias' => "3", 'type' => "bool", 'default' => null],
        ]);
    }

    public static function service(): string { return "bale.messaging.v2.Messaging"; }
    public static function methodName(): string { return "PinMessage"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
