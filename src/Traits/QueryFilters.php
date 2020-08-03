<?php

use Illuminate\Pipeline\Pipeline;

trait QueryFilters
{
    public function scopeFilters($query, $filters)
    {
        return app(Pipeline::class)
            ->send(static::query())
            ->through($filters)
            ->thenReturn();
    }
}