<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Thumbnail extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "w" => ['alias' => "1", 'type' => "int", 'required' => true],
            "h" => ['alias' => "2", 'type' => "int", 'required' => true],
            "image" => ['alias' => "3", 'type' => "mixed", 'required' => true],
        ]);
    }
}
