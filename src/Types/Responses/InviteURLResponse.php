<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class InviteURLResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "url" => ['alias' => "1", 'type' => "string", 'required' => true],
        ]);
    }
}
