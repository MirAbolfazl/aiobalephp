<?php

declare(strict_types=1);

namespace Aiobale\Types;

class FileURL extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "file_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "url" => ['alias' => "2", 'type' => "string", 'required' => true],
            "timeout" => ['alias' => "3", 'type' => "int", 'required' => true],
            "chunk_size" => ['alias' => "7", 'type' => "int", 'default' => 65536],
        ]);
    }
}
