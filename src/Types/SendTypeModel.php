<?php

declare(strict_types=1);

namespace Aiobale\Types;

class SendTypeModel extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "type" => ['alias' => "1", 'type' => \Aiobale\Enums\SendType::class, 'required' => true],
        ]);
    }
}
