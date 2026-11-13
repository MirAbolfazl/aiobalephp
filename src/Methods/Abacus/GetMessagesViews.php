<?php

declare(strict_types=1);

namespace Aiobale\Methods\Abacus;

class GetMessagesViews extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "message_ids" => ['alias' => "2", 'type' => "array", 'items' => \Aiobale\Types\OtherMessage::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.abacus.v1.Abacus"; }
    public static function methodName(): string { return "GetMessagesViews"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\ViewsResponse::class; }
}
