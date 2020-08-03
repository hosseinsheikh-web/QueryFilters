<?php

namespace HosseinSheikh\QueryFilters\Queries;

class Sort extends Filter
{
    private $sortField = 'name';

    protected function applyFilters($builder)
    {
        return $builder->orderBy($this->fieldName(), request($this->filterName()));
    }

    private function fieldName()
    {
        return request('sort_field') ?? $this->sortField;
    }
}
