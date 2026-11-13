<?php

declare(strict_types=1);

namespace Aiobale\Types;

class GroupPinRemoved extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "group_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "message" => ['alias' => "2", 'type' => \Aiobale\Types\OtherMessage::class, 'default' => null],
        ]);
    }
}
