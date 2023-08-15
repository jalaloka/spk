<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Pegawai extends Model
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

    protected $table = 'pegawai';

    public function hasilSeleksi()
    {
        return $this->hasMany(hasilSeleksi::class, 'id_pegawai');
    }

    public function ranking()
    {
        return $this->hasMany(Rangking::class, 'id_pegawai');
    }
}
