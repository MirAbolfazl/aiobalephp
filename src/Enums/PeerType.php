<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum PeerType: int
{
    case UNKNOWN = 0;
    case PRIVATE = 1;
    case GROUP = 2;
}
