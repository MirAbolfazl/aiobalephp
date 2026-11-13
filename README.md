# aiobale-php

کتابخانهٔ PHP برای کار با API پیام‌رسان بله؛ پیاده‌سازی ناهمگام با AMPHP.
این پروژه شامل مدل‌ها، enumها و کلاس‌های متد API، ارتباط WebSocket، درخواست‌های
gRPC-Web، کدگذاری/رمزگشایی protobuf، ارسال فایل و مسیریابی رویدادها است.

> این کتابخانه ابزار رسمی بله نیست. فقط با حساب خودتان و مطابق قوانین و محدودیت‌های
> API بله از آن استفاده کنید. در این مخزن ورود تعاملی/CLI وجود ندارد؛ کد زیر جریان
> ورود را در برنامهٔ PHP خودتان مدیریت می‌کند.

## فهرست

- [پیش‌نیاز و نصب](#پیشنیاز-و-نصب)
- [ورود با شماره تلفن](#ورود-با-شماره-تلفن)
- [ورود دومرحله‌ای با رمز](#ورود-دومرحلهای-با-رمز)
- [ثبت‌نام](#ثبتنام)
- [ذخیره و بازیابی سشن](#ذخیره-و-بازیابی-سشن)
- [خروج و حذف سشن](#خروج-و-حذف-سشن)
- [اتصال و ارسال پیام](#اتصال-و-ارسال-پیام)
- [نمونهٔ userbot](#نمونهٔ-userbot)
- [رویدادها](#رویدادها)
- [فایل](#فایل)
- [مدل‌ها و متدها](#مدلها-و-متدها)
- [خطاهای رایج](#خطاهای-رایج)
- [تست و بررسی](#تست-و-بررسی)

## پیش‌نیاز و نصب

- PHP نسخهٔ 8.2 یا بالاتر
- Composer

```bash
cd /path/to/aiobalephp
composer install
```

در تمام مثال‌ها، کدهای async داخل `Amp\async()` اجرا می‌شوند و مقدار نهایی هر
درخواست با `await()` دریافت می‌شود:

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use function Amp\async;

async(function (): void {
    // درخواست‌های AMPHP را اینجا اجرا کنید.
})->await();
```

## ورود با شماره تلفن

جریان ورود این مراحل را دارد:

1. `startPhoneAuth()` را با شمارهٔ بین‌المللی و app key معتبر فراخوانی کنید.
2. کد ارسالی را از کاربر بگیرید.
3. با `validateCode()` کد و `transaction_hash` را ارسال کنید.
4. در صورت موفقیت، JWT در `Client` قرار می‌گیرد و اگر `sessionFile` تنظیم شده باشد
   سشن به‌صورت خودکار ذخیره می‌شود.
5. با `connect()` اتصال WebSocket را برقرار کنید.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Aiobale\Client\Client;
use Aiobale\Enums\SendCodeType;
use Aiobale\Exception\BaleApiException;
use function Amp\async;

$client = new Client(
    sessionFile: getenv('BALE_SESSION_FILE') ?: dirname(__DIR__) . '/var/bale-session.json',
);

async(function () use ($client): void {
    $appKey = getenv('BALE_APP_KEY');
    if (!$appKey) {
        throw new RuntimeException('متغیر محیطی BALE_APP_KEY تنظیم نشده است.');
    }

    // شماره را با کد کشور و بدون فاصله وارد کنید؛ + اختیاری است.
    $challenge = $client->startPhoneAuth(
        phoneNumber: '+989123456789',
        appKey: $appKey,
        codeType: SendCodeType::DEFAULT,
        appId: 4,
        deviceTitle: 'My PHP application',
    )->await();

    printf(
        "کد از روش %s فرستاده شد. مهلت ارسال دوباره: %d ثانیه\n",
        $challenge->sent_code_type->name,
        $challenge->code_timeout->value,
    );

    // در برنامهٔ واقعی این کد را از فرم امن یا ورودی کاربر دریافت کنید.
    $code = readline('کد تأیید: ');

    try {
        $auth = $client->validateCode(
            code: trim($code),
            transactionHash: $challenge->transaction_hash,
        )->await();
    } catch (BaleApiException $exception) {
        // پیام دقیق خطا از سرویس می‌آید؛ خطای رمز دومرحله‌ای در بخش بعد آمده است.
        if (stripos($exception->getMessage(), 'password needed') !== false) {
            throw new RuntimeException(
                'این حساب رمز دومرحله‌ای می‌خواهد؛ نمونهٔ validatePassword را اجرا کنید.',
                previous: $exception,
            );
        }
        throw $exception;
    }

    echo "ورود موفق: {$auth->user->name} (شناسه {$auth->user->id})\n";
    echo 'سشن: ' . ($client->sessionFile() ?? 'ذخیره‌سازی فایل تنظیم نشده') . "\n";

    // استفاده از سشن برای WebSocket؛ توکن ذخیره‌شده به‌صورت خودکار خوانده می‌شود.
    $client->connect()->await();

    // ... اجرای برنامه و درخواست‌ها ...

    $client->stop()->await();
})->await();
```

`BALE_APP_KEY` را از تنظیمات مورد اعتماد برنامه/تأمین‌کنندهٔ خود دریافت کنید.
آن را در README، کد عمومی، Git یا log قرار ندهید. مقدار پیش‌فرضی برای app key در
کتابخانه تعریف نشده است. شمارهٔ تلفن به‌صورت عدد در API فرستاده می‌شود؛ در ورودی
تابع می‌توانید `+` داشته باشید، اما صفر ابتدای شماره را به‌عنوان کد کشور استفاده
نکنید.

### انتخاب روش ارسال کد

مقدار `codeType` از enum زیر است:

```php
use Aiobale\Enums\SendCodeType;

SendCodeType::DEFAULT;
SendCodeType::SMS;
SendCodeType::CALL;
SendCodeType::BALEONLY;
```

پذیرفته‌شدن هر روش به پاسخ بله و وضعیت حساب بستگی دارد. زمان انقضا در
`code_expiration_date->value` به میلی‌ثانیهٔ Unix و مهلت ارسال دوباره در
`code_timeout->value` به ثانیه است. اگر `next_send_code_type` مقدار داشته باشد،
برای درخواست مجدد می‌توانید همان enum را به `startPhoneAuth()` بدهید.

## ورود دومرحله‌ای با رمز

اگر اعتبارسنجی کد با خطای نیاز به رمز پاسخ دهد، همان `transaction_hash` را به
`validatePassword()` بدهید. موفقیت این مرحله نیز JWT را در کلاینت قرار می‌دهد و
سشن تنظیم‌شده را ذخیره می‌کند:

```php
use Aiobale\Exception\BaleApiException;

try {
    $auth = $client->validatePassword(
        password: $password, // از ورودی امن بگیرید؛ در کد ذخیره نکنید.
        transactionHash: $challenge->transaction_hash,
    )->await();

    echo "ورود موفق: {$auth->user->name}\n";
} catch (BaleApiException $exception) {
    if (stripos($exception->getMessage(), 'wrong password') !== false) {
        echo "رمز واردشده صحیح نیست.\n";
    } else {
        throw $exception;
    }
}
```

خطاهای سرویس از نوع `Aiobale\Exception\BaleApiException` هستند و متن و کد
`topic` سرور را نگه می‌دارند. متن پیام ممکن است با تغییر API عوض شود؛ در برنامهٔ
تولیدی خطاها را log کنید، اما رمز، کد پیامکی، JWT یا محتوای فایل سشن را log نکنید.

## ثبت‌نام

کلاس `Aiobale\Methods\Auth\SignUp` و میانبر `$client->signUp()` برای endpoint
ثبت‌نام موجود است. ورودی آن `transaction_hash` و `name` است:

```php
use Aiobale\Exception\BaleApiException;

try {
    $challenge = $client->startPhoneAuth(
        phoneNumber: '+989123456789',
        appKey: getenv('BALE_APP_KEY') ?: throw new RuntimeException('BALE_APP_KEY تنظیم نشده است.'),
    )->await();

    $code = readline('کد تأیید: ');

    try {
        $auth = $client->validateCode(trim($code), $challenge->transaction_hash)->await();
        echo "این شماره از قبل ثبت شده است؛ ورود انجام شد: {$auth->user->name}\n";
    } catch (BaleApiException $exception) {
        if (stripos($exception->getMessage(), 'PHONE_NUMBER_UNOCCUPIED') === false) {
            throw $exception;
        }

        // فقط در صورتی اجرا کنید که پاسخ سرویس، ثبت‌نام را لازم بداند.
        $signupResponse = $client->signUp(
            transactionHash: $challenge->transaction_hash,
            name: 'نام نمایشی',
        )->await();

        // endpoint ثبت‌نام در تعریف فعلی پاسخ typed/JWT اعلام نمی‌کند.
        // بنابراین خروجی خام protobuf است و به‌تنهایی به معنی ذخیره‌شدن سشن نیست.
        echo 'پاسخ خام ثبت‌نام: ' . bin2hex($signupResponse) . "\n";
        echo "پس از ثبت‌نام، ادامهٔ احراز هویت را طبق پاسخ جاری سرویس انجام دهید.\n";
    }
} catch (BaleApiException $exception) {
    fprintf(STDERR, "خطای API بله (%d): %s\n", $exception->topic, $exception->getMessage());
    throw $exception;
}
```

**نکتهٔ مهم:** endpoint ثبت‌نام در API/مدل منبع فعلی پاسخ JWT یا مدل typed مشخصی
ندارد و CLI پایتون پروژه نیز ثبت‌نام را خودکار تکمیل نمی‌کند. به همین دلیل
کتابخانه وانمود نمی‌کند که `signUp()` حتماً کاربر را وارد کرده است. قبل از ادامه،
پاسخ endpoint و جریان ثبت‌نام رسمی/مجاز بله را بررسی کنید؛ برای WebSocket باید
JWT واقعی داشته باشید. اگر درخواست `validateCode()` خطای دیگری (مثل رمز
دومرحله‌ای یا کد اشتباه) داد، همان مرحلهٔ مناسب را اجرا کنید، نه ثبت‌نام.

## ذخیره و بازیابی سشن

با تنظیم `sessionFile`، بعد از ورود موفق فایل JSON سشن به‌طور خودکار نوشته
می‌شود. در اجرای بعدی همان مسیر را به کلاینت بدهید؛ توکن و شناسهٔ کاربر بارگذاری
می‌شوند و `connect()` بدون آرگومان از توکن ذخیره‌شده استفاده می‌کند:

```php
use Aiobale\Client\Client;
use function Amp\async;

$client = new Client(
    sessionFile: '/مسیر/خصوصی/خارج-از-webroot/bale-session.json',
);

async(function () use ($client): void {
    if ($client->token() === null) {
        throw new RuntimeException('سشنی پیدا نشد؛ ابتدا ورود با شماره تلفن را انجام دهید.');
    }

    $client->connect()->await();
    printf("حساب فعال: %s\n", $client->userId() ?? 'شناسه در JWT موجود نیست');

    // درخواست‌های برنامه ...
    $client->stop()->await();
})->await();
```

مدیریت دستی سشن:

```php
// token() مقدار JWT را برمی‌گرداند؛ آن را در خروجی یا log چاپ نکنید.
$token = $client->token();

// بعد از ورود، اگر sessionFile در سازنده مشخص شده، این فراخوانی اختیاری است.
$client->saveSession();

// فقط فایل و وضعیت محلی را پاک می‌کند؛ logout سمت سرور انجام نمی‌دهد.
$client->deleteSession();
```

`Client` بدون `sessionFile` هم کار می‌کند، ولی در آن حالت ذخیرهٔ خودکار انجام
نمی‌شود و باید توکن را پس از احراز هویت در حافظهٔ امن برنامه نگه دارید. اگر JWT
قابل‌خواندن/بدون `user_id` باشد، برای ساخت پاسخ بعضی متدها شناسه را صریحاً تعیین
کنید:

```php
$client->setUserId(12345);
$userId = $client->userId();
```

### نکات امنیتی سشن

- فایل سشن حاوی JWT است؛ آن را مثل رمز عبور حساب محافظت کنید.
- فایل و پوشه با مجوزهای محدود (معمولاً `0600` و `0700`) ساخته می‌شوند. مسیر را
  در web root، پوشهٔ عمومی، مخزن Git یا پوشهٔ قابل دانلود قرار ندهید.
- در سرور چندکاربره، از مسیر اختصاصی هر کاربر و دسترسی فایل محدود به همان کاربر
  سیستم استفاده کنید؛ در صورت نیاز فایل سشن را با راهکار مدیریت کلید محیط خود
  رمزگذاری کنید.
- فایل سشن را به هیچ سرویس/بات/شخص دیگری ارسال نکنید. از کد نمونهٔ login که فایل
  سشن را جست‌وجو، جمع‌آوری یا بارگذاری می‌کند استفاده نکنید.
- نمونهٔ بالا تعویض/refresh خودکار JWT را پیاده‌سازی نمی‌کند؛ در صورت ردشدن توکن،
  دوباره احراز هویت کنید.

## خروج و حذف سشن

`signOut()` ابتدا درخواست خروج را با JWT به API می‌فرستد، بعد WebSocket را
می‌بندد و به‌طور پیش‌فرض فایل محلی را حذف می‌کند:

```php
// خروج از حساب و حذف فایل سشن:
$client->signOut()->await();

// خروج سمت سرور اما نگه‌داشتن فایل محلی (مثلاً برای بررسی دستی):
$client->signOut(deleteSession: false)->await();
```

برای قطع اتصال موقت بدون خروج از حساب و بدون حذف توکن:

```php
$client->stop()->await();
```

## اتصال و ارسال پیام

پس از داشتن JWT، `connect()` کانال WebSocket را باز می‌کند. درخواست‌های API
متدهایی از `BaleMethod` هستند و Future برمی‌گردانند:

```php
<?php

use Aiobale\Client\Client;
use Aiobale\Methods\Messaging\SendMessage;
use Aiobale\Types\Chat;
use Aiobale\Types\MessageContent;
use Aiobale\Types\Peer;
use Aiobale\Types\TextMessage;
use function Amp\async;

$client = new Client(sessionFile: '/مسیر/خصوصی/bale-session.json');

async(function () use ($client): void {
    $client->connect()->await();

    $response = $client->invoke(new SendMessage([
        'peer' => new Peer(['type' => 1, 'id' => 12345]),
        'message_id' => 1,
        'content' => new MessageContent([
            'text' => new TextMessage(['value' => 'سلام از PHP']),
        ]),
        'chat' => new Chat(['type' => 1, 'id' => 12345]),
    ]))->await();

    echo "پیام ارسال شد؛ شناسه: {$response->message->message_id}\n";
    $client->stop()->await();
})->await();
```

برای درخواست HTTP/gRPC-Web بدون WebSocket، از `post()` استفاده کنید:

```php
$response = $client->post($method)->await();
```

همچنین می‌توان متد را با نام کلاس از کلاینت فراخواند؛ نام فیلدهای ورودی همان
نام‌های مدل PHP است:

```php
$future = $client->sendMessage([
    'peer' => new Peer(['type' => 1, 'id' => 12345]),
    'message_id' => 1,
    'content' => new MessageContent(['text' => new TextMessage(['value' => 'سلام'])]),
    'chat' => new Chat(['type' => 1, 'id' => 12345]),
]);
$response = $future->await();
```

## رویدادها

برای دریافت updateهای WebSocket، handler ثبت کنید. آرگومان اول مدل update و
آرگومان دوم خود کلاینت است. callback می‌تواند مقدار معمولی یا `Future` برگرداند:

```php
$client->on(
    'message',
    function ($message, Client $client): void {
        printf("پیام جدید از %d: %s\n", $message->sender_id, $message->content->text?->value ?? '');
    },
    static fn ($message): bool => $message->content->text !== null,
);
```

نام رویدادها شامل `message`, `message_deleted`, `chat_cleared`, `chat_deleted`,
`username_changed`, `message_sent`, `message_edited`, `about_changed`,
`user_blocked`, `user_unblocked`, `group_message_pinned` و `group_pin_removed`
است. handlerها به‌ترتیب ثبت اجرا می‌شوند و اولین handler پذیرفته‌شده نتیجهٔ
dispatch را تعیین می‌کند.

## نمونهٔ userbot

فایل [`example/userbot.php`](./example/userbot.php) یک نمونهٔ کوچک است که فقط در
چت خصوصی به فرمان دقیق `!ping` پاسخ `pong` می‌دهد؛ پیام‌های خود حساب و پیام‌های
گروه را نادیده می‌گیرد.

ابتدا با مثال ورود بالا سشن بسازید، سپس اجرا کنید:

```bash
php example/userbot.php
```

به‌صورت پیش‌فرض سشن از `var/bale-session.json` خوانده می‌شود و این پوشه در Git
نادیده گرفته شده است. می‌توانید مسیر سشن یا JWT را با متغیر محیطی بدهید:

```bash
BALE_SESSION_FILE=/مسیر/خصوصی/session.json php example/userbot.php
# یا برای اجرای بدون فایل سشن:
BALE_ACCESS_TOKEN='JWT-خودتان' php example/userbot.php
```

JWT را در shell history، مخزن Git، log یا تصویر خروجی قرار ندهید. نمونه برای
توقف با `Ctrl+C` طراحی شده است. پیش از استفاده روی حساب واقعی، فقط با حساب و
گفت‌وگوهایی که اجازهٔ تعامل با آن‌ها را دارید آزمایش کنید.

## فایل

فایل را از مسیر یا حافظه بسازید و به `upload()` بدهید:

```php
use Aiobale\Client\FileInput;

$file = FileInput::fromPath('/مسیر/خصوصی/document.pdf');
// یا:
$file = FileInput::fromBytes($bytes, 'document.pdf', 'application/pdf');

// $uploadUrl باید از endpoint دریافت URL آپلود بله آمده باشد.
$client->upload(
    $file,
    $uploadUrl,
    static function (int $sent, ?int $total): void {
        printf("آپلود: %d / %s بایت\n", $sent, $total ?? '?');
    },
)->await();

$downloadedBytes = $client->download($downloadUrl)->await();
```

برای ارسال فایل به‌عنوان پیام، ابتدا URL آپلود را از متدهای بخش `Files` بگیرید،
سپس فایل را آپلود و اطلاعات فایل را در متد مناسب پیام استفاده کنید. این سه مرحله
را با URL واقعی و توکن همان حساب انجام دهید.

## مدل‌ها و متدها

- کلاس‌های درخواست زیر `Aiobale\Methods\...` هستند؛ برای نمونه
  `Aiobale\Methods\Messaging\SendMessage`.
- مدل‌های داده زیر `Aiobale\Types\...` و enumها زیر `Aiobale\Enums\...` قرار دارند.
- مدل‌ها را با نام فیلد PHP یا شمارهٔ alias protobuf بسازید:

```php
$peer = new Peer(['type' => 1, 'id' => 12345]);
// معادل:
$peer = new Peer(['1' => 1, '2' => 12345]);
```

- فهرست کلاس‌های API با `Aiobale\Methods\MethodRegistry::all()` در دسترس است.
  `resolve('send_message')` هم نام متد را به کلاس مربوطه تبدیل می‌کند.
- گروه‌های API ترجمه‌شده شامل Auth، Messaging، User، Groups، Files، Presence،
  Report، Configs، Abacus، Giftpacket، Kifpool و Magazine هستند.
- تمام فراخوانی‌های شبکه `Amp\Future` برمی‌گردانند؛ آن‌ها را در Fiber/`Amp\async`
  با `await()` مصرف کنید.

## خطاهای رایج

```php
use Aiobale\Exception\AiobaleException;
use Aiobale\Exception\BaleApiException;

try {
    $result = $client->invoke($method)->await();
} catch (BaleApiException $exception) {
    // خطای پاسخ API بله؛ topic کد عددی خطاست.
    error_log(sprintf('Bale API error %d: %s', $exception->topic, $exception->getMessage()));
} catch (AiobaleException $exception) {
    // خطای کلاینت، شبکه، protobuf یا timeout.
    error_log('Bale client error: ' . $exception->getMessage());
}
```

- `No access token is available`: ابتدا login کنید یا توکن را به `connect()` بدهید.
- `Client is already connected`: قبل از اتصال مجدد `stop()` را اجرا کنید.
- `BaleApiException`: متن خطا از سرور است؛ برای درخواست OTP از تعداد تلاش و
  محدودیت ارسال مجدد بله پیروی کنید.
- `session file contains invalid JSON`: فایل سشن خراب/نامعتبر است؛ پس از اطمینان
  از مسیر، حذفش کنید و دوباره وارد شوید.

## تست و بررسی

```bash
composer test
composer lint
composer validate --no-check-publish
```
