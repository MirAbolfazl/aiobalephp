<?php

declare(strict_types=1);

namespace Aiobale\Types;

class RequestBody extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "service" => ['alias' => "1", 'type' => "string", 'required' => true],
            "method" => ['alias' => "2", 'type' => "string", 'required' => true],
            "payload" => ['alias' => "3", 'type' => "mixed", 'default' => null],
            "metadata" => ['alias' => "4", 'type' => \Aiobale\Types\MetaList::class, 'required' => true],
            "request_id" => ['alias' => "5", 'type' => "int", 'required' => true],
        ]);
    }
}
