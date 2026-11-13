<?php

declare(strict_types=1);

namespace Aiobale\Client;

use Aiobale\Dispatcher\Router;
use Aiobale\Exception\AiobaleException;
use Aiobale\Exception\BaleApiException;
use Aiobale\Enums\SendCodeType;
use Aiobale\Enums\SendType;
use Aiobale\Methods\Files\GetFileUploadUrl;
use Aiobale\Methods\MethodRegistry;
use Aiobale\Methods\Auth\SignOut;
use Aiobale\Methods\Auth\SignUp;
use Aiobale\Methods\Auth\StartPhoneAuth;
use Aiobale\Methods\Auth\ValidateCode;
use Aiobale\Methods\Auth\ValidatePassword;
use Aiobale\Methods\Messaging\SendMessage;
use Aiobale\Model\BaleMethod;
use Aiobale\Model\BaleObject;
use Aiobale\Protocol\ProtoBuf;
use Aiobale\Types\ExtData;
use Aiobale\Types\FileDetails;
use Aiobale\Types\FileUploadInfo;
use Aiobale\Types\Message;
use Aiobale\Types\OtherMessage;
use Aiobale\Types\Responses\PhoneAuthResponse;
use Aiobale\Types\Responses\ValidateCodeResponse;
use Aiobale\Types\SendTypeModel;
use Amp\DeferredFuture;
use Amp\Future;
use Amp\ByteStream\ReadableIterableStream;
use Amp\Http\Client\HttpClientBuilder;
use Amp\Http\Client\Request;
use Amp\Http\Client\StreamedContent;
use Amp\TimeoutCancellation;
use function Amp\async;
use function Amp\delay;
use Amp\Websocket\Client\WebsocketHandshake;
use Amp\Websocket\Client\WebsocketConnection;
use Throwable;
use function Amp\Websocket\Client\connect as connectWebsocket;

final class Client
{
    private const DEFAULT_WS_URL = 'wss://next-ws.bale.ai/ws/';
    private const DEFAULT_POST_URL = 'https://next-ws.bale.ai';
    private const DEFAULT_TIMEOUT = 5.0;
    private const DEFAULT_APP_KEY = 'C28D46DC4C3A7A26564BFCC48B929086A95C93C98E789A19847BEE8627DE4E7D';
    private const DEFAULT_USER_AGENT = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36';

    private readonly ProtoBuf $codec;
    private readonly Router $router;
    private readonly object $http;
    private ?WebsocketConnection $websocket = null;
    private bool $running = false;
    private int $requestId = 0;
    private int $pingId = 0;
    private int $sessionId;
    private string $token = '';
    private ?int $authenticatedUserId = null;
    private readonly ?SessionStore $sessionStore;

    /** @var array<int|string, array{deferred: DeferredFuture, returning: ?string}> */
    private array $pending = [];

    public function __construct(
        private readonly string $wsUrl = self::DEFAULT_WS_URL,
        private readonly string $postUrl = self::DEFAULT_POST_URL,
        private readonly float $timeout = self::DEFAULT_TIMEOUT,
        private readonly string $userAgent = self::DEFAULT_USER_AGENT,
        ?string $sessionFile = null,
    ) {
        $this->codec = new ProtoBuf();
        $this->router = new Router();
        $this->http = HttpClientBuilder::buildDefault();
        $this->sessionId = (int) floor(microtime(true) * 1000);
        $this->sessionStore = $sessionFile !== null ? new SessionStore($sessionFile) : null;

        $session = $this->sessionStore?->load();
        if ($session !== null) {
            $this->token = $session['token'];
            $this->authenticatedUserId = $session['user_id'] ?? $this->extractUserId($this->token);
        }
    }

    public function connect(?string $token = null): Future
    {
        return async(function () use ($token): void {
            if ($this->running) {
                throw new AiobaleException('Client is already connected.');
            }

            $token = $token ?? $this->token;
            if ($token === '') {
                throw new AiobaleException('No access token is available. Sign in first or pass a token to connect().');
            }
            $this->token = $token;
            $this->authenticatedUserId ??= $this->extractUserId($token);
            $handshake = (new WebsocketHandshake($this->wsUrl))
                ->withHeader('User-Agent', $this->userAgent)
                ->withHeader('Cookie', 'access_token=' . $token)
                ->withHeader('Origin', 'https://web.bale.ai');

            $this->websocket = connectWebsocket($handshake);
            $this->running = true;
            $this->sendHandshake();
            async(fn () => $this->listen());
            async(fn () => $this->pingLoop());
        });
    }

    public function start(?string $token = null): Future
    {
        return $this->connect($token);
    }

    public function startPhoneAuth(
        int|string $phoneNumber,
        string $appKey = self::DEFAULT_APP_KEY,
        SendCodeType $codeType = SendCodeType::DEFAULT,
        int $appId = 4,
        ?string $deviceHash = null,
        string $deviceTitle = 'PHP AMPHP client',
    ): Future {
        return async(function () use ($phoneNumber, $appKey, $codeType, $appId, $deviceHash, $deviceTitle): PhoneAuthResponse {
            $digits = ltrim((string) $phoneNumber, '+');
            if ($digits === '' || !ctype_digit($digits)) {
                throw new AiobaleException('Phone number must contain digits only, optionally prefixed with +.');
            }
            if ($appKey === '') {
                throw new AiobaleException('An app key is required to start phone authentication.');
            }

            $result = $this->post(new StartPhoneAuth([
                'phone_number' => (int) $digits,
                'app_id' => $appId,
                'app_key' => $appKey,
                'device_hash' => $deviceHash ?? self::uuid(),
                'device_title' => $deviceTitle,
                'send_code_type' => $codeType,
            ]))->await();

            if (!$result instanceof PhoneAuthResponse) {
                throw new AiobaleException('Unexpected response while starting phone authentication.');
            }
            return $result;
        });
    }

    public function validateCode(string $code, string $transactionHash): Future
    {
        return $this->validateAuthentication(new ValidateCode([
            'code' => $code,
            'transaction_hash' => $transactionHash,
        ]));
    }

    public function validatePassword(string $password, string $transactionHash): Future
    {
        return $this->validateAuthentication(new ValidatePassword([
            'password' => $password,
            'transaction_hash' => $transactionHash,
        ]));
    }

    public function signUp(string $transactionHash, string $name): Future
    {
        return $this->post(new SignUp([
            'transaction_hash' => $transactionHash,
            'name' => $name,
        ]));
    }

    public function signOut(bool $deleteSession = true): Future
    {
        return async(function () use ($deleteSession): mixed {
            if ($this->token === '') {
                throw new AiobaleException('No authenticated session is available to sign out.');
            }

            $response = $this->post(new SignOut(), $this->token)->await();
            $this->stop()->await();
            $this->token = '';
            $this->authenticatedUserId = null;
            if ($deleteSession) {
                $this->sessionStore?->delete();
            }
            return $response;
        });
    }

    public function token(): ?string
    {
        return $this->token !== '' ? $this->token : null;
    }

    public function setSessionToken(string $token, ?int $userId = null): self
    {
        if ($token === '') {
            throw new AiobaleException('A non-empty session token is required.');
        }
        if ($this->running) {
            throw new AiobaleException('A session token cannot be replaced while the client is connected.');
        }

        $this->token = $token;
        $this->authenticatedUserId = $userId ?? $this->extractUserId($token);

        return $this;
    }

    public function saveSession(): void
    {
        if ($this->sessionStore === null) {
            throw new AiobaleException('Configure a session file in Client before saving the session.');
        }
        if ($this->token === '') {
            throw new AiobaleException('No access token is available to save.');
        }

        $this->sessionStore->save($this->token, $this->authenticatedUserId);
    }

    public function deleteSession(): void
    {
        if ($this->sessionStore === null) {
            throw new AiobaleException('Configure a session file in Client before deleting the session.');
        }
        $this->sessionStore->delete();
        $this->token = '';
        $this->authenticatedUserId = null;
    }

    public function sessionFile(): ?string
    {
        return $this->sessionStore?->path();
    }

    public function stop(): Future
    {
        return async(function (): void {
            $this->running = false;
            if ($this->websocket !== null && !$this->websocket->isClosed()) {
                $this->websocket->close();
            }
            $this->websocket = null;
            foreach ($this->pending as $request) {
                if (!$request['deferred']->isComplete()) {
                    $request['deferred']->error(new AiobaleException('Client stopped before the request completed.'));
                }
            }
            $this->pending = [];
        });
    }

    public function isRunning(): bool
    {
        return $this->running && $this->websocket !== null && !$this->websocket->isClosed();
    }

    public function invoke(BaleMethod $method, ?float $timeout = null): Future
    {
        return async(function () use ($method, $timeout): mixed {
            if (!$this->isRunning()) {
                return $this->post($method, $this->token !== '' ? $this->token : null)->await();
            }

            $id = ++$this->requestId;
            $deferred = new DeferredFuture();
            $this->pending[$id] = [
                'deferred' => $deferred,
                'returning' => $method::returning(),
            ];
            try {
                $this->websocket?->sendBinary($this->buildRequest($method, $id));
                $response = $deferred->getFuture()->await(
                    new TimeoutCancellation($timeout ?? $this->timeout),
                );
            } catch (\Amp\CancelledException $exception) {
                unset($this->pending[$id]);
                throw new AiobaleException('The Bale WebSocket request timed out.', 0, $exception);
            } finally {
                unset($this->pending[$id]);
            }

            if ($response->error !== null) {
                throw new BaleApiException($response->error->message, $response->error->topic);
            }

            return $this->materializeResult($response->result, $method);
        });
    }

    public function makeRequest(BaleMethod $method, ?float $timeout = null): Future
    {
        return $this->invoke($method, $timeout);
    }

    public function post(BaleMethod $method, ?string $token = null): Future
    {
        return async(function () use ($method, $token): mixed {
            $url = rtrim($this->postUrl, '/') . '/'
                . $method::service() . '/' . $method::methodName();
            $headers = array_merge($this->metadataHeaders(), [
                'User-Agent' => $this->userAgent,
                'Origin' => 'https://web.bale.ai',
                'content-type' => 'application/grpc-web+proto',
            ]);
            if ($token !== null) {
                $headers['Cookie'] = 'access_token=' . $token;
            }

            $request = new Request($url, 'POST');
            $request->setHeaders($headers);
            $payload = $this->codec->encode($method->modelDump());
            $request->setBody("\0" . pack('N', strlen($payload)) . $payload);
            $response = $this->http->request($request);
            $grpcMessage = $response->getHeader('grpc-message');
            if ($grpcMessage !== null) {
                throw new BaleApiException(rawurldecode($grpcMessage));
            }

            $content = $response->getBody()->buffer();
            if ($response->getStatus() >= 400) {
                throw new AiobaleException(sprintf(
                    'Bale HTTP request failed with status %d: %s',
                    $response->getStatus(),
                    $content,
                ));
            }

            $payload = self::cleanGrpc($content);
            $returning = $method::returning();
            if ($returning === null) {
                return $payload;
            }

            $data = $this->codec->decode($payload, $returning, $returning);
            return $this->materializeResult($data, $method);
        });
    }

    public function on(string $event, callable $callback, callable ...$filters): self
    {
        $this->router->on($event, $callback, ...$filters);
        return $this;
    }

    public function router(): Router
    {
        return $this->router;
    }

    public function userId(): ?int
    {
        return $this->authenticatedUserId;
    }

    public function setUserId(int $userId): self
    {
        $this->authenticatedUserId = $userId;
        return $this;
    }

    public function upload(
        FileInput $file,
        string $url,
        ?callable $progress = null,
        ?int $chunkSize = null,
    ): Future {
        return async(function () use ($file, $url, $progress, $chunkSize): void {
            if ($url === '') {
                throw new AiobaleException('A Bale upload URL is required.');
            }

            $chunkSize ??= 262144;
            if ($chunkSize <= 0) {
                throw new AiobaleException('The Bale upload chunk size must be positive.');
            }

            $request = new Request($url, 'PUT');
            $request->setTransferTimeout(600);
            $request->setInactivityTimeout(600);
            $request->setBody(StreamedContent::fromStream(
                new ReadableIterableStream($file->chunks($chunkSize, $progress)),
                $file->size,
            ));
            $response = $this->http->request($request);
            if ($response->getStatus() < 200 || $response->getStatus() >= 300) {
                throw new AiobaleException(sprintf(
                    'Upload failed with status %d: %s',
                    $response->getStatus(),
                    $response->getBody()->buffer(),
                ));
            }
        });
    }

    public function uploadFile(
        FileInput $file,
        SendType $sendType = SendType::DOCUMENT,
        ?callable $progress = null,
    ): Future {
        return async(function () use ($file, $sendType, $progress): FileDetails {
            $userId = $this->userId();
            if ($userId === null) {
                throw new AiobaleException('A Bale user ID is required before uploading a file.');
            }

            $uploadInfo = $this->invoke(new GetFileUploadUrl([
                'expected_size' => $file->size,
                'crc' => $file->crc32(),
                'user_id' => $userId,
                'name' => $file->name,
                'mime_type' => $file->mimeType,
                'send_type' => new SendTypeModel(['type' => $sendType]),
            ]))->await();

            if (!$uploadInfo instanceof FileUploadInfo) {
                throw new AiobaleException('Bale returned an invalid file upload response.');
            }

            if (!$uploadInfo->duplicate) {
                if ($uploadInfo->url === '') {
                    throw new AiobaleException('Bale did not return a file upload URL.');
                }

                $this->upload($file, $uploadInfo->url, $progress, $uploadInfo->chunk_size)->await();
            }

            return new FileDetails([
                'file_id' => $uploadInfo->file_id,
                'access_hash' => $userId,
                'size' => $file->size,
                'name' => $file->name,
                'mime_type' => $file->mimeType,
            ]);
        });
    }

    public function download(string $url): Future
    {
        return async(function () use ($url): string {
            $response = $this->http->request(new Request($url));
            if ($response->getStatus() >= 400) {
                throw new AiobaleException(sprintf('Download failed with status %d.', $response->getStatus()));
            }
            return $response->getBody()->buffer();
        });
    }

    public function __call(string $name, array $arguments): Future
    {
        $class = MethodRegistry::resolve($name);
        if ($class === null) {
            throw new \BadMethodCallException(sprintf('Unknown Bale API method "%s".', $name));
        }

        if (count($arguments) === 1 && is_array($arguments[0])) {
            $arguments = $arguments[0];
        }

        if (array_is_list($arguments)) {
            $fieldNames = array_keys($class::schema());
            if (count($arguments) > count($fieldNames)) {
                throw new \ArgumentCountError(sprintf('Too many arguments for %s.', $class));
            }
            $arguments = array_combine(
                array_slice($fieldNames, 0, count($arguments)),
                $arguments,
            ) ?: [];
        }

        return $this->invoke(new $class($arguments));
    }

    private function sendHandshake(): void
    {
        $this->websocket?->sendBinary($this->codec->encode([
            '3' => ['1' => 1, '2' => 1],
        ]));
    }

    private function pingLoop(): void
    {
        while ($this->isRunning()) {
            delay(5);
            if (!$this->isRunning()) {
                return;
            }

            try {
                $this->sendPing();
            } catch (Throwable) {
                $this->running = false;
                $this->websocket?->close();
                return;
            }
        }
    }

    private function sendPing(): void
    {
        $id = 'ping_' . ++$this->pingId;
        $deferred = new DeferredFuture();
        $this->pending[$id] = ['deferred' => $deferred, 'returning' => null];
        try {
            $this->websocket?->sendBinary($this->codec->encode([
                '2' => ['1' => $this->pingId],
            ]));
            $deferred->getFuture()->await(new TimeoutCancellation($this->timeout));
        } finally {
            unset($this->pending[$id]);
        }
    }

    private function buildRequest(BaleMethod $method, int $requestId): string
    {
        return $this->codec->encode([
            '1' => [
                '1' => $method::service(),
                '2' => $method::methodName(),
                '3' => $method->modelDump(),
                '4' => $this->metadata(),
                '5' => $requestId,
            ],
        ]);
    }

    private function metadata(): array
    {
        $values = [
            'app_version' => '113466',
            'browser_type' => '1',
            'browser_version' => '138.0.0.0',
            'os_type' => '3',
            'session_id' => (string) $this->sessionId,
            'mt_app_version' => '113466',
            'mt_browser_type' => '1',
            'mt_browser_version' => '138.0.0.0',
            'mt_os_type' => '3',
            'mt_session_id' => (string) $this->sessionId,
        ];

        $entries = [];
        foreach ($values as $name => $value) {
            $entries[] = ['1' => $name, '2' => ['1' => $value]];
        }
        return ['1' => $entries];
    }

    private function metadataHeaders(): array
    {
        $headers = [];
        foreach ([
            'app_version' => '113466',
            'browser_type' => '1',
            'browser_version' => '138.0.0.0',
            'os_type' => '3',
            'session_id' => (string) $this->sessionId,
            'mt_app_version' => '113466',
            'mt_browser_type' => '1',
            'mt_browser_version' => '138.0.0.0',
            'mt_os_type' => '3',
            'mt_session_id' => (string) $this->sessionId,
        ] as $name => $value) {
            $headers[ucfirst($name)] = $value;
        }
        return $headers;
    }

    private function listen(): void
    {
        try {
            while ($this->running && $this->websocket !== null) {
                $message = $this->websocket->receive();
                if ($message === null) {
                    break;
                }
                if (!$message->isBinary()) {
                    $message->close();
                    continue;
                }
                $this->handleReceivedData($message->buffer());
            }
        } catch (Throwable $exception) {
            foreach ($this->pending as $request) {
                $request['deferred']->error($exception);
            }
        } finally {
            $this->running = false;
            $this->websocket = null;
            foreach ($this->pending as $request) {
                if (!$request['deferred']->isComplete()) {
                    $request['deferred']->error(new AiobaleException('WebSocket connection closed.'));
                }
            }
            $this->pending = [];
        }
    }

    private function handleReceivedData(string $data): void
    {
        $decoded = $this->codec->decode($data, \Aiobale\Types\Response::class);
        $response = \Aiobale\Types\Response::fromWire($decoded);

        if ($response->update !== null) {
            $this->dispatchUpdate($response->update->body);
            return;
        }

        if ($response->pong !== null) {
            $requestId = 'ping_' . $response->pong->value;
            $body = true;
        } elseif ($response->response !== null) {
            $requestId = $response->response->number;
            $body = $response->response;
        } else {
            return;
        }

        $request = $this->pending[$requestId] ?? null;
        if ($request !== null) {
            if ($request['returning'] !== null && $response->response !== null) {
                $decoded = $this->codec->decode(
                    $data,
                    \Aiobale\Types\Response::class,
                    $request['returning'],
                );
                $response = \Aiobale\Types\Response::fromWire($decoded);
                $body = $response->response;
            }
            $request['deferred']->complete($body);
        }
    }

    private function dispatchUpdate(?BaleObject $body): void
    {
        $update = $body?->body;
        if (!$update instanceof BaleObject) {
            return;
        }

        foreach ($update::schema() as $name => $_field) {
            $event = $update->{$name};
            if ($event !== null) {
                $event->as($this);
                $this->router->dispatch($name, $event, $this);
                return;
            }
        }
    }

    private function materializeResult(mixed $result, BaleMethod $method): mixed
    {
        $returning = $method::returning();
        if ($returning === null || !is_array($result)) {
            return $result;
        }

        if (
            $returning === \Aiobale\Types\Responses\MessageResponse::class
            && !array_key_exists('message', $result)
        ) {
            if (!$method instanceof SendMessage) {
                throw new AiobaleException('Cannot construct a message response without its SendMessage method data.');
            }
            if ($this->authenticatedUserId === null) {
                throw new AiobaleException('Set the authenticated user ID before constructing a sent-message response.');
            }

            $previous = [];
            foreach (($result[4] ?? []) as $entry) {
                if (!is_array($entry)) {
                    continue;
                }
                $extension = ExtData::fromWire($entry);
                $field = $extension->value?->number;
                if ($field !== null && $extension->name === 'previous_message_rid') {
                    $previous['message_id'] = $field;
                } elseif ($field !== null && $extension->name === 'previous_message_date') {
                    $previous['date'] = $field;
                }
            }

            $message = new Message([
                'chat' => $method->chat,
                'sender_id' => $this->authenticatedUserId,
                'date' => $result[2] ?? 0,
                'message_id' => $method->message_id,
                'content' => $method->content,
                'previous_message' => isset($previous['message_id'], $previous['date'])
                    ? new OtherMessage($previous)
                    : null,
            ]);
            $result['message'] = $message->as($this);
        }

        return $returning::fromWire($result)->as($this);
    }

    private function validateAuthentication(BaleMethod $method): Future
    {
        return async(function () use ($method): ValidateCodeResponse {
            $payload = $this->post($method)->await();
            if (!is_string($payload)) {
                throw new AiobaleException('Unexpected authentication response payload.');
            }

            $decoded = $this->codec->decode($payload, ValidateCodeResponse::class);
            $result = ValidateCodeResponse::fromWire($decoded)->as($this);
            $token = $result->jwt?->value;
            if (!is_string($token) || $token === '') {
                throw new AiobaleException('Authentication response did not contain a JWT token.');
            }

            $this->token = $token;
            $this->authenticatedUserId = $result->user?->id ?? $this->extractUserId($token);
            if ($this->sessionStore !== null) {
                $this->sessionStore->save($this->token, $this->authenticatedUserId);
            }

            return $result;
        });
    }

    private function extractUserId(string $token): ?int
    {
        $parts = explode('.', $token);
        if (count($parts) !== 3) {
            return null;
        }

        $payload = base64_decode(strtr($parts[1], '-_', '+/'), true);
        if ($payload === false) {
            return null;
        }
        $claims = json_decode($payload, true);
        if (!is_array($claims)) {
            return null;
        }

        $id = $claims['payload']['user_id']
            ?? $claims['payload']['id']
            ?? $claims['payload']['user']['id']
            ?? $claims['user_id']
            ?? null;
        return is_numeric($id) ? (int) $id : null;
    }

    private static function uuid(): string
    {
        $bytes = random_bytes(16);
        $bytes[6] = chr((ord($bytes[6]) & 0x0f) | 0x40);
        $bytes[8] = chr((ord($bytes[8]) & 0x3f) | 0x80);
        $hex = bin2hex($bytes);
        return substr($hex, 0, 8) . '-' . substr($hex, 8, 4) . '-' . substr($hex, 12, 4)
            . '-' . substr($hex, 16, 4) . '-' . substr($hex, 20);
    }

    private static function cleanGrpc(string $data): string
    {
        if (strlen($data) < 5) {
            throw new AiobaleException('Invalid gRPC-Web response: missing frame header.');
        }

        $length = unpack('Nlength', substr($data, 1, 4))['length'];
        if ($length > strlen($data) - 5) {
            throw new AiobaleException('Invalid gRPC-Web response: incomplete frame.');
        }

        return substr($data, 5, $length);
    }
}
