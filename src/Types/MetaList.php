<?php

declare(strict_types=1);

namespace Aiobale\Types;

class MetaList extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "meta_list" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\ExtData::class, 'required' => true],
        ]);
    }
}
