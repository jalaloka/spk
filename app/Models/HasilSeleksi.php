<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilSeleksi extends Model
{
    use HasFactory;
    protected $table = 'hasil';

    protected $fillable = [
        'id_pegawai',
        'kode_kriteria',
        'nilai_komponen',
    ];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
    public function kriteria(){
        return $this->belongsTo(Kriteria::class,'kode_kriteria', 'kode');
    }

}
