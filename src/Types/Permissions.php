<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Permissions extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "see_message" => ['alias' => "1", 'type' => "bool", 'default' => false],
            "delete_message" => ['alias' => "2", 'type' => "bool", 'default' => false],
            "kick_user" => ['alias' => "3", 'type' => "bool", 'default' => false],
            "pin_message" => ['alias' => "4", 'type' => "bool", 'default' => false],
            "invite_user" => ['alias' => "5", 'type' => "bool", 'default' => false],
            "add_admin" => ['alias' => "6", 'type' => "bool", 'default' => false],
            "change_info" => ['alias' => "7", 'type' => "bool", 'default' => false],
            "send_message" => ['alias' => "8", 'type' => "bool", 'default' => false],
            "see_members" => ['alias' => "9", 'type' => "bool", 'default' => false],
            "edit_message" => ['alias' => "10", 'type' => "bool", 'default' => false],
            "send_media" => ['alias' => "11", 'type' => "bool", 'default' => false],
            "send_gif_stickers" => ['alias' => "12", 'type' => "bool", 'default' => false],
            "reply_to_story" => ['alias' => "13", 'type' => "bool", 'default' => false],
            "forward_message_from" => ['alias' => "14", 'type' => "bool", 'default' => false],
            "send_gift_packet" => ['alias' => "15", 'type' => "bool", 'default' => false],
            "start_call" => ['alias' => "16", 'type' => "bool", 'default' => false],
            "send_link_message" => ['alias' => "17", 'type' => "bool", 'default' => false],
            "send_forwarded_message" => ['alias' => "18", 'type' => "bool", 'default' => false],
            "add_story" => ['alias' => "19", 'type' => "bool", 'default' => false],
            "manage_call" => ['alias' => "20", 'type' => "bool", 'default' => false],
        ]);
    }
}
