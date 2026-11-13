<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class FullUsersResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "data" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\FullUser::class, 'default' => []],
        ]);
    }
}
