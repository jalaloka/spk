@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-7">
            <div class="card">
                <form action="{{ url('seleksi') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <h4 class="header-title">Seleksi Pegawai</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pegawai" class="control-label">Nama Pegawai</label>
                                    <select name="id_pegawai" id="pegawai" class="form-control @error('id_pegawai')
                                    is-invalid
                                @enderror">
                                        <option value="">Pilih Nama Pegawai</option>
                                        @foreach ($pegawai as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            @foreach ($kriteria as $k)
                            <input type="hidden" id="id_kriteria" class="form-control" name="kode_kriteria[]" value="{{ $k->kode }}"
                            readonly>
                                <div class="col-md-9">
                                    <label for="komponen1" class="control-label">{{ $k->nama }}</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="id_kompopen[]" class="form-control">
                                            <option value="">Pilih Kriteria</option>
                                            @foreach ($komponen as $kriteria)
                                                <option value="{{ $kriteria->nama }}">{{ $kriteria->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="float-right btn btn-primary" id="btnSimpan">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tambahkan kode JavaScript untuk menampilkan hasil pilihan ke dalam popup -->
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/jquery/jquery.min.js"></script>

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
    <!-- Buttons examples -->
    <script
        src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js">
    </script>
    <script
        src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js">
    </script>
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/jszip/jszip.min.js"></script>
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script
        src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js">
    </script>
    <script
        src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.js">
    </script>
    <script
        src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js">
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
