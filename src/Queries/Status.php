<?php

namespace HosseinSheikh\QueryFilters\Queries;

class Status extends Filter
{
    protected function applyFilters($builder)
    {
        return $builder->where('status', request($this->filterName()));
    }
}
