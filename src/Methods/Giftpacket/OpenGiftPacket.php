<?php

declare(strict_types=1);

namespace Aiobale\Methods\Giftpacket;

class OpenGiftPacket extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "message" => ['alias' => "1", 'type' => \Aiobale\Types\InfoMessage::class, 'required' => true],
            "receiver_token" => ['alias' => "2", 'type' => "string", 'required' => true],
            "page_no" => ['alias' => "3", 'type' => "mixed", 'default' => []],
            "order_type" => ['alias' => "4", 'type' => "int", 'default' => 3],
        ]);
    }

    public static function service(): string { return "bale.giftpacket.v1.GiftPacket"; }
    public static function methodName(): string { return "OpenGiftPacket"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\PacketResponse::class; }
}
