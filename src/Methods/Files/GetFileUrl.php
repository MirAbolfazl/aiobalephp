<?php

declare(strict_types=1);

namespace Aiobale\Methods\Files;

class GetFileUrl extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "file" => ['alias' => "1", 'type' => \Aiobale\Types\FileInfo::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "ai.bale.server.Files"; }
    public static function methodName(): string { return "GetNasimFileUrl"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\FileURLResponse::class; }
}
