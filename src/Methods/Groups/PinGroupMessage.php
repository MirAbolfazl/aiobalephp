<?php

declare(strict_types=1);

namespace Aiobale\Methods\Groups;

class PinGroupMessage extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "group" => ['alias' => "2", 'type' => \Aiobale\Types\ShortPeer::class, 'required' => true],
            "date" => ['alias' => "3", 'type' => "int", 'required' => true],
            "message_id" => ['alias' => "4", 'type' => "int", 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.groups.v1.Groups"; }
    public static function methodName(): string { return "PinMessage"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
