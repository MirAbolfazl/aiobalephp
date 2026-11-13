<?php

declare(strict_types=1);

namespace Aiobale\Types;

class TemplateMessage extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "message" => ['alias' => "1", 'type' => \Aiobale\Types\MessageContent::class, 'required' => true],
            "temp_id" => ['alias' => "2", 'type' => "int", 'defaultFactory' => static fn (): int => random_int(1_000_000_000_000_000, 9_999_999_999_999_999)],
            "inline_keyboard_markup" => ['alias' => "5", 'type' => \Aiobale\Types\InlineKeyboardMarkup::class, 'default' => null],
        ]);
    }
}
