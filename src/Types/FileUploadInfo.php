<?php

declare(strict_types=1);

namespace Aiobale\Types;

class FileUploadInfo extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "file_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "url" => ['alias' => "2", 'type' => "string", 'default' => ''],
            "duplicate" => ['alias' => "3", 'type' => "bool", 'default' => false],
            "chunk_size" => ['alias' => "4", 'type' => "int", 'default' => 262144],
            "block_size" => ['alias' => "5", 'type' => "int", 'default' => null],
        ]);
    }
}
