<?php

declare(strict_types=1);

namespace Aiobale\Types;

class Report extends \Aiobale\Model\BaleObject
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "kind" => ['alias' => "1", 'type' => \Aiobale\Enums\ReportKind::class, 'required' => true],
            "description" => ['alias' => "2", 'type' => "string", 'default' => null],
            "peer_report" => ['alias' => "101", 'type' => \Aiobale\Types\PeerReport::class, 'default' => null],
            "message_report" => ['alias' => "102", 'type' => \Aiobale\Types\MessageReport::class, 'default' => null],
        ]);
    }
}
