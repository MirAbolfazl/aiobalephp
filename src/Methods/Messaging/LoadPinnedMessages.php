<?php

declare(strict_types=1);

namespace Aiobale\Methods\Messaging;

class LoadPinnedMessages extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.messaging.v2.Messaging"; }
    public static function methodName(): string { return "LoadPinnedMessages"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\HistoryResponse::class; }
}
