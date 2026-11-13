<?php

declare(strict_types=1);

namespace Aiobale\Methods\Messaging;

class DeleteMessage extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "message_ids" => ['alias' => "2", 'type' => "array", 'items' => "int", 'required' => true],
            "dates" => ['alias' => "3", 'type' => \Aiobale\Types\IntListValue::class, 'required' => true],
            "just_me" => ['alias' => "4", 'type' => \Aiobale\Types\IntValue::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.messaging.v2.Messaging"; }
    public static function methodName(): string { return "DeleteMessage"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
