<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ReactionData extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "user_id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "emoji" => ['alias' => "2", 'type' => "string", 'required' => true],
            "date" => ['alias' => "3", 'type' => "int", 'required' => true],
        ]);
    }
}
