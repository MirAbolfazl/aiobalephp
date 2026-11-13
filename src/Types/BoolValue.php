<?php

declare(strict_types=1);

namespace Aiobale\Types;

class BoolValue extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "value" => ['alias' => "1", 'type' => "bool", 'required' => true],
        ]);
    }
}
