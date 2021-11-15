<?php

namespace App\Models;

use App\Traits\PublishedTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory, PublishedTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'publishStatus',
        'name',
        'username',
        'position',
        'email',
        'facebook',
        'contact',
        'twitter',
        'instagram',
        'designation',
        'description',
        'linkedin',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'position' => 'integer',
    ];
}
