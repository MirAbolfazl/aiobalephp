<?php

declare(strict_types=1);

namespace Aiobale\Methods\Magazine;

class UpvotePost extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "message" => ['alias' => "1", 'type' => \Aiobale\Types\InfoMessage::class, 'required' => true],
            "album_id" => ['alias' => "2", 'type' => \Aiobale\Types\IntValue::class, 'default' => null],
        ]);
    }

    public static function service(): string { return "bale.magazine.v1.Magazine"; }
    public static function methodName(): string { return "UpvotePost"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\UpvoteResponse::class; }
}
