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
        $pegawaiList = Pegawai::all();
        $kriterialist = Kriteriacomponent::all();
       
        return view('seleksi.index', compact('pegawaiList', 'kriterialist'));
    }

    public function store(Request $request){

        // Ambil request input;
        $id_pegawai = $request->pegawai;
        $k1 = $request->k1;
        $k2 = $request->k2;
        $k3 = $request->k3;
        $k4 = $request->k4;
        $k5 = $request->k5;
        $k6 = $request->k6;



        $nilaiBaik = 0;
        $nilaiCukup = 0;
        $nilaiKurang = 0;
        $nilaiSangatBaik = 0;

        //  k1
        if ($k1 == 'Baik') {
            $nilaiBaik =  $nilaiBaik + 1;
        }else if($k1 == 'Cukup'){
            $nilaiCukup =  $nilaiCukup + 1;
        }else if($k1 == 'Kurang'){
            $nilaiKurang =  $nilaiKurang + 1;
        }else if($k1 == 'Sangat Baik'){
            $nilaiSangatBaik =  $nilaiSangatBaik + 1;
        }

        // k2
        if ($k2 == 'Baik') {
            $nilaiBaik =  $nilaiBaik + 1;
        }else if($k2 == 'Cukup'){
            $nilaiCukup =  $nilaiCukup + 1;
        }else if($k2 == 'Kurang'){
            $nilaiKurang =  $nilaiKurang + 1;
        }else if($k2 == 'Sangat Baik'){
            $nilaiSangatBaik =  $nilaiSangatBaik + 1;
        }

        // k3
        if($k3 == 'Sangat Baik'){
            $nilaiSangatBaik =  $nilaiSangatBaik + 1;
        }else if ($k3 == 'Baik') {
            $nilaiBaik =  $nilaiBaik + 1;
        }else if($k3 == 'Cukup'){
            $nilaiCukup =  $nilaiCukup + 1;
        }else if($k3 == 'Kurang'){
            $nilaiKurang =  $nilaiKurang + 1;
        }

        // k4
        if($k4 == 'Sangat Baik'){
            $nilaiSangatBaik =  $nilaiSangatBaik + 1;
        }else if ($k4 == 'Baik') {
            $nilaiBaik =  $nilaiBaik + 1;
        }else if($k4 == 'Cukup'){
            $nilaiCukup =  $nilaiCukup + 1;
        }else if($k4 == 'Kurang'){
            $nilaiKurang =  $nilaiKurang + 1;
        }


        // k5
        if($k5 == 'Sangat Baik'){
            $nilaiSangatBaik =  $nilaiSangatBaik + 1;
        }else if ($k5 == 'Baik') {
            $nilaiBaik =  $nilaiBaik + 1;
        }else if($k5 == 'Cukup'){
            $nilaiCukup =  $nilaiCukup + 1;
        }else if($k5 == 'Kurang'){
            $nilaiKurang =  $nilaiKurang + 1;
        }


        if($k6 == 'Sangat Baik'){
            $nilaiSangatBaik =  $nilaiSangatBaik + 1;
        }else if ($k6 == 'Baik') {
            $nilaiBaik =  $nilaiBaik + 1;
        }else if($k6 == 'Cukup'){
            $nilaiCukup =  $nilaiCukup + 1;
        }else if($k6 == 'Kurang'){
            $nilaiKurang =  $nilaiKurang + 1;
        }



        $ka1 = Kriteria::sum('bobot');


        $proKurang =  $nilaiKurang / 6 * $ka1;
        $proCukup =  $nilaiCukup / 6 * $ka1;
        $proBaik =  $nilaiBaik / 6 * $ka1;
        $proSangatBaik =  $nilaiSangatBaik / 6 * $ka1;

        return response()->json([
            'Input' => $request->all(),
            'Kurang Baik' => round($proKurang,2),
            'Cukup Baik' => round($proCukup,2),
            'Baik' => round($proBaik,2),
            'Sangat Baik' => round($proSangatBaik,2),
        ]);



        

        // $rangking = new Rangking;
        // $rangking->id_pegawai =  $id_pegawai;
        // $rangking->k1 =  $k1;
        // $rangking->k2 =  $k2;
        // $rangking->k3 =  $k3;
        // $rangking->k4 =  $k4;
        // $rangking->k5 =  $k5;
        
 



        // $hasil = new HasilSeleksi();


        // $hasil->id_pegawai = $request->input('pegawai');
        // $hasil->k1 = $request->input('k1');
        // $hasil->k2 = $request->input('k2');
        // $hasil->k3 = $request->input('k3');
        // $hasil->k4 = $request->input('k4');
        // $hasil->k5 = $request->input('k5');
        // $hasil->k6 = $request->input('k6');
        // $simpan = $hasil->save();

        // if ($simpan == 1) {
        //     return redirect('hasil_seleksi')->with('success', 'Berhasil ditambahkan');
        // }

        // return back()->with('danger', 'Terjadi kesalahan saat menambakan data !');
    }


    public function index2()
    {
        $data['headerTable'] = Kriteria::all();
        $data['hasilSeleksi'] = HasilSeleksi::with('pegawai')->get();

        return view('hasil-seleksi.index', $data);
    }

    function hitungHasil($pegawai){

        
    }
}
