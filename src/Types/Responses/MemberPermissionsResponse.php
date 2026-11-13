<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class MemberPermissionsResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "permissions" => ['alias' => "1", 'type' => \Aiobale\Types\Permissions::class, 'required' => true],
        ]);
    }
}
