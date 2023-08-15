@extends('layout.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">
            Tambah Data Tenaga Honorer
        </div>
    </div>
    <div class="card-body">
        <form action="{{ url ('daftar-tenaga-honor') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Nik</label>
                    <input type="text" name="nik" class="form-control @error('nik')
                        is-invalid
                    @enderror">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama')
                        is-invalid
                    @enderror">
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Agama</label>
                    <input type="text" name="agama" class="form-control">
                </div>
            </div> --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Agama</label>
                    <select class="form-control" aria-label="Default select example" name="agama">
                        <option selected>Open this select menu</option>
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Khonghucu">Khonghucu</option>
                    </select>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Jenis Kelamin</label>
                    <select class="form-control" aria-label="Default select example" name="jenis_kelamin">
                        <option selected>Open this select menu</option>
                            <option value="Islam">Laki-laki</option>
                            <option value="Protestan">Perempuan</option>
                    </select>
                </div>
            </div> --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Jenis Kelamin</label>
                    <input type="enum" name="jenis_kelamin" class="form-control @error('jenis_kelamin')
                    is-invalid
                @enderror">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir')
                    is-invalid
                @enderror">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir')
                    is-invalid
                @enderror">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control @error('alamat')
                    is-invalid
                @enderror">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Pendidikan</label>
                    <input type="text" name="pendidikan" class="form-control @error('pendidikan')
                    is-invalid
                @enderror">
                </div>
            </div>
        </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="float-right btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>

@endsection
