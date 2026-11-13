<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum SendCodeType: int
{
    case UNKNOWN = 0;
    case DEFAULT = 1;
    case BALEONLY = 2;
    case SMS = 3;
    case CALL = 4;
    case EMAIL = 5;
    case MISSCALL = 6;
    case SETUP_EMAIL_REQUIRED = 7;
    case WHATSAPP = 8;
    case TELEGRAM = 9;
    case USSD = 10;
    case FUTURE_AUTH_TOKEN = 11;
    case TELEGRAM_GATEWAY = 12;
}
