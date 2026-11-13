<?php

declare(strict_types=1);

namespace Aiobale\Methods\Groups;

class JoinPublicGroup extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.groups.v1.Groups"; }
    public static function methodName(): string { return "JoinPublicGroup"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\JoinedGroupResponse::class; }
}
