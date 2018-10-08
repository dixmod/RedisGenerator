<?php

global $config, $container;


$config = include dirname(__DIR__) . '/config/config.php';

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->useAutowiring(true);
$container = $containerBuilder->build();

/*$container->set(
    App\Repository\Youtube::class,
    \DI\create(\App\Repository\Youtube::class)->constructor(
        \DI\get(\App\Client\Client::class)
    )
);*/

/*$container->set(
    \App\Service\Channel\ConverterChannelFromApi::class,
    \DI\create(\App\Service\Channel\ConverterChannelFromApi::class)
);*/