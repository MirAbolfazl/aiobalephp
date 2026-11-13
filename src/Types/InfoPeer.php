<?php

declare(strict_types=1);

namespace Aiobale\Types;

class InfoPeer extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "type" => ['alias' => "2", 'type' => \Aiobale\Enums\ChatType::class, 'default' => null],
        ]);
    }
}
