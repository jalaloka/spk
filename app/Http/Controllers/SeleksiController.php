<?php

namespace App\Http\Controllers;

use App\Models\HasilSeleksi;
use App\Models\Kriteria;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class SeleksiController extends Controller
{
    
    public function index(){
        $pegawaiList = Pegawai::all();
        $kriterialist = Kriteria::all();
        return view('seleksi.index', compact('pegawaiList', 'kriterialist'));
    }

    public function store(Request $request){
        $hasil = new HasilSeleksi();
        $hasil->nama = $request->input('pegawai_id'); // Menggunakan 'pegawai_id' sesuai FormData
        $hasil->k1 = $request->input('kriteria_id'); // Menggunakan 'kriteria_id' sesuai FormData
        $hasil->save();
    
        return redirect('hasil_seleksi')->with('success', 'Berhasil ditambahkan');
    }
    
    public function index2(){
       
    }

}
