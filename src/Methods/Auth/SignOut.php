<?php

declare(strict_types=1);

namespace Aiobale\Methods\Auth;

class SignOut extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [

        ]);
    }

    public static function service(): string { return "bale.auth.v1.Auth"; }
    public static function methodName(): string { return "SignOut"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
