<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class DefaultResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "seq" => ['alias' => "1", 'type' => "int", 'default' => null],
            "date" => ['alias' => "2", 'type' => "int", 'default' => null],
        ]);
    }
}
