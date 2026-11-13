<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ExtKeyValue extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "key" => ['alias' => "1", 'type' => "string", 'required' => true],
            "value" => ['alias' => "2", 'type' => "string", 'default' => ""],
        ]);
    }
}
