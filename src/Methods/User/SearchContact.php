<?php

declare(strict_types=1);

namespace Aiobale\Methods\User;

class SearchContact extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "request" => ['alias' => "1", 'type' => "string", 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.users.v1.Users"; }
    public static function methodName(): string { return "SearchContacts"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\ContactResponse::class; }
}
