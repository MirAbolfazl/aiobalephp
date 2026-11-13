<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Upvote extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "messages" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\InfoMessage::class, 'required' => true],
            "limit" => ['alias' => "2", 'type' => "int", 'required' => true],
        ]);
    }
}
