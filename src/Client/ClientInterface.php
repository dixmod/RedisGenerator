<?php

namespace App\Client;

interface ClientInterface
{
    /**
     * @param array $filters
     * @return array
     */
    public function findAll(array $filters = []): array;

    /**
     * @param $key
     * @return mixed
     */
    public function getById($key);

    /**
     * @param $key
     * @param $data
     * @return mixed
     */
    public function update($key, $data);

    /**
     * @param $data
     * @return bool
     */
    public function add($data): bool;
}