<?php

declare(strict_types=1);

namespace Aiobale\Types;

class DocumentMessage extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "file_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "access_hash" => ['alias' => "2", 'type' => "int", 'required' => true],
            "size" => ['alias' => "3", 'type' => "int", 'default' => null],
            "name" => ['alias' => "4", 'type' => "string", 'default' => null],
            "mime_type" => ['alias' => "5", 'type' => "string", 'required' => true],
            "thumb" => ['alias' => "6", 'type' => \Aiobale\Types\Thumbnail::class, 'default' => null],
            "ext" => ['alias' => "7", 'type' => \Aiobale\Types\DocumentsExt::class, 'default' => null],
            "caption" => ['alias' => "8", 'type' => \Aiobale\Types\MessageCaption::class, 'default' => null],
        ]);
    }
}
