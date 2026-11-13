<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum AuthErrors: int
{
    case UNKNOWN = 0;
    case NUMBER_BANNED = 1;
    case AUTH_LIMIT = 2;
    case WRONG_CODE = 3;
    case PASSWORD_NEEDED = 4;
    case SIGN_UP_NEEDED = 5;
    case WRONG_PASSWORD = 6;
    case RATE_LIMIT = 7;
    case INVALID = 8;
}
