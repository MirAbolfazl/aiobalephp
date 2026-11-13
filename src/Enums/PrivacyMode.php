<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum PrivacyMode: int
{
    case UNKNOWN = 0;
    case NONE = 1;
    case SPAM = 2;
}
