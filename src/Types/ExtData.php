<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ExtData extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "name" => ['alias' => "1", 'type' => "string", 'required' => true],
            "value" => ['alias' => "2", 'type' => \Aiobale\Types\ExtValue::class, 'required' => true],
        ]);
    }
}
