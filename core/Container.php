<?php

namespace Core;

class Container
{
    private static ?Container $container = null;
    private mixed $instance;

    private function __construct()
    {
    }

    public static function getContainer(): Container
    {
        if (self::$container === null) {
            self::$container = new self();
        }

        return self::$container;
    }

    public function provide(callable $callable, array $params): void
    {
        $this->instance = $callable(... $params);
    }

    public function inject(): mixed
    {
        return $this->instance;
    }
}