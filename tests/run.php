<?php

declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

use Aiobale\Methods\Messaging\SendMessage;
use Aiobale\Methods\MethodRegistry;
use Aiobale\Methods\Files\GetFileUploadUrl;
use Aiobale\Protocol\ProtoBuf;
use Aiobale\Enums\PeerType;
use Aiobale\Client\Client;
use Aiobale\Client\SessionStore;
use Aiobale\Dispatcher\Router;
use Aiobale\Types\Chat;
use Aiobale\Types\ContactData;
use Aiobale\Types\ContactPeer;
use Aiobale\Types\ExtData;
use Aiobale\Types\ExtValue;
use Aiobale\Types\FileUploadInfo;
use Aiobale\Types\MessageContent;
use Aiobale\Types\Peer;
use Aiobale\Types\Response;
use Aiobale\Types\Request;
use Aiobale\Types\TextMessage;
use Aiobale\Types\TemplateMessage;
use Aiobale\Types\Responses\DefaultResponse;
use Aiobale\Types\Responses\ContactsResponse;
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

$emptyContactsResponse = ContactsResponse::fromWire($codec->decode('', ContactsResponse::class));
assertSameValue([], $emptyContactsResponse->peers, 'Import-contacts response should allow an empty peer list.');
$contactsResponseWire = $codec->encode([
    '4' => [new ContactPeer(['id' => 42, 'access_hash' => 123])],
]);
$contactsResponse = ContactsResponse::fromWire(
    $codec->decode($contactsResponseWire, ContactsResponse::class),
);
assertSameValue(42, $contactsResponse->peers[0]->id, 'Imported contact IDs should decode from response field 4.');
assertSameValue(123, $contactsResponse->peers[0]->access_hash, 'Imported contact access hashes should decode from response field 4.');
$importContacts = new \Aiobale\Methods\User\ImportContacts([
    'phones' => [
        new ContactData([
            'phone_number' => 989123456789,
            'name' => new \Aiobale\Types\StringValue(['value' => 'Test contact']),
        ]),
    ],
]);
assertSameValue(
    ContactsResponse::class,
    $importContacts::returning(),
    'ImportContacts should use the corrected response model.',
);

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
$walletMethod = MethodRegistry::resolve('GetMyWallets');
assertSameValue('bale.wallet.v1.Wallet', $walletMethod::service(), 'Generated wallet RPCs should be registered.');
$groupPinMethod = MethodRegistry::resolve('bale.groups.v1.Groups.PinMessage');
assertSameValue(
    \Aiobale\Methods\Groups\PinGroupMessage::class,
    $groupPinMethod,
    'Service-qualified RPC names should resolve duplicate method names.',
);

$client = (new Client())->setUserId(77);
$phoneAuthParameters = (new ReflectionMethod(Client::class, 'startPhoneAuth'))->getParameters();
assertSameValue(true, $phoneAuthParameters[1]->isDefaultValueAvailable(), 'Phone authentication should provide a default app key.');
$materialize = new ReflectionMethod($client, 'materializeResult');
$sentMessage = $materialize->invoke($client, [1 => 4, 2 => 1234], $method);
assertSameValue(MessageResponse::class, $sentMessage::class, 'Send-message results should use their typed response model.');
assertSameValue(77, $sentMessage->message->sender_id, 'Sent-message responses should use the configured user ID.');
assertSameValue(7, $sentMessage->message->message_id, 'Sent-message responses should retain the request message ID.');
$sentMessageWire = $codec->encode([
    '2' => 1234,
    '4' => [
        new ExtData([
            'name' => 'previous_message_rid',
            'value' => new ExtValue(['number' => 45]),
        ]),
        new ExtData([
            'name' => 'previous_message_date',
            'value' => new ExtValue(['number' => 6789]),
        ]),
    ],
]);
$sentMessageData = $codec->decode($sentMessageWire, MessageResponse::class);
$sentMessageWithExtensions = $materialize->invoke($client, $sentMessageData, $method);
assertSameValue(45, $sentMessageWithExtensions->message->previous_message->message_id, 'Send-message extensions should decode as repeated ExtData entries.');
assertSameValue(6789, $sentMessageWithExtensions->message->previous_message->date, 'Previous-message extension dates should be retained.');
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
$crcInput = \Aiobale\Types\FileInput::fromBytes('123456789', 'file.bin');
assertSameValue(3421780262, $crcInput->crc32(), 'Upload checksums should use Bale CRC32 values.');
$uploadRequest = new GetFileUploadUrl([
    'expected_size' => $crcInput->size,
    'crc' => $crcInput->crc32(),
    'user_id' => 42,
    'name' => $crcInput->name,
    'mime_type' => $crcInput->mimeType,
    'ex_peer' => new Peer([
        'type' => PeerType::GROUP,
        'id' => 42,
        'access_hash' => 1,
    ]),
    'chunk_size' => 262144,
]);
$uploadRequestData = $codec->decode($codec->encode($uploadRequest), GetFileUploadUrl::class);
assertSameValue(3421780262, $uploadRequestData['2'], 'Upload requests should encode CRC in protobuf field 2.');
assertSameValue(42, $uploadRequestData['3'], 'Upload requests should use the authenticated Bale account ID.');
assertSameValue(42, $uploadRequestData['6']['2'], 'Upload requests should include the target peer.');
assertSameValue(1, $uploadRequestData['6']['3'], 'Upload target peers should use Bale\'s valid access hash.');
assertSameValue(262144, $uploadRequestData['8'], 'Upload requests should encode the optional chunk size.');
$uploadInfo = FileUploadInfo::fromWire(['1' => 123, '3' => 1]);
assertSameValue(true, $uploadInfo->duplicate, 'Duplicate upload responses should be recognized.');
assertSameValue('', $uploadInfo->url, 'Duplicate upload responses may omit an upload URL.');

$feedbackClass = MethodRegistry::resolve('SubmitMarketFeedback');
$feedbackSchema = $feedbackClass::schema();
$mapField = null;
foreach ($feedbackSchema as $fieldName => $definition) {
    if (($definition['type'] ?? null) === 'map') {
        $mapField = $fieldName;
        break;
    }
}
if ($mapField === null) {
    throw new RuntimeException('Generated market feedback RPC should expose its map field.');
}
$feedback = new $feedbackClass([$mapField => ['topic' => 'feedback']]);
$feedbackData = $codec->decode($codec->encode($feedback), $feedbackClass);
assertSameValue(
    ['topic' => 'feedback'],
    $feedbackData[$feedbackSchema[$mapField]['alias']],
    'Generated map fields should round-trip through protobuf.',
);

$doubleModel = new class extends \Aiobale\Model\BaleObject {
    public static function schema(): array
    {
        return ['value' => ['alias' => '1', 'type' => 'float', 'wire' => 'double', 'default' => null]];
    }
};
$double = new ($doubleModel::class)(['value' => 1.25]);
$doubleData = $codec->decode($codec->encode($double), $double::class);
assertSameValue(1.25, $doubleData['1'], 'Double fields should round-trip using their fixed-width wire encoding.');

$packedFloatModel = new class extends \Aiobale\Model\BaleObject {
    public static function schema(): array
    {
        return ['values' => [
            'alias' => '1',
            'type' => 'array',
            'items' => 'float',
            'items_wire' => 'float',
            'default' => [],
        ]];
    }
};
$packedFloats = "\x0a\x08" . pack('g', 1.25) . pack('g', 2.5);
$packedFloatData = $codec->decode($packedFloats, $packedFloatModel::class);
assertSameValue([1.25, 2.5], $packedFloatData['1'], 'Packed repeated float fields should decode.');

$sint64Model = new class extends \Aiobale\Model\BaleObject {
    public static function schema(): array
    {
        return ['value' => ['alias' => '1', 'type' => 'int', 'wire' => 'sint64', 'default' => null]];
    }
};
$sint64 = new ($sint64Model::class)(['value' => PHP_INT_MAX]);
$sint64Data = $codec->decode($codec->encode($sint64), $sint64::class);
assertSameValue(PHP_INT_MAX, $sint64Data['1'], 'sint64 values at the PHP integer limit should round-trip.');

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

$tokenClient = new Client();
$tokenClient->setSessionToken('account.jwt.token', 99);
assertSameValue('account.jwt.token', $tokenClient->token(), 'A database-backed session token should be usable without opening a WebSocket.');
assertSameValue(99, $tokenClient->userId(), 'A database-backed session should retain the account user ID.');

$router = new Router();
$router->on('test', static fn (int $number): int => $number + 1, static fn (int $number): bool => $number > 0);
assertSameValue(3, $router->dispatch('test', 2)->await(), 'Router handlers should run through AMPHP futures.');

echo "All tests passed.\n";
