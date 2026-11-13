<?php

declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

use Aiobale\Methods\Messaging\SendMessage;
use Aiobale\Methods\MethodRegistry;
use Aiobale\Protocol\ProtoBuf;
use Aiobale\Enums\PeerType;
use Aiobale\Client\Client;
use Aiobale\Client\SessionStore;
use Aiobale\Dispatcher\Router;
use Aiobale\Types\Chat;
use Aiobale\Types\MessageContent;
use Aiobale\Types\Peer;
use Aiobale\Types\Response;
use Aiobale\Types\Request;
use Aiobale\Types\TextMessage;
use Aiobale\Types\TemplateMessage;
use Aiobale\Types\Responses\DefaultResponse;
use Aiobale\Types\Responses\MessageResponse;

function assertSameValue(mixed $expected, mixed $actual, string $message): void
{
    if ($expected !== $actual) {
        throw new RuntimeException(sprintf(
            "%s\nExpected: %s\nActual: %s",
            $message,
            var_export($expected, true),
            var_export($actual, true),
        ));
    }
}

$codec = new ProtoBuf();
$peer = new Peer(['type' => 1, 'id' => 42]);
$peerWire = $codec->encode($peer);
assertSameValue("\x08\x01\x10\x2a", $peerWire, 'Peer fields should use their protobuf aliases.');
$roundTrip = Peer::fromWire($codec->decode($peerWire, Peer::class));
assertSameValue(PeerType::PRIVATE, $roundTrip->type, 'Peer type should round-trip.');
assertSameValue(42, $roundTrip->id, 'Peer ID should round-trip.');
$wrappedPeer = Peer::fromWire(['1' => ['1' => 1], '2' => ['1' => 42]]);
assertSameValue(42, $wrappedPeer->id, 'Single-value wrappers should be unwrapped.');

$method = new SendMessage([
    'peer' => $peer,
    'message_id' => 7,
    'content' => new MessageContent([
        'text' => new TextMessage(['value' => 'hello']),
    ]),
    'chat' => new Chat(['type' => 1, 'id' => 42]),
]);
assertSameValue('bale.messaging.v2.Messaging', $method::service(), 'Method service metadata should be preserved.');
assertSameValue('SendMessage', $method::methodName(), 'Method name metadata should be preserved.');
assertSameValue(SendMessage::class, MethodRegistry::resolve('send_message'), 'Snake-case lookup should find the API method.');

$client = (new Client())->setUserId(77);
$materialize = new ReflectionMethod($client, 'materializeResult');
$sentMessage = $materialize->invoke($client, [1 => 4, 2 => 1234], $method);
assertSameValue(MessageResponse::class, $sentMessage::class, 'Send-message results should use their typed response model.');
assertSameValue(77, $sentMessage->message->sender_id, 'Sent-message responses should use the configured user ID.');
assertSameValue(7, $sentMessage->message->message_id, 'Sent-message responses should retain the request message ID.');
$template = new TemplateMessage(['message' => new MessageContent()]);
assertSameValue(16, strlen((string) $template->temp_id), 'Template messages should generate a 16-digit temporary ID.');

$requestPayload = (new ReflectionMethod($client, 'buildRequest'))->invoke($client, $method, 99);
$request = Request::fromWire($codec->decode($requestPayload, Request::class));
assertSameValue('bale.messaging.v2.Messaging', $request->body->service, 'WebSocket requests should encode service metadata.');
assertSameValue(99, $request->body->request_id, 'WebSocket requests should encode request IDs.');

$responseWire = $codec->encode([
    '1' => [
        '2' => ['1' => 9, '2' => 1234],
        '3' => 15,
    ],
]);
$decoded = $codec->decode($responseWire, Response::class, DefaultResponse::class);
$response = Response::fromWire($decoded);
assertSameValue(15, $response->response->number, 'Response IDs should decode.');
$result = DefaultResponse::fromWire($response->response->result);
assertSameValue(9, $result->seq, 'Response payloads should decode with the requested model schema.');
assertSameValue(1234, $result->date, 'Nested response values should be preserved.');

$input = \Aiobale\Types\FileInput::fromBytes('data', 'file.bin', 'application/octet-stream');
assertSameValue(4, $input->size, 'In-memory upload size should be reported.');
assertSameValue('data', $input->contents(), 'In-memory upload contents should be preserved.');
$chunks = iterator_to_array($input->chunks(2));
assertSameValue(['da', 'ta'], $chunks, 'File contents should be exposed as chunks.');

$sessionPath = sys_get_temp_dir() . '/aiobale-php-test-' . bin2hex(random_bytes(6)) . '/session.json';
$sessionStore = new SessionStore($sessionPath);
$sessionStore->save('test.jwt.token', 42);
$savedSession = $sessionStore->load();
assertSameValue(['token' => 'test.jwt.token', 'user_id' => 42], $savedSession, 'Session store should persist the token and user ID.');
assertSameValue(0600, fileperms($sessionPath) & 0777, 'Session file should only be readable by its owner.');
$sessionClient = new Client(sessionFile: $sessionPath);
assertSameValue('test.jwt.token', $sessionClient->token(), 'Client should load its stored session.');
assertSameValue(42, $sessionClient->userId(), 'Client should restore its stored user ID.');
$sessionClient->deleteSession();
assertSameValue(null, $sessionStore->load(), 'Deleting a session should remove its file.');
rmdir(dirname($sessionPath));

$router = new Router();
$router->on('test', static fn (int $number): int => $number + 1, static fn (int $number): bool => $number > 0);
assertSameValue(3, $router->dispatch('test', 2)->await(), 'Router handlers should run through AMPHP futures.');

echo "All tests passed.\n";
