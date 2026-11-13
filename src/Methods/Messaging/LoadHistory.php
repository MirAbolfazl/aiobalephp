<?php

declare(strict_types=1);

namespace Aiobale\Methods\Messaging;

class LoadHistory extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "offset_date" => ['alias' => "2", 'type' => "int", 'required' => true],
            "load_mode" => ['alias' => "4", 'type' => \Aiobale\Enums\ListLoadMode::class, 'required' => true],
            "limit" => ['alias' => "5", 'type' => "int", 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.messaging.v2.Messaging"; }
    public static function methodName(): string { return "LoadHistory"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\HistoryResponse::class; }
}
