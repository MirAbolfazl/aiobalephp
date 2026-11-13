<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class BannedUsersResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "users" => ['alias' => "3", 'type' => "array", 'items' => \Aiobale\Types\BanData::class, 'default' => []],
        ]);
    }
}
