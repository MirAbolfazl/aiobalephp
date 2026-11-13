<?php

declare(strict_types=1);

namespace Aiobale\Methods\Auth;

class SignUp extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "transaction_hash" => ['alias' => "1", 'type' => "string", 'required' => true],
            "name" => ['alias' => "2", 'type' => "string", 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.auth.v1.Auth"; }
    public static function methodName(): string { return "SignUp"; }
    public static function returning(): ?string { return null; }
}
