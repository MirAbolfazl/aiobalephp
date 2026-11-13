<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class ReactionSentResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "reactions" => ['alias' => "2", 'type' => "array", 'items' => \Aiobale\Types\Reaction::class, 'default' => []],
        ]);
    }
}
