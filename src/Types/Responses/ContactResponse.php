<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class ContactResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "user" => ['alias' => "2", 'type' => \Aiobale\Types\InfoPeer::class, 'default' => null],
            "group" => ['alias' => "5", 'type' => \Aiobale\Types\InfoPeer::class, 'default' => null],
        ]);
    }
}
