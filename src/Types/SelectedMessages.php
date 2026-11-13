<?php

declare(strict_types=1);

namespace Aiobale\Types;

class SelectedMessages extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "peer" => ['alias' => "1", 'type' => \Aiobale\Types\Peer::class, 'required' => true],
            "ids" => ['alias' => "2", 'type' => "array", 'items' => "int", 'required' => true],
            "dates" => ['alias' => "3", 'type' => "array", 'items' => "int", 'required' => true],
        ]);
    }
}
