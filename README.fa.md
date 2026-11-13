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

## مرجع کامل متدهای RPC

رجیستری **۶۹۰ کلید برای ۶۸۹ زوج یکتای سرویس/متد بله** دارد. [مرجع کامل RPCها](docs/swagger/rpc-reference.md)
همهٔ کلیدها، سرویس و نام RPC، فیلدهای سطح اول درخواست، شمارهٔ فیلد protobuf، اجباری‌بودن و مدل پاسخ را
فهرست می‌کند. برای فیلدهای تو‌در‌تو به کلاس مدل یا enum درج‌شده مراجعه کنید؛ endpoint
`GET /api/v1/bale/methods` در پروژهٔ API نیز schemaهای بازشدهٔ تو‌در‌تو را برمی‌گرداند.

فراخوانی یک RPC با نام رجیستری:

```php
use Aiobale\Client\Client;
use Aiobale\Methods\MethodRegistry;
use function Amp\async;

$client = new Client(sessionFile: __DIR__ . '/var/bale-session.json');

async(function () use ($client): void {
    $methodClass = MethodRegistry::resolve('GetMyWallets');
    if ($methodClass === null) {
        throw new InvalidArgumentException('متد RPC بله پیدا نشد.');
    }

    // GetMyWallets فیلد ورودی ندارد؛ بقیهٔ متدها آرایهٔ فیلدهای درخواست را می‌گیرند.
    $result = $client->invoke(new $methodClass())->await();
    var_dump($result);
})->await();
```

نمونهٔ [rpc.php](example/rpc.php) هر کلید رجیستری و payload از نوع JSON را می‌پذیرد:

```bash
php example/rpc.php GetMyWallets '{}'
php example/rpc.php SendMessage '{"peer":{"type":1,"id":123456},"message_id":123456789,"content":{"text":{"value":"سلام"}},"chat":{"type":1,"id":123456}}'
```

این نمونه از سشن ساخته‌شده با `example/userbot.php` یا متغیرهای محیطی
`BALE_ACCESS_TOKEN` و `BALE_SESSION_FILE` استفاده می‌کند. برای متدهای هم‌نام از کلید کامل سرویس،
مانند `bale.groups.v1.Groups.PinMessage`، استفاده کنید.

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

کاتالوگ کامل RPCها نیز در Swagger UI پیوند دارد و با `composer docs:swagger` دوباره تولید می‌شود.

## تست

```bash
composer test
composer lint
```

## لینک‌ها

- [README.md](README.md) (English)
- [README.fa.md](README.fa.md) (فارسی)
