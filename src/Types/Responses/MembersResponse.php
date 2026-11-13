<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class MembersResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "members" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\Member::class, 'default' => []],
        ]);
    }
}
