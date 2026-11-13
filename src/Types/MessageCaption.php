<?php

declare(strict_types=1);

namespace Aiobale\Types;

class MessageCaption extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "content" => ['alias' => "1", 'type' => "string", 'default' => null],
            "mentions" => ['alias' => "2", 'type' => "mixed", 'default' => []],
            "ext" => ['alias' => "3", 'type' => "mixed", 'default' => []],
        ]);
    }
}
