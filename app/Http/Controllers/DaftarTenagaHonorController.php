<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class DaftarTenagaHonorController extends Controller
{
    public function index(){
        $data['pegawai'] = Pegawai::all();
        return view('daftar-tenaga-honor.index', $data);
    }

    public function create(){
        return view('daftar-tenaga-honor.create');
    }
    public function show(Pegawai $pegawai){
        return view('daftar-tenaga-honor.show', [
            'pegawai' => $pegawai
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
        ]);

        $pegawai = new Pegawai();
        $pegawai->nik = request('nik');
        $pegawai->nama = request('nama');
        $pegawai->agama = request('agama');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->alamat = request('alamat');
        $pegawai->pendidikan = request('pendidikan');
        $pegawai->save();

        return redirect('daftar-tenaga-honor')->with('success','berhasil di tambahkan' );
    }

    public function destroy(Pegawai $pegawai){
        if ($pegawai->hasilSeleksi) {
            foreach ($pegawai->hasilSeleksi as $hasil) {
                $hasil->delete();
            }
        }

        if ($pegawai->ranking) {
            foreach ($pegawai->ranking as $rank) {
                $rank->delete();
            }
        }

        $pegawai->delete();
        return redirect('/daftar-tenaga-honor')->with('success','Data berhasil dihapus');
    }
}
