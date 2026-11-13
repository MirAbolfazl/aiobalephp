<?php

declare(strict_types=1);

namespace Aiobale\Types;

class AudioExt extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "duration" => ['alias' => "1", 'type' => "int", 'default' => null],
            "album" => ['alias' => "2", 'type' => "string", 'default' => null],
            "genre" => ['alias' => "3", 'type' => "string", 'default' => null],
            "track" => ['alias' => "4", 'type' => "string", 'default' => null],
        ]);
    }
}
