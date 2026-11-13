<?php

declare(strict_types=1);

namespace Aiobale\Methods\Messaging;

class LoadDialogs extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "offset_date" => ['alias' => "1", 'type' => "int", 'required' => true],
            "limit" => ['alias' => "2", 'type' => "int", 'required' => true],
            "exclude_pinned" => ['alias' => "5", 'type' => "bool", 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.messaging.v2.Messaging"; }
    public static function methodName(): string { return "LoadDialogs"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DialogResponse::class; }
}
