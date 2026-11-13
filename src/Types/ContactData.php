<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ContactData extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "phone_number" => ['alias' => "1", 'type' => "int", 'required' => true],
            "name" => ['alias' => "2", 'type' => \Aiobale\Types\StringValue::class, 'required' => true],
        ]);
    }
}
