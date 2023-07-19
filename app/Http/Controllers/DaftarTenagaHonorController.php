<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarTenagaHonorController extends Controller
{
    public function index(){
        return view('daftar-tenaga-honor.index');
    }
}
