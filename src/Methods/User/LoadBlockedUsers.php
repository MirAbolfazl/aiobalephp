<?php

declare(strict_types=1);

namespace Aiobale\Methods\User;

class LoadBlockedUsers extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [

        ]);
    }

    public static function service(): string { return "bale.users.v1.Users"; }
    public static function methodName(): string { return "LoadBlockedUsers"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\BlockedUsersResponse::class; }
}
