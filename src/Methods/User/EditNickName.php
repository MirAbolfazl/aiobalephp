<?php

declare(strict_types=1);

namespace Aiobale\Methods\User;

class EditNickName extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "nick_name" => ['alias' => "1", 'type' => \Aiobale\Types\StringValue::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.users.v1.Users"; }
    public static function methodName(): string { return "EditNickName"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
