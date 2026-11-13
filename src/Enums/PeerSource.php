<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum PeerSource: int
{
    case UNKNOWN = 0;
    case DIALOGS = 1;
    case VITRINE = 2;
    case MARKET = 3;
    case PRIVACY_BAR = 4;
}
