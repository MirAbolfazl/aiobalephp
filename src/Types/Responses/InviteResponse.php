<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class InviteResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "not_added_users" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\Peer::class, 'default' => []],
        ]);
    }
}
