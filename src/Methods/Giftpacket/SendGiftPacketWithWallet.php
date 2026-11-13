<?php

declare(strict_types=1);

namespace Aiobale\Methods\Giftpacket;

class SendGiftPacketWithWallet extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "random_id" => ['alias' => "2", 'type' => "int", 'required' => true],
            "gift" => ['alias' => "3", 'type' => \Aiobale\Types\GiftPacket::class, 'required' => true],
            "token" => ['alias' => "4", 'type' => "string", 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.giftpacket.v1.GiftPacket"; }
    public static function methodName(): string { return "SendGiftPacketWithWallet"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
