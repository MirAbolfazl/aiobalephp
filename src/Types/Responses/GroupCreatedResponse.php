<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class GroupCreatedResponse extends \Aiobale\Types\Responses\DefaultResponse
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "group" => ['alias' => "3", 'type' => \Aiobale\Types\Group::class, 'default' => null],
            "users" => ['alias' => "5", 'type' => "array", 'items' => \Aiobale\Types\ShortPeer::class, 'default' => []],
            "not_added_users" => ['alias' => "6", 'type' => "array", 'items' => \Aiobale\Types\ShortPeer::class, 'default' => []],
            "invite_link" => ['alias' => "7", 'type' => "string", 'required' => true],
        ]);
    }
}
