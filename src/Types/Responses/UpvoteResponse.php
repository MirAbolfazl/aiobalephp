<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class UpvoteResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "upvote" => ['alias' => "1", 'type' => \Aiobale\Types\Upvote::class, 'required' => true],
        ]);
    }
}
