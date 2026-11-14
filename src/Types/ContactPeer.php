<?php

declare(strict_types=1);

namespace Aiobale\Types;

class ContactPeer extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "id" => ['alias' => "1", 'type' => "int", 'required' => true],
            "access_hash" => ['alias' => "2", 'type' => "int", 'default' => null],
        ]);
    }
}
