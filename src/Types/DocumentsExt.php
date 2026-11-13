<?php

declare(strict_types=1);

namespace Aiobale\Types;

class DocumentsExt extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "photo" => ['alias' => "1", 'type' => \Aiobale\Types\PhotoExt::class, 'default' => null],
            "video" => ['alias' => "2", 'type' => \Aiobale\Types\VideoExt::class, 'default' => null],
            "voice" => ['alias' => "3", 'type' => \Aiobale\Types\VoiceExt::class, 'default' => null],
            "gif" => ['alias' => "4", 'type' => \Aiobale\Types\VideoExt::class, 'default' => null],
            "audio" => ['alias' => "5", 'type' => \Aiobale\Types\AudioExt::class, 'default' => null],
        ]);
    }
}
