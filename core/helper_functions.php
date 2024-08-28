<?php

use Core\App;
use Core\DotEnv;

function base_path(): string
{
    return dirname(__DIR__);
}

function v(string $name, array $vars = []): string
{
    extract($vars);
    return require base_path().'/resources/views/'.str_replace('.', '/', $name).'.view.php';
}

function view(string $name): string
{
    ob_start();
    v($name);
    $main = ob_get_clean();

    return v('layouts.default', compact('main'));
}

function env(string $key, string $default = null)
{
    /** @var $env DotEnv */
    $env = App::inject(DotEnv::class);

    return $env->get($key) ?? $default;
}