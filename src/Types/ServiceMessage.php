<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ServiceMessage extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "text" => ['alias' => "1", 'type' => "string", 'required' => true],
            "ext" => ['alias' => "2", 'type' => \Aiobale\Types\ServiceExt::class, 'required' => true],
        ]);
    }
}
