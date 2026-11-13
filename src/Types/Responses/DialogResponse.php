<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class DialogResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "dialogs" => ['alias' => "3", 'type' => "array", 'items' => \Aiobale\Types\PeerData::class, 'default' => []],
        ]);
    }
}
