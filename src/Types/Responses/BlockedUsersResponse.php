<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class BlockedUsersResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "users" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\InfoPeer::class, 'default' => []],
        ]);
    }
}
