<?php

declare(strict_types=1);

namespace Aiobale\Types;

class PeerReport extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "source" => ['alias' => "1", 'type' => \Aiobale\Enums\PeerSource::class, 'required' => true],
            "peer" => ['alias' => "2", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
        ]);
    }
}
