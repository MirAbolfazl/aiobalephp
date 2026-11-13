<?php

declare(strict_types=1);

namespace Aiobale\Types;

class BaleError extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "topic" => ['alias' => "1", 'type' => "int", 'required' => true],
            "message" => ['alias' => "2", 'type' => "string", 'required' => true],
        ]);
    }
}
