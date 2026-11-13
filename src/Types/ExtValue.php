<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ExtValue extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "string" => ['alias' => "1", 'type' => "string", 'default' => null],
            "number" => ['alias' => "4", 'type' => "int", 'default' => null],
        ]);
    }
}
