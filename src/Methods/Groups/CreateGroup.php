<?php

declare(strict_types=1);

namespace Aiobale\Methods\Groups;

class CreateGroup extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "random_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "title" => ['alias' => "2", 'type' => "string", 'required' => true],
            "users" => ['alias' => "3", 'type' => "array", 'items' => \Aiobale\Types\ShortPeer::class, 'default' => null],
            "group_type" => ['alias' => "6", 'type' => \Aiobale\Enums\GroupType::class, 'default' => 0],
            "username" => ['alias' => "8", 'type' => \Aiobale\Types\StringValue::class, 'default' => null],
            "restriction" => ['alias' => "9", 'type' => \Aiobale\Enums\Restriction::class, 'default' => 0],
        ]);
    }

    public static function service(): string { return "bale.groups.v1.Groups"; }
    public static function methodName(): string { return "CreateGroup"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\GroupCreatedResponse::class; }
}
