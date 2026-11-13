<?php

declare(strict_types=1);

namespace Aiobale\Client;

use Aiobale\Exception\AiobaleException;
use JsonException;
use RuntimeException;

final class SessionStore
{
    public function __construct(private readonly string $path)
    {
        if ($path === '') {
            throw new AiobaleException('Session file path cannot be empty.');
        }
    }

    /**
     * @return array{token: string, user_id: ?int}|null
     */
    public function load(): ?array
    {
        if (!is_file($this->path)) {
            return null;
        }

        $contents = file_get_contents($this->path);
        if ($contents === false) {
            throw new RuntimeException(sprintf('Could not read session file: %s', $this->path));
        }

        try {
            $data = json_decode($contents, true, flags: JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            throw new AiobaleException('Session file contains invalid JSON.', 0, $exception);
        }

        if (!is_array($data) || !is_string($data['token'] ?? null) || $data['token'] === '') {
            throw new AiobaleException('Session file does not contain a valid access token.');
        }

        $userId = $data['user_id'] ?? null;
        return [
            'token' => $data['token'],
            'user_id' => is_numeric($userId) ? (int) $userId : null,
        ];
    }

    public function save(string $token, ?int $userId): void
    {
        if ($token === '') {
            throw new AiobaleException('Cannot save an empty access token.');
        }

        $directory = dirname($this->path);
        if (!is_dir($directory) && !mkdir($directory, 0700, true) && !is_dir($directory)) {
            throw new RuntimeException(sprintf('Could not create session directory: %s', $directory));
        }
        @chmod($directory, 0700);

        try {
            $contents = json_encode([
                'token' => $token,
                'user_id' => $userId,
            ], JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES);
        } catch (JsonException $exception) {
            throw new AiobaleException('Could not encode session data.', 0, $exception);
        }

        $temporary = tempnam($directory, '.bale-session-');
        if ($temporary === false) {
            throw new RuntimeException('Could not create a temporary session file.');
        }

        try {
            if (file_put_contents($temporary, $contents, LOCK_EX) === false) {
                throw new RuntimeException('Could not write temporary session data.');
            }
            if (!chmod($temporary, 0600)) {
                throw new RuntimeException('Could not restrict permissions on the session file.');
            }
            if (!rename($temporary, $this->path)) {
                throw new RuntimeException(sprintf('Could not replace session file: %s', $this->path));
            }
            if (!chmod($this->path, 0600)) {
                throw new RuntimeException('Could not restrict permissions on the session file.');
            }
        } finally {
            if (is_file($temporary)) {
                unlink($temporary);
            }
        }
    }

    public function delete(): void
    {
        if (is_file($this->path) && !unlink($this->path)) {
            throw new RuntimeException(sprintf('Could not delete session file: %s', $this->path));
        }
    }

    public function path(): string
    {
        return $this->path;
    }
}
