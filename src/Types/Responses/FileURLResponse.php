<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class FileURLResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "file_urls" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\FileURL::class, 'default' => []],
        ]);
    }
}
