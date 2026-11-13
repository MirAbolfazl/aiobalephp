<?php

declare(strict_types=1);

namespace Aiobale\Types;

class UpdateBody extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "body" => ['alias' => "1", 'type' => \Aiobale\Types\Update::class, 'default' => null],
            "update_id" => ['alias' => "3", 'type' => "int", 'default' => null],
            "date" => ['alias' => "4", 'type' => "int", 'required' => true],
        ]);
    }
}
