<?php

declare(strict_types=1);

namespace Aiobale\Methods\Groups;

class SetGroupDefaultPermissions extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "group" => ['alias' => "1", 'type' => \Aiobale\Types\ShortPeer::class, 'required' => true],
            "permissions" => ['alias' => "2", 'type' => \Aiobale\Types\Permissions::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.groups.v1.Groups"; }
    public static function methodName(): string { return "SetGroupDefaultPermissions"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
