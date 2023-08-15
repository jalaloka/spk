@extends('layout.app')

@section('content')
<style>
    .listheader,
    .listbody {
        display: flex;
        align-items: center;
        justify-content: space-between
    }
    .span-header{
        display: block;
        padding: 0;
        margin: 12px 0;
        font-size: 16px
    }
</style>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-beteween">
                        <a href="#rangking" data-toggle="modal" class="btn btn-success">RANKING</a>
                    </div>
                </div>
                <div class="card-body">
                    {{-- <table id="dataTable" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pegawai</th>
                                <th>Kurang</th>
                                <th>Cukup</th>
                                <th>Baik</th>
                                <th>Sangat Baik</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($hasilSeleksi as $hasil)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $hasil->pegawai->nama }}</td>
                                    <td>{{ $hasil->kurang }}</td>
                                    <td>{{ $hasil->baik }}</td>
                                    <td>{{ $hasil->cukup }}</td>
                                    <td>{{ $hasil->sangat }}</td>

                                    <td>
                                        <a href="#modalNilai{{ $hasil->pegawai->id }}" id="{{ $hasil->pegawai->id }}" class="btn btn-warning"
                                            data-toggle="modal">LIHAT</a>
                                    </td>

                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="modalNilai{{ $hasil->pegawai->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">DETAIL DATA</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" >
                                                <div class="listheader">
                                                    <span class="span-header">KRITERIA</span>
                                                    <span class="span-header">KOMPONEN</span>
                                                </div>
                                                <div class="dataListBody"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table> --}}
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kurang</th>
                                    <th>Cukup</th>
                                    <th>Baik</th>
                                    <th>Sangat Baik</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($hasilSeleksi as $hasil)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $hasil->pegawai->nama }}</td>
                                    <td>{{ $hasil->kurang }}</td>
                                    <td>{{ $hasil->baik }}</td>
                                    <td>{{ $hasil->cukup }}</td>
                                    <td>{{ $hasil->sangat }}</td>

                                    <td>
                                        <a href="#modalNilai{{ $hasil->pegawai->id }}" id="{{ $hasil->pegawai->id }}" class="btn btn-warning"
                                            data-toggle="modal">LIHAT</a>
                                    </td>

                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="modalNilai{{ $hasil->pegawai->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">DETAIL DATA</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" >
                                                <div class="listheader">
                                                    <span class="span-header">KRITERIA</span>
                                                    <span class="span-header">KOMPONEN</span>
                                                </div>
                                                <div class="dataListBody"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>


      <!-- Modal Rangking -->
      <div class="modal fade" id="rangking" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">RANKING</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Ranking</th>
                                <th>Pegawai</th>
                                <td>Nilai</td>
                                <td>Status Kelulusan</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rankingNilai as $item)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $item->pegawai->nama }}</td>
                                <td>{{ $item->percentage }}</td>
                                <td>
                                    @if ($item->percentage >= 200)
                                        <span class="badge badge-success">LULUS</span>
                                    @else
                                    <span class="badge badge-danger ">TIDAK LULUS</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
<script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/jquery/jquery.min.js"></script>
<script src="{{ url('Datatable') }}/assets/libs/jquery/jquery.min.js"></script>

<script>

    $(document).ready(function() {

        $(".btn").click(function() {

            var buttonId = $(this).attr("id");
            // $(`#modalNilai${buttonId}`).modal('show');

            $.ajax({
                url: `{{ url('seleksi/detail/${buttonId}') }}`,
                type: "GET",
                dataType: "json", // The expected data type of the response
                success: function(data) {
                    var nilaiAwal = ``;
                    var isiData = data.data;

                    for (var listItem of isiData) {

                        nilaiAwal += `
                        <div class="listbody">
                            <span class="list-body d-block">${listItem.kode_kriteria}</span>
                            <span class="list-body d-block">${listItem.nilai_komponen}</span>
                        </div>

                        `
                    }
                    $('.dataListBody').html(nilaiAwal);
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                    console.log("Status:", status);
                    console.log("Response:", xhr.responseText); // Log the response for further inspection
                }
            });



        });
    })
</script>

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
