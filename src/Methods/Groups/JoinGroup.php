<?php

declare(strict_types=1);

namespace Aiobale\Methods\Groups;

class JoinGroup extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "token" => ['alias' => "1", 'type' => "string", 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.groups.v1.Groups"; }
    public static function methodName(): string { return "JoinGroup"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\JoinedGroupResponse::class; }
}
