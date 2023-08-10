@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-7">
            <div class="card">
                <form action="{{ url('seleksi') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <h4 class="header-title">Sleksi Pegawai</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pegawai" class="control-label">Nama Pegawai</label>
                                    <select name="pegawai" id="pegawai" class="form-control">
                                        <option value="">Pilih Nama Pegawai</option>
                                        @foreach ($pegawaiList as $pegawai)
                                            <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="komponen1" class="control-label">Komponen 1</label>
                                    <input type="text" id="komponen1" class="form-control" value="Prestasi Kerja"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="kriteria" class="control-label">Kriteria</label>
                                    <select name="kriteria" id="kriteria" class="form-control">
                                        <option value="">Pilih Kriteria</option>
                                        @foreach ($kriterialist as $kriteria)
                                            <option value="{{ $kriteria->id }}">{{ $kriteria->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("btnSimpan").addEventListener("click", function(event) {
                event.preventDefault();
    
                var selectedPegawaiId = document.getElementById("pegawai").value;
                var selectedKriteriaId = document.getElementById("kriteria").value;
    
                var selectedPegawai = document.getElementById("pegawai").options[document.getElementById(
                    "pegawai").selectedIndex].text;
                var selectedKriteria = document.getElementById("kriteria").options[document.getElementById(
                    "kriteria").selectedIndex].text;
    
                var popupMessage = "Anda telah memilih:\n\nNama Pegawai: " + selectedPegawai +
                    "\nKriteria K1: " + selectedKriteria;
                alert(popupMessage);
    
                // Simpan data ke database dengan menggunakan AJAX
                var formData = new FormData();
                formData.append("pegawai_id", selectedPegawaiId);
                formData.append("kriteria_id", selectedKriteriaId);
    
                fetch("{{ route('seleksi') }}", {
                        method: "POST",
                        body: formData,
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .catch(error => {
                        // Handle errors
                        console.error(error);
                    });
    
                // Pengalihan ke halaman hasil_seleksi
                window.location.href = "{{ route('hasil_seleksi') }}";
            });
        });
    </script>
    
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
