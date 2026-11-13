<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum SendType: int
{
    case UNKNOWN = 0;
    case PHOTO = 1;
    case VIDEO = 2;
    case VOICE = 3;
    case GIF = 4;
    case AUDIO = 5;
    case DOCUMENT = 6;
    case STICKER = 7;
    case CROWDFUNDING = 8;
}
