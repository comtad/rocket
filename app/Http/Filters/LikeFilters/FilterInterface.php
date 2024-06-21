<?php

namespace App\Http\Filters\LikeFilters;

use Illuminate\Database\Eloquent\Builder;

interface FilterInterface
{
    public function applyFilter(Builder $builder);
}

