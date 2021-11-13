<?php

namespace App\Traits;

trait PublishedTrait
{

    public function scopePublished($query)
    {
        return $query->where('publishStatus', true);
    }
}
