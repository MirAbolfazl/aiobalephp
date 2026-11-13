<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class ParametersResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "params" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\ExtKeyValue::class, 'default' => []],
        ]);
    }
}
