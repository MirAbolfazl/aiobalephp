<?php

declare(strict_types=1);

namespace Aiobale\Types;

class MessageViews extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "message" => ['alias' => "1", 'type' => \Aiobale\Types\OtherMessage::class, 'required' => true],
            "views" => ['alias' => "2", 'type' => "int", 'required' => true],
        ]);
    }
}
