<?php

return [
    'logger'=>[
        'dir' => getcwd() . DIRECTORY_SEPARATOR . 'logs'
    ],
    'tmp' => [
        'dir' => getcwd() . DIRECTORY_SEPARATOR . 'tmp'
    ],
    'db' => [
        'client' => App\Client\Redis::class,
        'host' => 'localhost'
    ]
];