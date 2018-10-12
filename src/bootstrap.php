<?php

use App\Service\Config;
use App\Service\Container;

Container::set(
    Config::getOptions('db')['client'],
    \DI\create(Config::getOptions('db')['client'])->constructor(
        Config::getOptions('db')['client']
    )
);