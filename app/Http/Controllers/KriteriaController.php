<?php

namespace App\Http\Controllers;
use App\Models\Kriteria;
use Illuminate\Http\Request;
class KriteriaController extends Controller
{
    public function index(){
        $data['kriteria'] = Kriteria::all();
        return view('kriteria.index', $data);
    }
    public function create(){
        return view('kriteria.create');
    }
    public function show(){
        return view('kriteria.show');
    }
    public function store(){
        $kriteria = new Kriteria();
        $kriteria->kode = request('kode');
        $kriteria->nama = request('nama');
        $kriteria->bobot = request('bobot');
        $kriteria->save();

        return redirect('kriteria');
    }
}
