<?php

namespace Cogendar38\HealthCheckServer\Domain;

class Attribute
{
    public function __construct(
        private string $label,
        private string $value
    )
    {
    }

    public function getJson(): array
    {
        return [
            'label' => $this->label,
            'value' => $this->value
        ];
    }
}