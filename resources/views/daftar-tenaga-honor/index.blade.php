@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="header-title">Data Pergawai</h4>
                        <a href="{{ url('daftar-tenaga-honor/create') }}" class="float-right btn btn-dark"> <i
                            class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        @include('layout.utils.notif')
                        <div class="row">
                        </div>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Pendidikan</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($pegawai as $item)
                                    <tr>
                                        <td width="1">{{ $no++ }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('daftar-tenaga-honor/' . $item->id ) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye fa-sm" style="width: 15px"></i></a>
                                                <form action="{{ url('daftar-tenaga-honor/' . $item->id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash fa-sm" style="width: 15px;"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->pendidikan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div></div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


@push('style')
    <!-- DataTables -->
    <link
        href="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link
        href="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
    <!-- Required datatable js -->
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js">
    </script>
    <script
        src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js">
    </script>
    <!-- Responsive examples -->
    <script
        src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js">
    </script>
    <script
        src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>

    <!-- Datatable init js -->
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/js/pages/datatables.init.js"></script>
@endpush
