<?php

namespace HosseinSheikh\QueryFilters\Queries;

class Slug extends Filter
{

    protected function applyFilters($builder)
    {
        $filterName = request($this->filterName());

        return $builder->where('slug', 'like', "%{$filterName}%");
    }
}
