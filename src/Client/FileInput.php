<?php

declare(strict_types=1);

namespace Aiobale\Client;

use InvalidArgumentException;
use RuntimeException;

class FileInput
{
    private function __construct(
        private readonly string $source,
        private readonly bool $isPath,
        public readonly string $name,
        public readonly int $size,
        public readonly string $mimeType,
    ) {
    }

    public static function fromPath(string $path, ?string $mimeType = null): self
    {
        if (!is_file($path) || !is_readable($path)) {
            throw new InvalidArgumentException(sprintf('File is not readable: %s', $path));
        }

        $size = filesize($path);
        if ($size === false) {
            throw new RuntimeException(sprintf('Could not determine file size: %s', $path));
        }

        $name = basename($path);
        $detectedMime = $mimeType ?: (mime_content_type($path) ?: 'application/octet-stream');
        return new self($path, true, $name, $size, $detectedMime);
    }

    public static function fromBytes(
        string $bytes,
        ?string $name = null,
        ?string $mimeType = null,
    ): self {
        $mimeType ??= 'application/octet-stream';
        $name ??= 'upload.' . (str_contains($mimeType, '/') ? substr(strrchr($mimeType, '/'), 1) : 'dat');
        return new self($bytes, false, $name, strlen($bytes), $mimeType);
    }

    public function contents(): string
    {
        if (!$this->isPath) {
            return $this->source;
        }

        $contents = file_get_contents($this->source);
        if ($contents === false) {
            throw new RuntimeException(sprintf('Could not read file: %s', $this->source));
        }
        return $contents;
    }

    public function crc32(): int
    {
        $context = hash_init('crc32b');
        foreach ($this->chunks(1024 * 1024) as $chunk) {
            hash_update($context, $chunk);
        }

        return (int) hexdec(hash_final($context));
    }

    /**
     * @return iterable<string>
     */
    public function chunks(int $chunkSize = 4096, ?callable $progress = null): iterable
    {
        if ($chunkSize <= 0) {
            throw new InvalidArgumentException('Chunk size must be greater than zero.');
        }

        $sent = 0;
        if (!$this->isPath) {
            $length = strlen($this->source);
            while ($sent < $length) {
                $chunk = substr($this->source, $sent, $chunkSize);
                $sent += strlen($chunk);
                if ($progress !== null) {
                    $progress($sent, $this->size);
                }
                yield $chunk;
            }
            if ($length === 0) {
                if ($progress !== null) {
                    $progress(0, $this->size);
                }
            }
            return;
        }

        $stream = fopen($this->source, 'rb');
        if ($stream === false) {
            throw new RuntimeException(sprintf('Could not open file: %s', $this->source));
        }

        try {
            while (!feof($stream)) {
                $chunk = fread($stream, $chunkSize);
                if ($chunk === false) {
                    throw new RuntimeException(sprintf('Could not read file: %s', $this->source));
                }
                if ($chunk === '') {
                    break;
                }

                $sent += strlen($chunk);
                if ($progress !== null) {
                    $progress($sent, $this->size);
                }
                yield $chunk;
            }
            if ($this->size === 0) {
                if ($progress !== null) {
                    $progress(0, $this->size);
                }
            }
        } finally {
            fclose($stream);
        }
    }
}
