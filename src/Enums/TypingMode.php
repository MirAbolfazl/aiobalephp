<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum TypingMode: int
{
    case UNKNOWN = 0;
    case TEXT = 1;
    case VOICERECODRING = 2;
    case SENDINGVOICE = 3;
    case SENDINGFILE = 4;
    case SENDINGPHOTO = 5;
    case SENDINGVIDEO = 6;
    case SENDINGMUSIC = 7;
    case CHOOSINGSTICKER = 8;
    case CHOSINGGIF = 9;
    case CREATINGGIFTPACKET = 10;
    case SENDINGALBUM = 11;
    case CHOSINGEMOJI = 12;
}
