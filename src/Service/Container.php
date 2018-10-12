<?php

namespace App\Service;

use \DI\ContainerBuilder;

class Container
{
    /** @var Container */
    private static $_instance;

    /** @var \DI\Container */
    private static $_container;

    /**
     * @param $key
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public static function get($key)
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_container->get($key);
    }

    /**
     * @param $key
     * @param $value
     */
    public static function set($key, $value): void
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }

        self::$_container->set($key, $value);
    }

    /**
     * Config constructor.
     */
    private function __construct()
    {
        if (!isset(self::$_container)) {
            $containerBuilder = new ContainerBuilder();
            $containerBuilder->useAutowiring(true);
            self::$_container = $containerBuilder->build();
        }
    }
}