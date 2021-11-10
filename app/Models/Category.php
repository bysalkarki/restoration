<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected const TYPE = [
        'BLOG' => 'blog',
        'GALLERY' => 'gallery',
        'NOTICE' => 'notice',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'publishStatus',
        'type',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'publishStatus' => 'boolean',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function blogs()
    {
        return $this->belongsToMany(\App\Models\Blog::class);
    }
    public function galleries()
    {
        return $this->belongsToMany(\App\Models\Gallery::class);
    }
    public function notices()
    {
        return $this->belongsToMany(\App\Models\Blog::class);
    }

    public function getType() : array
    {
        return Self::TYPE;
    }
}
