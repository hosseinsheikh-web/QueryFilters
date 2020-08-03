<?php

namespace HosseinSheikh\QueryFilters\Queries;

class MaxCount extends Filter
{
    protected function applyFilters($builder)
    {
        return $builder->take(request($this->filterName()));
    }
}
