<?php

declare(strict_types=1);

namespace Aiobale\Methods\Presence;

class SetOnline extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "is_online" => ['alias' => "1", 'type' => "bool", 'required' => true],
            "timeout" => ['alias' => "2", 'type' => "int", 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.presence.v1.Presence"; }
    public static function methodName(): string { return "SetOnline"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
