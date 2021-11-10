<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected const TYPE = [
        'HOME'=>'home', 'ABOUT'=>'about', 'MISSION'=>'mission', 'CONTACT'=>'contact', 'EVENT'=>'event', 'BLOG'=>'blog', 'GALLERY'=>'gallery', 'VIDEO'=>'video'
    ];
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'slug',
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

    public static function getType(): array
    {
        return self::TYPE;
    }
}
