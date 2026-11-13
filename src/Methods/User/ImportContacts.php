<?php

declare(strict_types=1);

namespace Aiobale\Methods\User;

class ImportContacts extends \Aiobale\Model\BaleMethod
{
    public static function schema(): array
    {
        return array_replace(parent::schema(), [
            "phones" => ['alias' => "1", 'type' => "array", 'items' => \Aiobale\Types\ContactData::class, 'required' => true],
        ]);
    }

    public static function service(): string { return "bale.users.v1.Users"; }
    public static function methodName(): string { return "ImportContacts"; }
    public static function returning(): ?string { return \Aiobale\Types\Responses\ContactsResponse::class; }
}
