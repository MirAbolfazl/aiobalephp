<?php

declare(strict_types=1);

namespace Aiobale\Methods\Kifpool;

class GetMyKifpools extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [

        ]);
    }

    public static function service(): string { return "bale.kifpool.v1.Kifpool"; }
    public static function methodName(): string { return "GetMyKifpools"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\WalletResponse::class; }
}
