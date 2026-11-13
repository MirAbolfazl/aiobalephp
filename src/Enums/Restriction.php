<?php

declare(strict_types=1);

namespace Aiobale\Enums;

enum Restriction: int
{
    case PRIVATE = 0;
    case PUBLIC = 1;
}
