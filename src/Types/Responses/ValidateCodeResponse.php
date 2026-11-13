<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class ValidateCodeResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "user" => ['alias' => "2", 'type' => \Aiobale\Types\UserAuth::class, 'required' => true],
            "jwt" => ['alias' => "4", 'type' => \Aiobale\Types\StringValue::class, 'required' => true],
        ]);
    }
}
