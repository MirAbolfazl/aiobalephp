<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum ChatType: int
{
    case UNKNOWN = 0;
    case PRIVATE = 1;
    case GROUP = 2;
    case CHANNEL = 3;
    case BOT = 4;
    case SUPER_GROUP = 5;
}
