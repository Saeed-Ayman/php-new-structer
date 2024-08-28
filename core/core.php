<?php

use Core\App;
use Core\DotEnv;

App::provide(DotEnv::class, fn() => new DotEnv(base_path() . '/.env'));