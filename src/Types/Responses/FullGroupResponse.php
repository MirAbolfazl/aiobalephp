<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class FullGroupResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "fullgroup" => ['alias' => "1", 'type' => \Aiobale\Types\FullGroup::class, 'default' => null],
        ]);
    }
}
