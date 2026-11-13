<?php

declare(strict_types=1);

namespace Aiobale\Types;

class VoiceExt extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "duration" => ['alias' => "1", 'type' => "int", 'default' => null],
        ]);
    }
}
