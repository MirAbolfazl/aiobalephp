<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ServiceExt extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "gift_opened" => ['alias' => "18", 'type' => \Aiobale\Types\GiftOpened::class, 'default' => null],
        ]);
    }
}
