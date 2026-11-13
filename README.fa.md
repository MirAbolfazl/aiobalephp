# aiobale-php

کتابخانهٔ PHP ناهم‌گام برای API پیام‌رسان بله با استفاده از AMPHP.

این پروژه شامل مدل‌ها، enumها، کلاس‌های متد API، اتصال WebSocket، درخواست‌های gRPC-Web، کدگذاری و رمزگشایی Protobuf، ارسال فایل و مسیریابی رویدادها است.

> این کتابخانه ابزار رسمی بله نیست و فقط با حساب خودتان و مطابق قوانین و محدودیت‌های API بله از آن استفاده کنید.

## پیش‌نیازها

- PHP 8.2+
- Composer

```bash
cd /path/to/aiobalephp
composer install
```

## نصب و اجرای نمونه

```bash
composer install
php example/userbot.php
```

## شروع سریع

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Aiobale\Client\Client;
use function Amp\async;

$client = new Client(sessionFile: __DIR__ . '/var/bale-session.json');

async(function () use ($client): void {
    $challenge = $client->startPhoneAuth(
        phoneNumber: '+989123456789',
        appId: 4,
    )->await();

    $code = readline('کد تأیید: ');
    $auth = $client->validateCode(trim($code), $challenge->transaction_hash)->await();

    echo 'وارد شدید: ' . $auth->user->name . PHP_EOL;
    $client->connect()->await();
})->await();
```

## احراز هویت

- `startPhoneAuth()` برای شروع فرایند ورود با شماره تلفن
- `validateCode()` برای ارسال کد تأیید
- `validatePassword()` برای ورود دو مرحله‌ای با رمز
- `signUp()` برای ثبت‌نام

## WebSocket و درخواست‌ها

```php
$client->connect()->await();
$client->invoke($method)->await();
```

## مستندات Swagger

برای تولید و باز کردن مستندات OpenAPI/Swagger به‌صورت خودکار:

```bash
composer docs:swagger
composer docs:swagger:serve
```

سپس این آدرس را باز کنید:

```text
http://127.0.0.1:8080/
```

## تست

```bash
composer test
composer lint
```

## لینک‌ها

- [README.md](README.md) (English)
- [README.fa.md](README.fa.md) (فارسی)
