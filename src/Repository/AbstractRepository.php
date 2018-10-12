<?php

namespace App\Repository;

use App\Client\Client;
use App\Service\Config;
use MongoCollection;
use MongoDB;
use MongoDB\Driver\BulkWrite;
use MongoDB\Driver\Cursor;
use MongoDB\Driver\Exception\Exception;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Query;
use stdClass;

abstract class AbstractRepository implements RepositoryInterface
{
    protected $db;

    protected $client;

    protected $collection;


    /**
     * @param array $filters
     * @return array
     */
    public function findAll(array $filters = []): array
    {

    }

    /**
     * @param int $id
     * @return void
     */
    public function getById($id)
    {

    }

    /**
     * @param array $data
     * @return bool|mixed
     */
    public function save($data)
    {

    }
}