<?php

declare(strict_types=1);

namespace Aiobale\Methods\Messaging;

class MessageRead extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "date" => ['alias' => "2", 'type' => "int", 'default' => null],
        ]);
    }

    public static function service(): string { return "bale.messaging.v2.Messaging"; }
    public static function methodName(): string { return "MessageRead"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
