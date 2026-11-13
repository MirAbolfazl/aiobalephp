<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum ListLoadMode: int
{
    case UNKNOWN = 0;
    case FORWARD = 1;
    case BACKWARD = 2;
    case BOTH = 3;
}
