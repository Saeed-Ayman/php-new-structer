<?php

namespace Core;

class App
{
    protected static array $containers = [];

    public static function inject(string $key)
    {
        /** @var $container Container */
        $container = self::$containers[$key];

        return $container->inject();
    }

    public static function provide(string $key, callable $callable, array $params = []): void
    {
        $container = Container::getContainer();
        $container->provide($callable, $params);

        self::$containers[$key] = $container;
    }

    public static function getContainer(string $key)
    {
        return self::$containers[$key];
    }
}