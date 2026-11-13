<?php

declare(strict_types=1);

namespace Aiobale\Methods\Auth;

class StartPhoneAuth extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "phone_number" => ['alias' => "1", 'type' => "int", 'required' => true],
            "app_id" => ['alias' => "2", 'type' => "int", 'required' => true],
            "app_key" => ['alias' => "3", 'type' => "string", 'required' => true],
            "device_hash" => ['alias' => "4", 'type' => "string", 'required' => true],
            "device_title" => ['alias' => "5", 'type' => "string", 'required' => true],
            "send_code_type" => ['alias' => "9", 'type' => \Aiobale\Enums\SendCodeType::class, 'required' => true],
            "options" => ['alias' => "10", 'type' => "mixed", 'default' => ["0" => 1]],
        ]);
    }

    public static function service(): string { return "bale.auth.v1.Auth"; }
    public static function methodName(): string { return "StartPhoneAuth"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\PhoneAuthResponse::class; }
}
