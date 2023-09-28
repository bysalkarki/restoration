<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appsetting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
    public static function set($key,  $type,$value = null)
    {
        $setting = new self();
        $entry = $setting->where('key', $key)->where('group',$type)->first();
        if (!$entry) {
            return null;
        }
        $entry->value = $value;
        $entry->save();
    }
}
