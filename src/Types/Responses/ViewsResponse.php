<?php

declare(strict_types=1);

namespace Aiobale\Types\Responses;

class ViewsResponse extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "messages" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\MessageViews::class, 'default' => []],
        ]);
    }
}
