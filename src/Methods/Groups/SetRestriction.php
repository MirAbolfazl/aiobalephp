<?php

declare(strict_types=1);

namespace Aiobale\Methods\Groups;

class SetRestriction extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "group" => ['alias' => "1", 'type' => \Aiobale\Types\ShortPeer::class, 'required' => true],
            "restriction" => ['alias' => "2", 'type' => \Aiobale\Enums\Restriction::class, 'required' => true],
            "username" => ['alias' => "3", 'type' => \Aiobale\Types\StringValue::class, 'default' => null],
        ]);
    }

    public static function service(): string { return "bale.groups.v1.Groups"; }
    public static function methodName(): string { return "SetRestriction"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
