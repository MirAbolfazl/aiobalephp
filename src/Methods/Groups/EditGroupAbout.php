<?php

declare(strict_types=1);

namespace Aiobale\Methods\Groups;

class EditGroupAbout extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "group" => ['alias' => "1", 'type' => \Aiobale\Types\ShortPeer::class, 'required' => true],
            "random_id" => ['alias' => "2", 'type' => "int", 'required' => true],
            "about" => ['alias' => "3", 'type' => \Aiobale\Types\StringValue::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.groups.v1.Groups"; }
    public static function methodName(): string { return "EditGroupAbout"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
