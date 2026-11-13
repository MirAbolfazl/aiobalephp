<?php

declare(strict_types=1);

namespace Aiobale\Types;

class FullUser extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "contact_info" => ['alias' => "2", 'type' => \Aiobale\Types\ContactInfo::class, 'default' => null],
            "about" => ['alias' => "3", 'type' => "string", 'default' => null],
            "languages" => ['alias' => "4", 'type' => "array", 'items' => "string", 'default' => null],
            "timezone" => ['alias' => "5", 'type' => "string", 'default' => null],
            "bot_commands" => ['alias' => "6", 'type' => "array", 'items' => \Aiobale\Types\ExtKeyValue::class, 'default' => null],
            "is_blocked" => ['alias' => "8", 'type' => "bool", 'default' => false],
            "ex_info" => ['alias' => "9", 'type' => \Aiobale\Types\ExInfo::class, 'required' => true],
            "is_deleted" => ['alias' => "12", 'type' => "bool", 'default' => false],
            "is_contact" => ['alias' => "13", 'type' => "bool", 'default' => false],
            "created_at" => ['alias' => "15", 'type' => "int", 'required' => true],
            "privacy_mode" => ['alias' => "16", 'type' => \Aiobale\Enums\PrivacyMode::class, 'required' => true],
            "allowed_invite" => ['alias' => "17", 'type' => "bool", 'default' => false],
        ]);
    }
}
