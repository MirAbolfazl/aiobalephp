<?php

declare(strict_types=1);

namespace Aiobale\Methods\Report;

class SendReport extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "report_body" => ['alias' => "1", 'type' => \Aiobale\Types\Report::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.report.v1.Report"; }
    public static function methodName(): string { return "ReportInappropriateContent"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\DefaultResponse::class; }
}
