<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Winner extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "amount" => ['alias' => "2", 'type' => "int", 'default' => 0],
            "date" => ['alias' => "3", 'type' => "int", 'default' => null],
        ]);
    }
}
