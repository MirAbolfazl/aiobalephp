<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class UsersResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "data" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\User::class, 'default' => []],
        ]);
    }
}
