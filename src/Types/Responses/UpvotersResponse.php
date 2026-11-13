<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class UpvotersResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "count" => ['alias' => "count", 'type' => "int", 'default' => null],
            "offset" => ['alias' => "offset", 'type' => "int", 'default' => null],
            "users" => ['alias' => "users", 'type' => "array", 'items' => "int", 'default' => []],
        ]);
    }
}
