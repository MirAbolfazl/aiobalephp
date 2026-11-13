<?php

declare(strict_types=1);

namespace Aiobale\Types;

class InlineKeyboardButton extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "text" => ['alias' => "1", 'type' => "string", 'required' => true],
            "url" => ['alias' => "2", 'type' => "string", 'default' => null],
            "callback_data" => ['alias' => "3", 'type' => "string", 'default' => null],
            "copy_text" => ['alias' => "9", 'type' => "string", 'default' => null],
        ]);
    }
}
