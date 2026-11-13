<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum Services: string
{
    case MESSAGING = "bale.messaging.v2.Messaging";
    case AUTH = "bale.auth.v1.Auth";
    case USER = "bale.users.v1.Users";
    case PRESENCE = "bale.presence.v1.Presence";
    case REPORT = "bale.report.v1.Report";
    case CONFIGS = "bale.v1.Configs";
    case ABACUS = "bale.abacus.v1.Abacus";
    case GROUPS = "bale.groups.v1.Groups";
    case FILES = "ai.bale.server.Files";
    case GIFT_PACKET = "bale.giftpacket.v1.GiftPacket";
    case KIFPOOL = "bale.kifpool.v1.Kifpool";
    case MAGAZINE = "bale.magazine.v1.Magazine";
}
