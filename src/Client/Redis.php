<?php

namespace App\Client;

use App\Service\Config;

class Redis
{
    protected $db;

    protected $client;

    /**
     * AbstractRepository constructor.
     */
    public function __construct()
    {
        try {
            $this->client = new \Redis();
        } catch (\Exception $e) {
            die($e->getMessage());
        }

    }

    /**
     * @param array $filters
     * @return array
     */
    public function findAll(array $filters = []): array
    {

    }

    /**
     * @param $key
     * @return void
     */
    public function getById($key)
    {
        return $this->client->get($key);
    }

    /**
     * @param array $data
     * @return bool|mixed
     */
    public function update($data)
    {

    }

    /**
     * @param $key
     * @param array $data
     * @return bool|mixed
     */
    public function add($key, $data): bool
    {
        return $this->client->set($key, $data);
    }
}