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
                                    <select name="k1" id="kriteria" class="form-control">
                                        <option value="">Pilih Kriteria</option>
                                        @foreach ($kriterialist as $kriteria)
                                            <option value="{{ $kriteria->nama }}">{{ $kriteria->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="komponen2" class="control-label">Komponen 2</label>
                                    <input type="text" id="komponen2" class="form-control" value="Kedisiplinan" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="kriteria2" class="control-label">Kriteria</label>
                                    <select name="k2" id="kriteria2" class="form-control">
                                        <option value="">Pilih Kriteria</option>
                                        @foreach ($kriterialist as $kriteria)
                                            <option value="{{ $kriteria->nama }}">{{ $kriteria->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Komponen 3 -->
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="komponen3" class="control-label">Komponen 3</label>
                                    <input type="text" id="komponen3" class="form-control" value="Kedisiplinan" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="kriteria3" class="control-label">Kriteria</label>
                                    <select name="k3" id="kriteria3" class="form-control">
                                        <option value="">Pilih Kriteria</option>
                                        @foreach ($kriterialist as $kriteria)
                                            <option value="{{ $kriteria->nama }}">{{ $kriteria->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Komponen 4 -->
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="komponen4" class="control-label">Komponen 4</label>
                                    <input type="text" id="komponen4" class="form-control" value="Kualitas Kerja"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="kriteria4" class="control-label">Kriteria</label>
                                    <select name="k4" id="kriteria4" class="form-control">
                                        <option value="">Pilih Kriteria</option>
                                        @foreach ($kriterialist as $kriteria)
                                            <option value="{{ $kriteria->nama }}">{{ $kriteria->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Komponen 5 -->
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="komponen5" class="control-label">Komponen 5</label>
                                    <input type="text" id="komponen5" class="form-control" value="Inovasi" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="kriteria5" class="control-label">Kriteria</label>
                                    <select name="k5" id="kriteria5" class="form-control">
                                        <option value="">Pilih Kriteria</option>
                                        @foreach ($kriterialist as $kriteria)
                                            <option value="{{ $kriteria->nama }}">{{ $kriteria->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Komponen 6 -->
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="komponen6" class="control-label">Komponen 6</label>
                                    <input type="text" id="komponen6" class="form-control" value="Kerjasama"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="kriteria6" class="control-label">Kriteria</label>
                                    <select name="k6" id="kriteria6" class="form-control">
                                        <option value="">Pilih Kriteria</option>
                                        @foreach ($kriterialist as $kriteria)
                                            <option value="{{ $kriteria->nama }}">{{ $kriteria->nama }}</option>
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

                // Mengambil data dari semua komponen dan kriteria
                var selectedKriteriaId1 = document.getElementById("kriteria").value;
                var selectedKriteriaId2 = document.getElementById("kriteria2").value;
                var selectedKriteriaId3 = document.getElementById("kriteria3").value;
                var selectedKriteriaId4 = document.getElementById("kriteria4").value;
                var selectedKriteriaId5 = document.getElementById("kriteria5").value;
                var selectedKriteriaId6 = document.getElementById("kriteria6").value;
                // Lanjutkan untuk komponen 4, 5, dan 6

                var selectedPegawai = document.getElementById("pegawai").options[document.getElementById(
                    "pegawai").selectedIndex].text;
                var selectedKriteria1 = document.getElementById("kriteria").options[document.getElementById(
                    "kriteria").selectedIndex].text;
                var selectedKriteria2 = document.getElementById("kriteria2").options[document
                    .getElementById(
                        "kriteria2").selectedIndex].text;
                var selectedKriteria3 = document.getElementById("kriteria3").options[document
                    .getElementById(
                        "kriteria3").selectedIndex].text;
                var selectedKriteria4 = document.getElementById("kriteria4").options[document
                    .getElementById("kriteria4").selectedIndex].text;
                var selectedKriteria5 = document.getElementById("kriteria5").options[document
                    .getElementById("kriteria5").selectedIndex].text;
                var selectedKriteria6 = document.getElementById("kriteria6").options[document
                    .getElementById("kriteria6").selectedIndex].text;
                // Lanjutkan untuk komponen 4, 5, dan 6

                var popupMessage = "Anda telah memilih:\n\nNama Pegawai: " + selectedPegawai +
                    "\nKriteria K1: " + selectedKriteria1 +
                    "\nKriteria K2: " + selectedKriteria2 +
                    "\nKriteria K3: " + selectedKriteria3 +
                    "\nKriteria K4: " + selectedKriteria4 +
                    "\nKriteria K5: " + selectedKriteria5 +
                    "\nKriteria K6: " + selectedKriteria6;

                var confirmation = confirm(popupMessage +
                    "\n\nApakah Anda yakin ingin melanjutkan proses penyimpanan?");
                if (confirmation) {
                    // Simpan data ke database dengan menggunakan AJAX
                    var formData = new FormData();
                    formData.append("pegawai_id", selectedPegawaiId);
                    formData.append("kriteria_id1", selectedKriteriaId1);
                    formData.append("kriteria_id2", selectedKriteriaId2);
                    formData.append("kriteria_id3", selectedKriteriaId3);
                    formData.append("kriteria_id4", selectedKriteriaId4);
                    formData.append("kriteria_id5", selectedKriteriaId5);
                    formData.append("kriteria_id6", selectedKriteriaId6);

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
                }

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
