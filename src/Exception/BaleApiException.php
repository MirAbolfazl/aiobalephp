<?php

declare(strict_types=1);

namespace Aiobale\Exception;

class BaleApiException extends AiobaleException
{
    public function __construct(
        string $message,
        public readonly int $topic = -1,
        ?\Throwable $previous = null,
    ) {
        parent::__construct($message, $topic, $previous);
    }
}
