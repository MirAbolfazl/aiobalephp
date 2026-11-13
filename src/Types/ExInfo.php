<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ExInfo extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "expeer_type" => ['alias' => "1", 'type' => \Aiobale\Enums\ChatType::class, 'required' => true],
            "identified" => ['alias' => "2", 'type' => "bool", 'default' => false],
        ]);
    }
}
