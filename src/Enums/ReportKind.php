<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum ReportKind: int
{
    case UNKNOWN = 0;
    case SCAM = 1;
    case INAPPROPRIATE_CONTENT = 2;
    case OTHER = 3;
    case VIOLENCE = 4;
    case SPAM = 5;
    case FALSE_INFORMATION = 6;
}
