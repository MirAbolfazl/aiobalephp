<?php

declare(strict_types=1);

namespace Aiobale\Methods\Magazine;

class GetMessageUpvoters extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "load_more_state" => ['alias' => "1", 'type' => \Aiobale\Types\StringValue::class, 'default' => null],
            "message" => ['alias' => "2", 'type' => \Aiobale\Types\InfoMessage::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.magazine.v1.Magazine"; }
    public static function methodName(): string { return "GetMessageUpvoters"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\UpvotersResponse::class; }
}
