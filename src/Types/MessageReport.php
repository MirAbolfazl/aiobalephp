<?php

declare(strict_types=1);

namespace Aiobale\Types;

class MessageReport extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "messages" => ['alias' => "2", 'type' => "array", 'items' => \Aiobale\Types\OtherMessage::class, 'required' => true],
        ]);
    }
}
