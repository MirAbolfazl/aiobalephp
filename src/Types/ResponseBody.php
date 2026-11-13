<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ResponseBody extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "error" => ['alias' => "1", 'type' => \Aiobale\Types\BaleError::class, 'default' => null],
            "result" => ['alias' => "2", 'type' => "mixed", 'default' => null],
            "number" => ['alias' => "3", 'type' => "int", 'required' => true],
        ]);
    }
}
