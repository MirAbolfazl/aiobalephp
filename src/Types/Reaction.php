<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Reaction extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "users" => ['alias' => "1", 'type' => "array", 'items' => "int", 'default' => []],
            "emojy" => ['alias' => "2", 'type' => "string", 'required' => true],
            "count" => ['alias' => "3", 'type' => "int", 'required' => true],
        ]);
    }
}
