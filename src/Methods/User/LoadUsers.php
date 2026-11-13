<?php

declare(strict_types=1);

namespace Aiobale\Methods\User;

class LoadUsers extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peers" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\InfoPeer::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.users.v1.Users"; }
    public static function methodName(): string { return "LoadUsers"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\UsersResponse::class; }
}
