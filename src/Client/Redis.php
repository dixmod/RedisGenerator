<?php

namespace App\Client;

class Redis implements ClientInterface
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
     * @param $key
     * @param array $data
     * @return bool|mixed
     */
    public function update($key, $data)
    {
        $this->client->set($key, $data);
    }

    /**
     * @param array $data
     * @return bool|mixed
     */
    public function add($data): bool
    {
        $key = $this->keyGen();
        $this->client->update($key, $data);

        return $key;
    }

    private function keyGen()
    {
        return $this->db.':';
    }
}