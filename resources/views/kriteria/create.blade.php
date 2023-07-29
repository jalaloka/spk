@extends('layout.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">
            Tambah Data Kriteria Tenaga Honorer
        </div>
    </div>
    <div class="card-body">
        <form action="{{ url ('kriteria') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Code</label>
                    <input type="text" name="kode" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Nama Kriteria</label>
                    <input type="text" name="nama" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Bobot</label>
                    <input type="text" name="bobot" class="form-control">
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="control-label">Agama</label>
                    <input type="text" name="agama" class="form-control">
                </div>
            </div> --}}
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
