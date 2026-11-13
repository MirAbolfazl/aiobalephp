<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ClientData extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "id" => ['alias' => "user_id", 'type' => "int", 'required' => true],
            "user" => ['alias' => "user", 'type' => \Aiobale\Types\UserAuth::class, 'required' => true],
            "app_id" => ['alias' => "app_id", 'type' => "int", 'required' => true],
            "auth_id" => ['alias' => "auth_id", 'type' => "string", 'required' => true],
            "auth_sid" => ['alias' => "auth_sid", 'type' => "int", 'required' => true],
            "service" => ['alias' => "service", 'type' => "string", 'required' => true],
        ]);
    }
}
