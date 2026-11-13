<?php

declare(strict_types=1);

namespace Aiobale\Methods\Configs;

class GetParameters extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [

        ]);
    }

    public static function service(): string { return "bale.v1.Configs"; }
    public static function methodName(): string { return "GetParameters"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\ParametersResponse::class; }
}
