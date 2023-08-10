<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilSeleksi extends Model
{
    use HasFactory;
    protected $table = 'hasil';
    
    public function pegawai()
{
    return $this->belongsTo(Pegawai::class, 'id_pegawai');
}
}
