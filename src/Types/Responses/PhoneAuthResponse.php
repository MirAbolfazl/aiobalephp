<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class PhoneAuthResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "transaction_hash" => ['alias' => "1", 'type' => "string", 'required' => true],
            "is_registered" => ['alias' => "2", 'type' => "bool", 'default' => false],
            "sent_code_type" => ['alias' => "5", 'type' => \Aiobale\Enums\SendCodeType::class, 'required' => true],
            "code_expiration_date" => ['alias' => "6", 'type' => \Aiobale\Types\Responses\Value::class, 'required' => true],
            "next_send_code_type" => ['alias' => "7", 'type' => \Aiobale\Enums\SendCodeType::class, 'default' => null],
            "code_timeout" => ['alias' => "8", 'type' => \Aiobale\Types\Responses\Value::class, 'required' => true],
        ]);
    }
}
