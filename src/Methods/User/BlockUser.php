<?php

declare(strict_types=1);

namespace Aiobale\Methods\User;

class BlockUser extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\InfoPeer::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.users.v1.Users"; }
    public static function methodName(): string { return "BlockUser"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
