<?php

declare(strict_types=1);

$root = __DIR__;

$base = [
    'openapi' => '3.0.3',
    'info' => [
        'title' => 'Aiobale PHP SDK',
        'version' => '1.0.0',
        'description' => "Async PHP client for the Bale messaging API. This OpenAPI document is generated automatically and includes the public authentication, messaging, file, and group flows used by the SDK.",
        'license' => ['name' => 'MIT', 'url' => 'https://opensource.org/licenses/MIT'],
    ],
    'servers' => [
        ['url' => 'https://next-ws.bale.ai', 'description' => 'Bale API gateway'],
    ],
    'tags' => [
        ['name' => 'Auth', 'description' => 'Phone authentication, validation, and session management.'],
        ['name' => 'Messaging', 'description' => 'Sending, reading, updating, and deleting messages.'],
        ['name' => 'Users', 'description' => 'Contacts and user profile operations.'],
        ['name' => 'Files', 'description' => 'File upload URL and transfer handling.'],
        ['name' => 'Groups', 'description' => 'Group and channel management.'],
    ],
    'paths' => [
        '/auth/start_phone_auth' => [
            'post' => [
                'tags' => ['Auth'],
                'summary' => 'Start phone authentication',
                'description' => 'Starts the phone verification flow and returns a transaction hash for code verification.',
                'requestBody' => [
                    'required' => true,
                    'content' => [
                        'application/json' => ['schema' => ['$ref' => '#/components/schemas/StartPhoneAuthRequest']],
                    ],
                ],
                'responses' => [
                    '200' => ['description' => 'Challenge generated successfully', 'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/PhoneAuthChallenge']]]],
                    '400' => ['$ref' => '#/components/responses/BadRequest'],
                ],
            ],
        ],
        '/auth/validate_code' => [
            'post' => [
                'tags' => ['Auth'],
                'summary' => 'Validate confirmation code',
                'description' => 'Validates the SMS or call code and completes the first stage of the authentication flow.',
                'requestBody' => [
                    'required' => true,
                    'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/ValidateCodeRequest']]],
                ],
                'responses' => [
                    '200' => ['description' => 'Authentication succeeded or a password challenge is required', 'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/AuthResult']]]],
                    '401' => ['$ref' => '#/components/responses/Unauthorized'],
                ],
            ],
        ],
        '/auth/validate_password' => [
            'post' => [
                'tags' => ['Auth'],
                'summary' => 'Validate second-factor password',
                'description' => 'Validates the account password when Bale requires a second factor.',
                'requestBody' => [
                    'required' => true,
                    'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/ValidatePasswordRequest']]],
                ],
                'responses' => [
                    '200' => ['description' => 'Authenticated session created', 'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/AuthResult']]]],
                    '401' => ['$ref' => '#/components/responses/Unauthorized'],
                ],
            ],
        ],
        '/messaging/send_message' => [
            'post' => [
                'tags' => ['Messaging'],
                'summary' => 'Send a message',
                'description' => 'Sends a text or media message to a target Bale peer.',
                'requestBody' => [
                    'required' => true,
                    'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/SendMessageRequest']]],
                ],
                'responses' => [
                    '200' => ['description' => 'Message sent', 'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/MessageResponse']]]],
                ],
            ],
        ],
        '/messaging/load_history' => [
            'post' => [
                'tags' => ['Messaging'],
                'summary' => 'Load chat history',
                'description' => 'Loads recent messages from a selected peer or chat.',
                'requestBody' => [
                    'required' => true,
                    'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/LoadHistoryRequest']]],
                ],
                'responses' => [
                    '200' => ['description' => 'Message history returned', 'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/HistoryResponse']]]],
                ],
            ],
        ],
        '/files/get_file_upload_url' => [
            'post' => [
                'tags' => ['Files'],
                'summary' => 'Get file upload URL',
                'description' => 'Requests upload metadata and a file target URL for large media payloads.',
                'requestBody' => [
                    'required' => true,
                    'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/FileUploadRequest']]],
                ],
                'responses' => [
                    '200' => ['description' => 'Upload metadata returned', 'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/FileUploadInfo']]]],
                ],
            ],
        ],
    ],
    'components' => [
        'responses' => [
            'BadRequest' => ['description' => 'Invalid request payload', 'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/ErrorResponse']]]],
            'Unauthorized' => ['description' => 'Authentication is required or the token is invalid', 'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/ErrorResponse']]]],
        ],
        'schemas' => [
            'ErrorResponse' => ['type' => 'object', 'properties' => ['error' => ['type' => 'string'], 'topic' => ['type' => 'integer', 'nullable' => true]]],
            'StartPhoneAuthRequest' => ['type' => 'object', 'required' => ['phone_number', 'app_id', 'app_key'], 'properties' => ['phone_number' => ['type' => 'string', 'example' => '+989123456789'], 'app_id' => ['type' => 'integer', 'example' => 4], 'app_key' => ['type' => 'string', 'example' => 'C28D46DC4C3A7A26564BFCC48B929086A95C93C98E789A19847BEE8627DE4E7D'], 'device_hash' => ['type' => 'string', 'nullable' => true], 'device_title' => ['type' => 'string'], 'send_code_type' => ['type' => 'string', 'enum' => ['DEFAULT', 'SMS', 'CALL', 'BALEONLY']]]],
            'PhoneAuthChallenge' => ['type' => 'object', 'properties' => ['transaction_hash' => ['type' => 'string'], 'code_timeout' => ['type' => 'integer'], 'sent_code_type' => ['type' => 'string'], 'next_send_code_type' => ['type' => 'string', 'nullable' => true]]],
            'ValidateCodeRequest' => ['type' => 'object', 'required' => ['code', 'transaction_hash'], 'properties' => ['code' => ['type' => 'string'], 'transaction_hash' => ['type' => 'string']]],
            'ValidatePasswordRequest' => ['type' => 'object', 'required' => ['password', 'transaction_hash'], 'properties' => ['password' => ['type' => 'string', 'format' => 'password'], 'transaction_hash' => ['type' => 'string']]],
            'AuthResult' => ['type' => 'object', 'properties' => ['token' => ['type' => 'string', 'nullable' => true], 'user' => ['$ref' => '#/components/schemas/User']]],
            'User' => ['type' => 'object', 'properties' => ['id' => ['type' => 'integer'], 'name' => ['type' => 'string'], 'username' => ['type' => 'string', 'nullable' => true]]],
            'SendMessageRequest' => ['type' => 'object', 'required' => ['peer', 'text'], 'properties' => ['peer' => ['$ref' => '#/components/schemas/Peer'], 'text' => ['type' => 'string'], 'send_type' => ['type' => 'string', 'enum' => ['TEXT', 'DOCUMENT', 'PHOTO', 'VIDEO', 'STICKER']]]],
            'Peer' => ['type' => 'object', 'required' => ['type', 'id'], 'properties' => ['type' => ['type' => 'string', 'enum' => ['user', 'chat', 'channel']], 'id' => ['type' => 'integer'], 'access_hash' => ['type' => 'integer', 'nullable' => true]]],
            'Message' => ['type' => 'object', 'properties' => ['id' => ['type' => 'integer'], 'peer' => ['$ref' => '#/components/schemas/Peer'], 'text' => ['type' => 'string', 'nullable' => true]]],
            'MessageResponse' => ['type' => 'object', 'properties' => ['message' => ['$ref' => '#/components/schemas/Message']]],
            'LoadHistoryRequest' => ['type' => 'object', 'required' => ['peer'], 'properties' => ['peer' => ['$ref' => '#/components/schemas/Peer'], 'limit' => ['type' => 'integer', 'minimum' => 1, 'maximum' => 100]]],
            'HistoryResponse' => ['type' => 'object', 'properties' => ['messages' => ['type' => 'array', 'items' => ['$ref' => '#/components/schemas/Message']]]],
            'FileUploadRequest' => ['type' => 'object', 'required' => ['expected_size', 'crc', 'user_id', 'name', 'mime_type'], 'properties' => ['expected_size' => ['type' => 'integer'], 'crc' => ['type' => 'string'], 'user_id' => ['type' => 'integer'], 'name' => ['type' => 'string'], 'mime_type' => ['type' => 'string']]],
            'FileUploadInfo' => ['type' => 'object', 'properties' => ['url' => ['type' => 'string', 'format' => 'uri'], 'duplicate' => ['type' => 'boolean'], 'file_id' => ['type' => 'integer', 'nullable' => true], 'chunk_size' => ['type' => 'integer', 'nullable' => true]]],
        ],
    ],
];

$fa = $base;
$fa['info']['description'] = "کلاینت ناهم‌گام PHP برای API پیام‌رسان بله. این مستند OpenAPI به‌صورت خودکار تولید می‌شود و جریان‌های عمومی احراز هویت، پیام‌رسانی، فایل و گروه را پوشش می‌دهد.";
$fa['tags'][0]['description'] = 'احراز هویت شماره تلفن، اعتبارسنجی و مدیریت سشن.';
$fa['tags'][1]['description'] = 'ارسال، خواندن، به‌روزرسانی و حذف پیام‌ها.';
$fa['tags'][2]['description'] = 'عملیات مخاطبین و پروفایل کاربر.';
$fa['tags'][3]['description'] = 'مدیریت URL آپلود و انتقال فایل.';
$fa['tags'][4]['description'] = 'مدیریت گروه و کانال.';

foreach ($fa['paths'] as $path => &$operations) {
    foreach ($operations as $method => &$details) {
        $details['summary'] = match ($path) {
            '/auth/start_phone_auth' => 'شروع احراز هویت با شماره تلفن',
            '/auth/validate_code' => 'اعتبارسنجی کد تأیید',
            '/auth/validate_password' => 'اعتبارسنجی رمز دومرحله‌ای',
            '/messaging/send_message' => 'ارسال پیام',
            '/messaging/load_history' => 'بارگذاری تاریخچه چت',
            '/files/get_file_upload_url' => 'دریافت URL آپلود فایل',
            default => $details['summary'] ?? 'Operation',
        };
        $details['description'] = match ($path) {
            '/auth/start_phone_auth' => 'جریان احراز هویت تلفن را شروع می‌کند و یک hash تراکنش برای تأیید کد برمی‌گرداند.',
            '/auth/validate_code' => 'کد پیامک یا تماس را اعتبارسنجی می‌کند و مرحلهٔ اول احراز هویت را تکمیل می‌کند.',
            '/auth/validate_password' => 'در صورت نیاز به رمز دومرحله‌ای، رمز حساب را اعتبارسنجی می‌کند.',
            '/messaging/send_message' => 'پیام متنی یا رسانه‌ای را به یک peer هدف در بله ارسال می‌کند.',
            '/messaging/load_history' => 'پیام‌های اخیر یک چت یا مخاطب را بارگذاری می‌کند.',
            '/files/get_file_upload_url' => 'اطلاعات آپلود و URL مقصد فایل برای ارسال حجم‌های بزرگ را دریافت می‌کند.',
            default => $details['description'] ?? '',
        };
    }
}

$enFile = $root . '/openapi.en.yaml';
$faFile = $root . '/openapi.fa.yaml';
$defaultFile = $root . '/openapi.yaml';

file_put_contents($enFile, json_encode($base, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . PHP_EOL);
file_put_contents($faFile, json_encode($fa, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . PHP_EOL);
file_put_contents($defaultFile, json_encode($base, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . PHP_EOL);

$index = <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aiobale PHP SDK Swagger</title>
    <link rel="stylesheet" href="https://unpkg.com/swagger-ui-dist@5/swagger-ui.css" />
    <style>
        body { margin: 0; background: #f5f7fb; font-family: Arial, sans-serif; }
        .toolbar { background: #0b1f33; color: white; padding: 12px 24px; display: flex; justify-content: space-between; align-items: center; }
        .toolbar label { margin-right: 10px; }
        select { padding: 8px 12px; border-radius: 8px; border: 0; }
        #swagger-ui { max-width: 1400px; margin: 0 auto; padding: 24px; }
    </style>
</head>
<body>
    <div class="toolbar">
        <strong>Aiobale PHP SDK</strong>
        <div>
            <label for="langSelect">Language</label>
            <select id="langSelect">
                <option value="openapi.en.yaml">English</option>
                <option value="openapi.fa.yaml">فارسی</option>
            </select>
        </div>
    </div>
    <div id="swagger-ui"></div>

    <script src="https://unpkg.com/swagger-ui-dist@5/swagger-ui-bundle.js"></script>
    <script>
        const select = document.getElementById('langSelect');
        const render = (url) => {
            window.ui?.dispose();
            window.ui = SwaggerUIBundle({
                url,
                dom_id: '#swagger-ui',
                deepLinking: true,
                docExpansion: 'list',
                filter: true,
                persistAuthorization: true,
                tryItOutEnabled: false,
            });
        };
        select.addEventListener('change', (event) => render(event.target.value));
        render('openapi.en.yaml');
    </script>
</body>
</html>
HTML;

file_put_contents($root . '/index.html', $index . PHP_EOL);

echo "Swagger files generated successfully in {$root}\n";
