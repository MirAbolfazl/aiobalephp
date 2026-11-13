<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class MessageResponse extends \Aiobale\Types\Responses\DefaultResponse
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "message" => ['alias' => "message", 'type' => \Aiobale\Types\Message::class, 'required' => true],
        ]);
    }
}
