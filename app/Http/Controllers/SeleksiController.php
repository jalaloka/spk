<?php

namespace App\Http\Controllers;

use App\Models\HasilSeleksi;
use App\Models\Kriteria;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class SeleksiController extends Controller
{

    public function index()
    {
        $pegawaiList = Pegawai::all();
        $kriterialist = Kriteria::all();
        return view('seleksi.index', compact('pegawaiList', 'kriterialist'));
    }

    public function store(Request $request)
    {
        $hasil = new HasilSeleksi();
        $hasil->id_pegawai = $request->input('pegawai_id'); // Menggunakan 'pegawai_id' sesuai FormData
        $hasil->k1 = $request->input('kriteria_id1'); // Menggunakan 'kriteria_id1' sesuai FormData
        $hasil->k2 = $request->input('kriteria_id2'); // Menggunakan 'kriteria_id2' sesuai FormData
        $hasil->k3 = $request->input('kriteria_id3'); // Menggunakan 'kriteria_id3' sesuai FormData
        $hasil->k4 = $request->input('kriteria_id4'); // Menggunakan 'kriteria_id4' sesuai FormData
        $hasil->k5 = $request->input('kriteria_id5'); // Menggunakan 'kriteria_id5' sesuai FormData
        $hasil->k6 = $request->input('kriteria_id6'); // Menggunakan 'kriteria_id6' sesuai FormData
        $hasil->save();

        return redirect('hasil_seleksi')->with('success', 'Berhasil ditambahkan');
    }


    public function index2()
    {
        $hasilSeleksi = HasilSeleksi::all();
        return view('hasil-seleksi.index', compact('hasilSeleksi'));
    }
}
