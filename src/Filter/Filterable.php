<?php

declare(strict_types=1);

namespace JuniorFontenele\LaravelContracts\Filter;

use Illuminate\Contracts\Database\Query\Builder;

interface Filterable
{
    public function apply(Builder $query): Builder;
}
