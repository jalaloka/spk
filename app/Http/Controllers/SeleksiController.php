<?php

namespace App\Http\Controllers;

use App\Models\HasilSeleksi;
use App\Models\Kriteriacomponent;
use App\Models\Kriteria;
use App\Models\Pegawai;
use App\Models\Rangking;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SeleksiController extends Controller
{

    public function index()
    {
        $data['pegawai'] = Pegawai::all();
        $data['kriteria'] = Kriteria::all();
        $data['komponen'] = Kriteriacomponent::all();

        return view('seleksi.index', $data);
    }

    public function store(Request $request){
        $request->validate([
            'id_pegawai' => 'required',


        ]);

        $id_pegawai = $request->id_pegawai;
        $kodeKriteria = $request->kode_kriteria;
        $kodeKomponen = $request->id_kompopen;


        for ($i=0; $i < count($kodeKriteria); $i++) {
            $kriteria[$i] = $kodeKriteria[$i];

        }
        for ($i=0; $i < count($kodeKomponen); $i++) {
            $Kom[$i] = $kodeKomponen[$i];
        }



        $nilaiBaik = 0;
        $nilaiCukup = 0;
        $nilaiKurang = 0;
        $nilaiSangatBaik = 0;

        // //  k1
        if ($Kom[0] == 'Baik') {
            $nilaiBaik =  $nilaiBaik + 1;
        }else if($Kom[0] == 'Cukup'){
            $nilaiCukup =  $nilaiCukup + 1;
        }else if($Kom[0] == 'Kurang'){
            $nilaiKurang =  $nilaiKurang + 1;
        }else if($Kom[0] == 'Sangat Baik'){
            $nilaiSangatBaik =  $nilaiSangatBaik + 1;
        }
        // k2
        if ($Kom[1] == 'Baik') {
            $nilaiBaik =  $nilaiBaik + 1;
        }else if($Kom[1] == 'Cukup'){
            $nilaiCukup =  $nilaiCukup + 1;
        }else if($Kom[1] == 'Kurang'){
            $nilaiKurang =  $nilaiKurang + 1;
        }else if($Kom[1] == 'Sangat Baik'){
            $nilaiSangatBaik =  $nilaiSangatBaik + 1;
        }

        // k3
        if($Kom[2] == 'Sangat Baik'){
            $nilaiSangatBaik =  $nilaiSangatBaik + 1;
        }else if ($Kom[2] == 'Baik') {
            $nilaiBaik =  $nilaiBaik + 1;
        }else if($Kom[2] == 'Cukup'){
            $nilaiCukup =  $nilaiCukup + 1;
        }else if($Kom[2] == 'Kurang'){
            $nilaiKurang =  $nilaiKurang + 1;
        }

        // k4
        if($Kom[3] == 'Sangat Baik'){
            $nilaiSangatBaik =  $nilaiSangatBaik + 1;
        }else if ($Kom[3] == 'Baik') {
            $nilaiBaik =  $nilaiBaik + 1;
        }else if($Kom[3] == 'Cukup'){
            $nilaiCukup =  $nilaiCukup + 1;
        }else if($Kom[3] == 'Kurang'){
            $nilaiKurang =  $nilaiKurang + 1;
        }

        // k5
        if($Kom[4] == 'Sangat Baik'){
            $nilaiSangatBaik =  $nilaiSangatBaik + 1;
        }else if ($Kom[4] == 'Baik') {
            $nilaiBaik =  $nilaiBaik + 1;
        }else if($Kom[4] == 'Cukup'){
            $nilaiCukup =  $nilaiCukup + 1;
        }else if($Kom[4] == 'Kurang'){
            $nilaiKurang =  $nilaiKurang + 1;
        }


        if($Kom[5] == 'Sangat Baik'){
            $nilaiSangatBaik =  $nilaiSangatBaik + 1;
        }else if ($Kom[5] == 'Baik') {
            $nilaiBaik =  $nilaiBaik + 1;
        }else if($Kom[5] == 'Cukup'){
            $nilaiCukup =  $nilaiCukup + 1;
        }else if($Kom[5] == 'Kurang'){
            $nilaiKurang =  $nilaiKurang + 1;
        }

        $ka1 = Kriteria::sum('bobot');


        $proKurang =  $nilaiKurang / 6 * $ka1;
        $proCukup =  $nilaiCukup / 6 * $ka1;
        $proBaik =  $nilaiBaik / 6 * $ka1;
        $proSangatBaik =  $nilaiSangatBaik / 6 * $ka1;

        $data = [
            'Input' => $request->all(),
            'Kurang Baik' => round($proKurang,2),
            'Cukup Baik' => round($proCukup,2),
            'Baik' => round($proBaik,2),
            'Sangat Baik' => round($proSangatBaik,2),
        ];


        $hasilKodeKriteria = $data["Input"]["kode_kriteria"];
        $hasilKodeKomponen = $data["Input"]["id_kompopen"];






        // Simpan data penilaian kriteria dan komponen
        foreach ($hasilKodeKriteria as $key => $kode) {
            $simpanHasil = HasilSeleksi::create([
                'id_pegawai' => $id_pegawai,
                'kode_kriteria' => $kode,
                'nilai_komponen' =>  $hasilKodeKomponen[$key],
            ]);
        }

        // Komponent
        $rank = new Rangking;
        $rank->id_pegawai = $id_pegawai;
        $rank->kurang =  round($proKurang,2);
        $rank->cukup =  round($proCukup,2);
        $rank->baik =  round($proBaik,2);
        $rank->sangat =  round($proSangatBaik,2);
        $simpanRank = $rank->save();


        return redirect('hasil_seleksi')->with('success', 'Berhasil ditambahkan');


    }


    public function index2()
    {
        $data['headerTable'] = Kriteria::all();
        $data['hasilSeleksi'] = Rangking::latest()->get();

        $penilaians = Rangking::latest()->get();
        $maxScore = 100;
    // Hitung perankingan
    $penilaians->each(function ($penilaian) {

        $ranking = ($penilaian->kurang * 1) + ($penilaian->cukup * 2) + ($penilaian->baik * 3) + ($penilaian->sangat * 4);
        $percentage = ($ranking / 100) * 100;
        $penilaian->percentage = $percentage;
    });


    $data['rankingNilai'] = $penilaians->sortByDesc('percentage');

        return view('hasil-seleksi.index', $data);
    }

    function detail($pegawai){
        $data = HasilSeleksi::where('id_pegawai', $pegawai)->get();

        return response()->json([
            'code' => 200,
            'status' => "OK",
            'data' => $data,
        ]);

    }
}
