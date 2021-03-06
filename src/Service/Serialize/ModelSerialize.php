<?php

namespace App\Service\Serialize;

use JsonSerializable;

abstract class ModelSerialize implements JsonSerializable
{
    use PropertyIterator {
        PropertyIterator::jsonSerialize as toArrayWithoutFields;
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    public function jsonSerialize(): array
    {
        $arrayOfProperties = $this->toArrayWithoutFields($this->getSkipProperty());
        $arrayOfProperties = array_merge(
            $arrayOfProperties,
            $this->toArray()
        );

        return $arrayOfProperties;
    }

    /**
     * @return array
     */
    public function getSkipProperty(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [];
    }
}