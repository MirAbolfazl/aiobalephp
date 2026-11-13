<?php

declare(strict_types=1);

namespace Aiobale\Types;

class MessageReactions extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "date" => ['alias' => "2", 'type' => "int", 'required' => true],
            "reactions" => ['alias' => "3", 'type' => "array", 'items' => \Aiobale\Types\Reaction::class, 'default' => []],
        ]);
    }
}
