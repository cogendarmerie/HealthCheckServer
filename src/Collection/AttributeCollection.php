<?php

namespace Cogendar38\HealthCheckServer\Collection;

use Cogendar38\HealthCheckServer\Domain\Attribute;

class AttributeCollection
{
    private array $attributes = [];

    public function add(Attribute $attribute): void
    {
        $this->attributes[] = $attribute;
    }

    public function getAll(): array
    {
        return $this->attributes;
    }

    public function getJson(): array
    {
        return array_map(function (Attribute $attribute) {
            return $attribute->getJson();
        }, $this->attributes);
    }
}