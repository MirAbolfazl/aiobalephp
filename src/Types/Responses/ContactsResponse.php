<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class ContactsResponse extends \Aiobale\Types\Responses\DefaultResponse
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peers" => ['alias' => "4", 'type' => "array", 'items' => \Aiobale\Types\ContactPeer::class, 'default' => []],
        ]);
    }
}
