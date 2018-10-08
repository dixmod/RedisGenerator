<?php

namespace App\Services\Collection;

class Collection
{
    private $items = [];

    /**
     * OrderItemCollection constructor.
     * @param ParamsDto[] $items
     */
    public function __construct(array $items)
    {
        $position = 1;
        $this->items = array_map(
            function (Dto $dto) use (&$position) {
                $dto->position = $position++;
                return new Video($dto);
            },
            $items
        );
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->iterate(
            function (OrderItem $item) {
                return $item->toArray();
            }
        );
    }

    /**
     * @param callable $callback
     * @return array
     */
    public function iterate(callable $callback)
    {
        return array_map($callback, $this->items);
    }

    /**
     * @param callable $callback
     * @return array
     */
    public function filter(callable $callback)
    {
        return array_filter($this->items, $callback);
    }
}