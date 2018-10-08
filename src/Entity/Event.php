<?php

namespace App\Entity\Event;

class Event implements EventInterface
{
    /** @var int */
    private $priority;

    /** @var array */
    private $conditions = [];

    /** @var array */
    private $event;

    public function __construct()
    {

    }

    public function save(): void
    {

    }
}