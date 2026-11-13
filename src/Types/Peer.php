<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Peer extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "type" => ['alias' => "1", 'type' => \Aiobale\Enums\PeerType::class, 'required' => true],
            "id" => ['alias' => "2", 'type' => "int", 'required' => true],
            "access_hash" => ['alias' => "3", 'type' => "int", 'default' => null],
        ]);
    }
}
