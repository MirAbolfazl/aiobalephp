<?php

declare(strict_types=1);

namespace Aiobale\Methods\Groups;

class LoadMembers extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "group" => ['alias' => "1", 'type' => \Aiobale\Types\ShortPeer::class, 'required' => true],
            "limit" => ['alias' => "2", 'type' => "int", 'required' => true],
            "next_offset" => ['alias' => "3", 'type' => \Aiobale\Types\StringValue::class, 'default' => null],
            "condition" => ['alias' => "4", 'type' => \Aiobale\Types\Condition::class, 'default' => null],
        ]);
    }

    public static function service(): string { return "bale.groups.v1.Groups"; }
    public static function methodName(): string { return "LoadMembers"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\MembersResponse::class; }
}
