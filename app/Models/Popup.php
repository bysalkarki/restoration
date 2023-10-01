<?php

namespace App\Models;

use App\Traits\PublishedTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    use HasFactory, PublishedTrait;

    protected $guarded = [];
}
