<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Group extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "access_hash" => ['alias' => "2", 'type' => "int", 'default' => null],
            "title" => ['alias' => "3", 'type' => "string", 'required' => true],
            "is_member" => ['alias' => "5", 'type' => "bool", 'default' => false],
            "is_hidden" => ['alias' => "12", 'type' => "bool", 'default' => false],
            "group_type" => ['alias' => "15", 'type' => \Aiobale\Enums\GroupType::class, 'default' => 0],
            "can_send_message" => ['alias' => "16", 'type' => "bool", 'default' => false],
            "username" => ['alias' => "17", 'type' => "string", 'default' => null],
            "is_orphaned" => ['alias' => "18", 'type' => "bool", 'default' => false],
            "members_count" => ['alias' => "20", 'type' => "int", 'required' => true],
            "permissions" => ['alias' => "30", 'type' => \Aiobale\Types\Permissions::class, 'default' => null],
            "default_permissions" => ['alias' => "31", 'type' => \Aiobale\Types\Permissions::class, 'default' => null],
            "owner_id" => ['alias' => "32", 'type' => "int", 'default' => null],
            "available_reactions" => ['alias' => "33", 'type' => "array", 'items' => "string", 'default' => []],
            "is_suspend" => ['alias' => "36", 'type' => "bool", 'default' => false],
            "restriction" => ['alias' => "40", 'type' => \Aiobale\Enums\Restriction::class, 'default' => 0],
        ]);
    }
}
