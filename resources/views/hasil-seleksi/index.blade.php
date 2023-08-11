@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-beteween">

                    </div>
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>nama</th>
                                @foreach ($headerTable as $header)
                                    <th>{{ $header->nama }}</th>
                                @endforeach
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
                                    <td>{{ $hasil->k1 }}</td>
                                    <td>{{ $hasil->k2 }}</td>
                                    <td>{{ $hasil->k3 }}</td>
                                    <td>{{ $hasil->k4 }}</td>
                                    <td>{{ $hasil->k5 }}</td>
                                    <td>{{ $hasil->k6 }}</td>
                                    <td>
                                        <a href="#nilai{{ $hasil->id }}" class="btn btn-success" data-toggle="modal">NILAI</a>
                                    </td>

                                    <!-- Tambahkan k4, k5, dan seterusnya -->
                                </tr>

                                <!-- Modal -->
                            <div class="modal fade" id="nilai{{ $hasil->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    ...
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
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
@endsection
    <script src="{{ url('Apaxy_v1.1.0/Admin/horizontal/dist') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ url('Datatable') }}/assets/libs/jquery/jquery.min.js"></script>
 

