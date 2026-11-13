<?php

declare(strict_types=1);

namespace Aiobale\Methods\User;

class AddContact extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "user_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "type" => ['alias' => "2", 'type' => "int", 'default' => 1],
        ]);
    }

    public static function service(): string { return "bale.users.v1.Users"; }
    public static function methodName(): string { return "AddContact"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
