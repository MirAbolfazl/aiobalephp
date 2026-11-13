<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Chat extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "type" => ['alias' => "1", 'type' => \Aiobale\Enums\ChatType::class, 'required' => true],
            "id" => ['alias' => "2", 'type' => "int", 'required' => true],
        ]);
    }
}
