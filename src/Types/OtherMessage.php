<?php

declare(strict_types=1);

namespace Aiobale\Types;

class OtherMessage extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "date" => ['alias' => "1", 'type' => "int", 'required' => true],
            "message_id" => ['alias' => "2", 'type' => "int", 'required' => true],
            "seq" => ['alias' => "3", 'type' => "int", 'default' => null],
        ]);
    }
}
