<?php

declare(strict_types=1);

namespace Aiobale\Types;

class FileDetails extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "name" => ['alias' => "name", 'type' => "string", 'required' => true],
            "size" => ['alias' => "size", 'type' => "int", 'required' => true],
            "mime_type" => ['alias' => "mime_type", 'type' => "string", 'required' => true],
            "file_id" => ['alias' => "file_id", 'type' => "int", 'required' => true],
            "access_hash" => ['alias' => "access_hash", 'type' => "int", 'required' => true],
        ]);
    }
}
