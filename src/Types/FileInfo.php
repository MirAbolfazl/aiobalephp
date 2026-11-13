<?php

declare(strict_types=1);

namespace Aiobale\Types;

class FileInfo extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "file_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "access_hash" => ['alias' => "2", 'type' => "int", 'required' => true],
            "file_storage_version" => ['alias' => "3", 'type' => \Aiobale\Types\IntValue::class, 'default' => null],
        ]);
    }
}
