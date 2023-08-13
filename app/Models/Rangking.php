<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rangking extends Model
{
    use HasFactory;

    protected $table = 'rangking';

    protected $fillable = [
        'id_pegawai',
        'nilai_komponen',
        'nilai',
    ];



    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

}
