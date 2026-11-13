<?php

declare(strict_types=1);

namespace Aiobale\Types;

class VideoExt extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "w" => ['alias' => "1", 'type' => "int", 'default' => null],
            "h" => ['alias' => "2", 'type' => "int", 'default' => null],
            "duration" => ['alias' => "3", 'type' => "int", 'default' => null],
        ]);
    }
}
