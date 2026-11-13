<?php

declare(strict_types=1);

namespace Aiobale\Types;

class FullGroup extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "access_hash" => ['alias' => "2", 'type' => "int", 'default' => null],
            "title" => ['alias' => "3", 'type' => "string", 'required' => true],
            "owner_id" => ['alias' => "5", 'type' => "int", 'default' => null],
            "created_at" => ['alias' => "6", 'type' => "int", 'default' => null],
            "group_type" => ['alias' => "7", 'type' => \Aiobale\Enums\GroupType::class, 'default' => 0],
            "is_joined" => ['alias' => "8", 'type' => "bool", 'default' => false],
            "members_count" => ['alias' => "10", 'type' => "int", 'required' => true],
            "username" => ['alias' => "11", 'type' => "string", 'default' => null],
            "is_orphaned" => ['alias' => "12", 'type' => "bool", 'default' => false],
            "permissions" => ['alias' => "13", 'type' => \Aiobale\Types\Permissions::class, 'default' => null],
            "default_permissions" => ['alias' => "14", 'type' => \Aiobale\Types\Permissions::class, 'default' => null],
            "about" => ['alias' => "16", 'type' => "string", 'default' => null],
            "members" => ['alias' => "17", 'type' => "array", 'items' => \Aiobale\Types\Member::class, 'default' => null],
            "ex_info" => ['alias' => "18", 'type' => \Aiobale\Types\ExInfo::class, 'default' => null],
            "available_reactions" => ['alias' => "24", 'type' => "array", 'items' => "string", 'default' => []],
            "is_suspend" => ['alias' => "25", 'type' => "bool", 'default' => false],
            "privacy_mode" => ['alias' => "28", 'type' => \Aiobale\Enums\PrivacyMode::class, 'default' => null],
        ]);
    }
}
