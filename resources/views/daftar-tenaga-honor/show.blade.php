@extends('layout.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">
            Detail Data Tenaga Honorer
        </div>
    </div>
    <div class="card-body">
        <dl>
            <dt>Nik</dt>
            <dd>{{ $pegawai->nik }}</dd>
            <dt>Nama</dt>
            <dd>{{ $pegawai->nama }}</dd>
            <dt>Agama</dt>
            <dd>{{ $pegawai->agama }}</dd>
            <dt>Jenis Kelamin</dt>
            <dd>{{ $pegawai->jenis_kelamin }}</dd>
            <dt>Tempat Lahir</dt>
            <dd>{{ $pegawai->tempat_lahir }}</dd>
            <dt>Tanggal Lahir</dt>
            <dd>{{ $pegawai->tanggal_lahir }}</dd>
            <dt>Alamat</dt>
            <dd>{{ $pegawai->alamat }}</dd>
            <dt>Pendidikan</dt>
            <dd>{{ $pegawai->pendidikan }}</dd>
        </dl>
    </div>
</div>
@endsection
