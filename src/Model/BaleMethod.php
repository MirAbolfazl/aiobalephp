<?php

declare(strict_types=1);

namespace Aiobale\Model;

abstract class BaleMethod extends BaleObject
{
    public static function service(): string
    {
        return '';
    }

    public static function methodName(): string
    {
        return '';
    }

    /** @return class-string<BaleObject>|null */
    public static function returning(): ?string
    {
        return null;
    }
}
