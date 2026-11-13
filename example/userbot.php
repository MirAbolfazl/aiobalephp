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

function prompt(string $message): string
{
    fwrite(STDOUT, $message);
    $value = fgets(STDIN);
    if ($value === false) {
        throw new RuntimeException('Could not read input from the terminal.');
    }

    return trim($value);
}

$sessionFile = getenv('BALE_SESSION_FILE')
    ?: dirname(__DIR__) . '/var/bale-session.json';
$accessToken = getenv('BALE_ACCESS_TOKEN') ?: null;
$client = new Client(sessionFile: $sessionFile);

try {
    async(function () use ($client, $accessToken): void {
        if ($accessToken === null && $client->token() === null) {
            $phoneNumber = prompt('Phone number (international format, e.g. +989123456789): ');
            $challenge = $client->startPhoneAuth(
                phoneNumber: $phoneNumber,
                deviceTitle: 'aiobale-php userbot',
            )->await();

            printf(
                "A login code was sent using %s. Enter the code to continue.\n",
                $challenge->sent_code_type->name,
            );
            $code = prompt('Login code: ');

            try {
                $client->validateCode($code, $challenge->transaction_hash)->await();
            } catch (BaleApiException $exception) {
                if (stripos($exception->getMessage(), 'password needed') === false) {
                    throw $exception;
                }

                $password = prompt('Two-step verification password: ');
                $client->validatePassword($password, $challenge->transaction_hash)->await();
            }

            echo "Login successful. The session was saved locally.\n";
        }

        $client->on('message', static function (Message $message, Client $client): void {
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

            echo "Replied to !ping.\n";
        });

        $client->connect($accessToken)->await();

        echo "Userbot is running. Send !ping in a private chat. Press Ctrl+C to stop.\n";

        while ($client->isRunning()) {
            delay(1);
        }
    })->await();
} catch (BaleApiException $exception) {
    fprintf(
        STDERR,
        "Bale API error (%d): %s\n",
        $exception->topic,
        $exception->getMessage(),
    );
    exit(1);
} catch (AiobaleException $exception) {
    fwrite(STDERR, "Client error: {$exception->getMessage()}\n");
    exit(1);
} finally {
    if ($client->isRunning()) {
        $client->stop()->await();
    }
}
