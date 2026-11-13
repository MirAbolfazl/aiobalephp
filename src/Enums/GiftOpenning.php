<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum GiftOpenning: int
{
    case ALREADY_RECEIVED = 0;
    case SOLD_OUT = 1;
    case GIFT_CREATOR = 2;
    case SUCCESSFUL = 3;
    case PENDING = 4;
}
