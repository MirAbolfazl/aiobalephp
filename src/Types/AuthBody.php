<?php

declare(strict_types=1);

namespace Aiobale\Types;

class AuthBody extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "authorized" => ['alias' => "1", 'type' => "int", 'required' => true],
            "ready" => ['alias' => "2", 'type' => "int", 'required' => true],
        ]);
    }
}
