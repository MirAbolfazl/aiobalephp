<?php

declare(strict_types=1);

namespace Aiobale\Types;

class UpdateField extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "body" => ['alias' => "1", 'type' => \Aiobale\Types\UpdateBody::class, 'required' => true],
        ]);
    }
}
