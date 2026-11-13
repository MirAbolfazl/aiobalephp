<?php

declare(strict_types=1);

namespace Aiobale\Methods\Files;

class GetFileUploadUrl extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "expected_size" => ['alias' => "1", 'type' => "int", 'required' => true],
            "crc" => ['alias' => "2", 'type' => "int", 'default' => 0],
            "user_id" => ['alias' => "3", 'type' => "int", 'required' => true],
            "name" => ['alias' => "4", 'type' => "string", 'required' => true],
            "mime_type" => ['alias' => "5", 'type' => "string", 'required' => true],
            "ex_peer" => ['alias' => "6", 'type' => \Aiobale\Types\Peer::class, 'default' => null],
            "send_type" => ['alias' => "7", 'type' => \Aiobale\Types\SendTypeModel::class, 'default' => null],
            "chunk_size" => ['alias' => "8", 'type' => "int", 'default' => null],
        ]);
    }

    public static function service(): string { return "ai.bale.server.Files"; }
    public static function methodName(): string { return "GetNasimFileUploadUrl"; }
    public static function returning(): ?string { return \Aiobale\Types\FileUploadInfo::class; }
}
