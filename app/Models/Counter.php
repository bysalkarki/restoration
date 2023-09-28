<?php

namespace App\Models;

use App\Traits\PublishedTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;
    use PublishedTrait;

    protected $guarded = [];
    public const TYPE = ['progress', 'counter'];
}
