<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class NickNameAvailable extends \Aiobale\Types\Responses\DefaultResponse
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "available" => ['alias' => "1", 'type' => "bool", 'default' => false],
        ]);
    }
}
