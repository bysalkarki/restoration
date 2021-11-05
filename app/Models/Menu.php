<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'position',
        'metaTitle',
        'metaDescription',
        'metaKeyphrase',
        'parallexImage',
        'featuredImage',
        'publishStatus',
        'published_at',
        'type',
        'externalUrl',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'position' => 'integer',
        'publishStatus' => 'boolean',
        'published_at' => 'timestamp',
    ];
}
