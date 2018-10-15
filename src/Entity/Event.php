<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\RepositoryInterface;
use App\Service\Config;
use App\Service\Container;
use App\Service\Serialize\ModelSerialize;

class Event extends ModelSerialize implements EventInterface
{
    /** @var RepositoryInterface */
    private static $repository;

    /** @var int */
    private $priority = 0;

    /** @var array */
    private $conditions = [];

    /** @var array */
    private $event;

    /** @var int */
    private $id;

    /**
     * Event constructor.
     * @param array $conditions
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function __construct(array $conditions = [])
    {
        if (!self::$repository) {
            self::$repository = Container::get(
                Config::getOptions('db')['client']
            );
        }

        $this->conditions = $conditions;
    }

    public function save(): void
    {
        self::$repository->save($this->toArray());
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @return array
     */
    public function getEvent(): array
    {
        return $this->event;
    }

    /**
     * @param array $event
     */
    public function setEvent(array $event): void
    {
        $this->event = $event;
    }

    /**
     * @return array
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }

    /**
     * @param array $conditions
     */
    public function setConditions(array $conditions): void
    {
        $this->conditions = $conditions;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'conditions' => $this->conditions,
        ];
    }
}