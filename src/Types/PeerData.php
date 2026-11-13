<?php

declare(strict_types=1);

namespace Aiobale\Types;

class PeerData extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "unread_count" => ['alias' => "2", 'type' => "int", 'default' => 2],
            "sort_date" => ['alias' => "3", 'type' => "int", 'required' => true],
            "sender_id" => ['alias' => "4", 'type' => "int", 'required' => true],
            "message_id" => ['alias' => "5", 'type' => "int", 'required' => true],
            "date" => ['alias' => "6", 'type' => "int", 'required' => true],
            "content" => ['alias' => "7", 'type' => \Aiobale\Types\MessageContent::class, 'required' => true],
            "first_unread_message" => ['alias' => "9", 'type' => "int", 'required' => true],
            "unread_mentions" => ['alias' => "13", 'type' => "int", 'required' => true],
        ]);
    }
}
