<?php

declare(strict_types=1);

namespace Aiobale\Methods\Presence;

class StopTyping extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "typing_type" => ['alias' => "2", 'type' => \Aiobale\Enums\TypingMode::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.presence.v1.Presence"; }
    public static function methodName(): string { return "StopTyping"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
