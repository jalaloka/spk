<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subkriteria extends Model
{
    protected $KeyType = 'string';
    public  $incrementing = false;

    public static function boot()
    {
        parent::boot();
        static::creating(function ($item) {
            $item->id = (string)Str::orderedUuid();
        });
    }
    protected $table = 'subkriteria';
}
