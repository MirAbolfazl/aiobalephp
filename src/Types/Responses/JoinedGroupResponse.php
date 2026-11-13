<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class JoinedGroupResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "group" => ['alias' => "1", 'type' => \Aiobale\Types\Group::class, 'default' => null],
            "random_id" => ['alias' => "6", 'type' => "int", 'required' => true],
            "users" => ['alias' => "7", 'type' => "array", 'items' => \Aiobale\Types\ShortPeer::class, 'default' => []],
            "inviter_id" => ['alias' => "8", 'type' => "int", 'required' => true],
            "group_seq" => ['alias' => "9", 'type' => "int", 'required' => true],
        ]);
    }
}
