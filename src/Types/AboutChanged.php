<?php

declare(strict_types=1);

namespace Aiobale\Types;

class AboutChanged extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "user_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "about" => ['alias' => "2", 'type' => "string", 'default' => null],
        ]);
    }
}
