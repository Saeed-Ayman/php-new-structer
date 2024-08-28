<?php

namespace Core;

class DotEnv
{
    protected array $env;

    public function __construct($filepath)
    {
        $this->env = parse_ini_file($filepath);
    }

    public function get(string $key)
    {
        return $this->env[$key] ?? null;
    }
}