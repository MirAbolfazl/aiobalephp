<?php

declare(strict_types=1);

namespace Aiobale\Types;

class InlineKeyboardMarkup extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "inline_keyboard" => ['alias' => "1", 'type' => "array", 'items' => "array", 'default' => []],
        ]);
    }
}
