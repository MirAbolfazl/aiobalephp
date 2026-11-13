<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ChatData extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
        ]);
    }
}
