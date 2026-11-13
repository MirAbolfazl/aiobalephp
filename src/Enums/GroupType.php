<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum GroupType: int
{
    case GROUP = 0;
    case CHANNEL = 1;
    case SUPERGROUP = 2;
}
