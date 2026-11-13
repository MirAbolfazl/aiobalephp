<?php

declare(strict_types=1);

namespace Aiobale\Dispatcher;

use Amp\Future;
use function Amp\async;

final class Router
{
    /** @var array<string, list<array{callback: callable, filters: list<callable>}>> */
    private array $handlers = [];

    public function on(string $event, callable $callback, callable ...$filters): self
    {
        $this->handlers[$event][] = ['callback' => $callback, 'filters' => $filters];
        return $this;
    }

    public function include(self $router): self
    {
        foreach ($router->handlers as $event => $handlers) {
            $this->handlers[$event] ??= [];
            array_push($this->handlers[$event], ...$handlers);
        }
        return $this;
    }

    public function dispatch(string $event, mixed ...$arguments): Future
    {
        return async(function () use ($event, $arguments): mixed {
            foreach ($this->handlers[$event] ?? [] as $handler) {
                $accepted = true;
                foreach ($handler['filters'] as $filter) {
                    $result = $filter(...$arguments);
                    if ($result instanceof Future) {
                        $result = $result->await();
                    }
                    if (!$result) {
                        $accepted = false;
                        break;
                    }
                }

                if (!$accepted) {
                    continue;
                }

                $result = ($handler['callback'])(...$arguments);
                return $result instanceof Future ? $result->await() : $result;
            }

            return null;
        });
    }

    /** @return array<string, list<array{callback: callable, filters: list<callable>}>> */
    public function handlers(): array
    {
        return $this->handlers;
    }
}
