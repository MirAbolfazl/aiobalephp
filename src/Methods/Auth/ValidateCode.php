<?php

declare(strict_types=1);

namespace Aiobale\Methods\Auth;

class ValidateCode extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "transaction_hash" => ['alias' => "1", 'type' => "string", 'required' => true],
            "code" => ['alias' => "2", 'type' => "string", 'required' => true],
            "is_jwt" => ['alias' => "3", 'type' => "mixed", 'default' => ["1" => 1]],
        ]);
    }

    public static function service(): string { return "bale.auth.v1.Auth"; }
    public static function methodName(): string { return "ValidateCode"; }
    public static function returning(): ?string { return null; }
}
