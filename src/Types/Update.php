<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Update extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "message_sent" => ['alias' => "4", 'type' => \Aiobale\Types\InfoMessage::class, 'default' => null],
            "message_deleted" => ['alias' => "46", 'type' => \Aiobale\Types\SelectedMessages::class, 'default' => null],
            "chat_cleared" => ['alias' => "47", 'type' => \Aiobale\Types\ChatData::class, 'default' => null],
            "chat_deleted" => ['alias' => "48", 'type' => \Aiobale\Types\ChatData::class, 'default' => null],
            "message" => ['alias' => "55", 'type' => \Aiobale\Types\Message::class, 'default' => null],
            "message_edited" => ['alias' => "162", 'type' => \Aiobale\Types\UpdatedMessage::class, 'default' => null],
            "username_changed" => ['alias' => "209", 'type' => \Aiobale\Types\UsernameChanged::class, 'default' => null],
            "about_changed" => ['alias' => "210", 'type' => \Aiobale\Types\AboutChanged::class, 'default' => null],
            "group_message_pinned" => ['alias' => "721", 'type' => \Aiobale\Types\GroupMessagePinned::class, 'default' => null],
            "group_pin_removed" => ['alias' => "722", 'type' => \Aiobale\Types\GroupPinRemoved::class, 'default' => null],
            "user_blocked" => ['alias' => "2629", 'type' => \Aiobale\Types\UserBlocked::class, 'default' => null],
            "user_unblocked" => ['alias' => "2630", 'type' => \Aiobale\Types\UserUnblocked::class, 'default' => null],
        ]);
    }
}
