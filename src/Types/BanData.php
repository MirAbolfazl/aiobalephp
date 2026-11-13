<?php

declare(strict_types=1);

namespace Aiobale\Types;

class BanData extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "banned_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "banner_id" => ['alias' => "2", 'type' => "int", 'required' => true],
        ]);
    }
}
