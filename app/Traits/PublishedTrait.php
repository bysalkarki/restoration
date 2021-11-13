<?php

namespace App\Trait;

trait PublishedTrait
{

    public function scopePublished($query)
    {
        return $query->where('publishStatus', true);
    }
}
