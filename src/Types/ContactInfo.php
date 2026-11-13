<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ContactInfo extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "value" => ['alias' => "3", 'type' => "int", 'default' => null],
            "title" => ['alias' => "4", 'type' => "string", 'default' => null],
        ]);
    }
}
