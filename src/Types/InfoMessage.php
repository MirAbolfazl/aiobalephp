<?php

declare(strict_types=1);

namespace Aiobale\Types;

class InfoMessage extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "message_id" => ['alias' => "2", 'type' => "int", 'required' => true],
            "date" => ['alias' => "3", 'type' => "mixed", 'required' => true],
            "previous_message" => ['alias' => "4", 'type' => \Aiobale\Types\OtherMessage::class, 'default' => null],
        ]);
    }
}
