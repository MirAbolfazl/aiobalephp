<?php

declare(strict_types=1);

namespace Aiobale\Methods\Configs;

class EditParameter extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "key" => ['alias' => "1", 'type' => "string", 'required' => true],
            "value" => ['alias' => "2", 'type' => \Aiobale\Types\StringValue::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.v1.Configs"; }
    public static function methodName(): string { return "EditParameter"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
