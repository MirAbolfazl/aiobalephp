<?php

declare(strict_types=1);

namespace Aiobale\Methods\Abacus;

class GetMessageReactionsList extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "message_id" => ['alias' => "2", 'type' => "int", 'required' => true],
            "date" => ['alias' => "3", 'type' => "int", 'required' => true],
            "emojy" => ['alias' => "4", 'type' => "string", 'required' => true],
            "page" => ['alias' => "5", 'type' => "int", 'required' => true],
            "limit" => ['alias' => "6", 'type' => "int", 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.abacus.v1.Abacus"; }
    public static function methodName(): string { return "GetMessageReactionsList"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\ReactionListResponse::class; }
}
