<?php

namespace HosseinSheikh\QueryFilters\Queries;

class Name extends Filter
{
    protected function applyFilters($builder)
    {
        $filterName = request($this->filterName());

        return $builder->where('name', 'like', "%{$filterName}%");
    }
}
