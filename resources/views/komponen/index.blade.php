@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title">Data Komponen 1</h4>

                            <table id="" class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Komponen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    <tr>
                                        <td width="1">{{ $no++ }}</td>
                                        <td>K1</td>
                                        <td>Prestasi Kerja</td>
                                    </tr>
                                    <tr>
                                        <td width="1">{{ $no++ }}</td>
                                        <td>K2</td>
                                        <td>Kedisiplinan</td>
                                    </tr>
                                    <tr>
                                        <td width="1">{{ $no++ }}</td>
                                        <td>K3</td>
                                        <td>Kehadiran</td>
                                    </tr>
                                    <tr>
                                        <td width="1">{{ $no++ }}</td>
                                        <td>K4</td>
                                        <td>Tanggung Jawab</td>
                                    </tr>
                                    <tr>
                                        <td width="1">{{ $no++ }}</td>
                                        <td>K5</td>
                                        <td>Kejujuran</td>
                                    </tr>
                                    <tr>
                                        <td width="1">{{ $no++ }}</td>
                                        <td>K6</td>
                                        <td>Kerjasama</td>
                                    </tr>
                                    <!-- Tambahkan baris-baris data lainnya sesuai kebutuhan -->
                                </tbody>
                            </table>
                        </div>

                    </div></div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title">Data Kriteria</h4>

                            <table class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Komponen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($kriteria as $item)
                                        <tr>
                                            <td width="1">{{ $no++ }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->nama }}</td>
                                        </tr>
                                    @endforeach
                                    <!-- Tambahkan baris-baris data lainnya sesuai kebutuhan -->
                                </tbody>
                            </table>
                        </div>

                    </div></div>
            </div>
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
