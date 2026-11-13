<?php

declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

use Aiobale\Client\Client;
use Aiobale\Enums\ChatType;
use Aiobale\Enums\PeerType;
use Aiobale\Exception\AiobaleException;
use Aiobale\Exception\BaleApiException;
use Aiobale\Methods\Messaging\SendMessage;
use Aiobale\Types\Chat;
use Aiobale\Types\Message;
use Aiobale\Types\MessageContent;
use Aiobale\Types\Peer;
use Aiobale\Types\TextMessage;
use function Amp\async;
use function Amp\delay;

$sessionFile = getenv('BALE_SESSION_FILE')
    ?: dirname(__DIR__) . '/var/bale-session.json';
$accessToken = getenv('BALE_ACCESS_TOKEN') ?: null;
$client = new Client(sessionFile: $sessionFile);

try {
    async(function () use ($client, $accessToken): void {
        $client->on('message', static function (Message $message, Client $client): void {
            $userId = $client->userId();
            if ($userId === null) {
                return;
            }

            if ($message->sender_id === $userId) {
                return;
            }

            if ($message->chat->type !== ChatType::PRIVATE) {
                return;
            }

            $text = trim($message->content->text?->value ?? '');
            if (strcasecmp($text, '!ping') !== 0) {
                return;
            }

            $client->invoke(new SendMessage([
                'peer' => new Peer([
                    'type' => PeerType::PRIVATE,
                    'id' => $message->chat->id,
                ]),
                'message_id' => random_int(1, 9_999_999_999_999_999),
                'content' => new MessageContent([
                    'text' => new TextMessage(['value' => 'pong']),
                ]),
                'chat' => new Chat([
                    'type' => ChatType::PRIVATE,
                    'id' => $message->chat->id,
                ]),
            ]))->await();

            echo "به فرمان !ping پاسخ داده شد.\n";
        });

        $client->connect($accessToken)->await();

        echo "Userbot فعال است؛ برای توقف Ctrl+C را بزنید.\n";

        while ($client->isRunning()) {
            delay(1);
        }
    })->await();
} catch (BaleApiException $exception) {
    fprintf(
        STDERR,
        "خطای API بله (%d): %s\n",
        $exception->topic,
        $exception->getMessage(),
    );
    exit(1);
} catch (AiobaleException $exception) {
    fwrite(STDERR, "خطای کلاینت: {$exception->getMessage()}\n");
    exit(1);
} finally {
    if ($client->isRunning()) {
        $client->stop()->await();
    }
}
