<?php

declare(strict_types=1);

namespace JuniorFontenele\LaravelContracts\Data;

interface ArrayableData
{
    /**
     * Create an ArrayableData instance from an array.
     *
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): static;

    /**
     * Convert the instance to an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array;
}
