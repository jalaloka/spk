<?php

namespace App\Http\Controllers;

use App\Models\Kriteriacomponent;


class KomponenController extends Controller
{
    public function index()
    {
        $data['kriteria'] = Kriteriacomponent::all();
        return view('komponen.index', $data);
    }

    // public function store()
    // {
    //     $komponen = new Komponen();
    //     $komponen->status = request('status');
    //     $komponen->nama = request('nama');
    //     $komponen->save();
    //     return redirect('komponen')->with('success', 'berhasil di tambahkan');
    // }
}
