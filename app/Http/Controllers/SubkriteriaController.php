<?php

namespace App\Http\Controllers;
use App\Models\Subkriteria;
use Illuminate\Http\Request;

class SubkriteriaController extends Controller
{
    public function index(){
        $data['subkriteria'] = Subkriteria::all();
        return view('subkriteria.index', $data);
    }
    public function create(){
        return view('subkriteria.create');
    }
    public function show(){
        return view('subkriteria.show');
    }
    // public function store(){
    //     $subkriteria = new Subkriteria();
    //     $subkriteria->kode = request('kode');
    //     $subkriteria->nama = request('nama');
    //     $subkriteria->bobot = request('bobot');
    //     $subkriteria->save();
    // }

}


