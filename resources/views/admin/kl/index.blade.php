@extends('components.admin')
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Tambah Kode Kementerian</h4>
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#basicModal">
                                <i class="fa fa-plus"></i>
                                | Tambah Data
                            </button>


                        </div>
                    </div>

                    {{-- <form action="kl" name="form_import" class="form-line" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-grup has-feedback">
                            <label class="form-label"> Upload File</label>
                            <input type="file" name="file" class="form-control input-sm">
                        </div> --}}


                    <div class="card-body">
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('kl/store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Data Bagian</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="col-md-3">
                                                <label for="file">Masukan Foto </label>
                                                <input type="file" name="file" id="file">

                                            </div>




                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->

                        <!--Modal Tambah -->
                        <!--modal Edit-->
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>

                                        <th>Kode Ba</th>
                                        <th>Kode Akun</th>
                                        <th>Kode Kab</th>
                                        <th>Blokir</th>
                                        <th>Kontrak</th>
                                        <th>Realisasi</th>
                                        <th>Bulan</th>
                                        {{-- <th>Office</th> --}}
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>Kode Ba</th>
                                        <th>Kode Akun</th>
                                        <th>Kode Kab</th>
                                        <th>Blokir</th>
                                        <th>Kontrak</th>
                                        <th>Realisasi</th>
                                        <th>Bulan</th>
                                        <th style="width: 10%">Action</th>
                                        {{-- <th>Email</th> --}}
                                        {{-- <th>Office</th> --}}
                                        {{-- <th style="width: 10%">Action</th> --}}
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($list_kl as $kl)
                                        {{-- <tr>
                                                    <td>{{ $loop->iteration }}</td> --}}
                                        </tr>
                                        <td>{{ $kl->kode_ba }}</td>
                                        <td>{{ $kl->kode_akun }}</td>
                                        <td>{{ $kl->kode_kab }}</td>
                                        <td>{{ $kl->blokir }}</td>
                                        <td>{{ $kl->kontrak }}</td>
                                        <td>{{ $kl->realisasi }}</td>
                                        <td>{{ $kl->bulan }}</td>
                                        {{-- <td>{{ $kl->email }}</td> --}}

                                        <td>
                                            {{-- <div class="btn-group">

                                                    <button class="btn btn-warning" data-toggle="modal"
                                                        data-target="#edit{{ $kl->id }}">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    @include('components.utils.delete', [
                                                        'url' => url('kl', $kl->id),
                                                    ])
                                                </div> --}}

                                            <div class="form-button-action">
                                                <button type="button" data-toggle="modal"
                                                    data-target="#editModal{{ $kl->id }}"
                                                    class="btn btn-link btn-warning btn-lg">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                {{-- <a href="{{ url('kl', $kl->kl) }}" class="btn btn"
                                                            style="background: rgb(13, 186, 195)">
                                                            <i class="fa fa-info" style="color: black"></i>
                                                        </a> --}}

                                                @include('components.utils.delete', [
                                                    'url' => url('kl', $kl->id),
                                                ])


                                            </div>
                                        </td>
                                        </tr>
                                        @foreach ($list_kl as $kl)
                                            {{-- Modal Edit kl --}}
                                            <div class="modal fade" id="editModal{{ $kl->id }}" tabindex="5"
                                                role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form action="{{ url('kl', $kl->id) }}" method="post"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('put')
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel">Edit
                                                                    Data Kl</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="form-group">
                                                                    <label for="kode_akun" class="control-label">Kode
                                                                        Akun</label>
                                                                    <input type="kode_akun" name="kode_akun"
                                                                        value="{{ $kl->kode_akun }}" class="form-control"
                                                                        id="kode_akun">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kode_kab" class="control-label">Kode
                                                                        Kab</label>
                                                                    <input type="kode_kab" name="kode_kab"
                                                                        value="{{ $kl->kode_kab }}" class="form-control"
                                                                        id="kode_kab">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="blokir" class="control-label">Blokir
                                                                    </label>
                                                                    <input type="blokir" name="blokir"
                                                                        value="{{ $kl->blokir }}" class="form-control"
                                                                        id="blokir">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kontrak" class="control-label">Kontrak
                                                                    </label>
                                                                    <input type="kontrak" name="kontrak"
                                                                        value="{{ $kl->kontrak }}" class="form-control"
                                                                        id="kontrak">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="realisasi" class="control-label">Realisasi
                                                                    </label>
                                                                    <input type="realisasi" name="realisasi"
                                                                        value="{{ $kl->realisasi }}" class="form-control"
                                                                        id="realisasi">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="bulan" class="control-label">Bulan
                                                                    </label>
                                                                    <input type="bulan" name="bulan"
                                                                        value="{{ $kl->bulan }}" class="form-control"
                                                                        id="bulan">
                                                                </div>
                                                                {{-- <div class="form-group">
                                                                            <label for=""
                                                                                class="control-">Password</label>
                                                                            <input type="password" class="form-control"
                                                                                name="password">
                                                                        </div> --}}
                                                                <!-- Tambahkan input dan field yang sesuai untuk mengedit data pengguna -->
                                                                {{-- </form> --}}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});

            $('#multi-filter-select').DataTable({
                "pageLength": 5,
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-control"><option value=""></option></select>'
                            )
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d +
                                '</option>')
                        });
                    });
                }
            });

            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });

            var action =
                '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $('#addRowButton').click(function() {
                $('#add-row').dataTable().fnAddData([
                    $("#adddeskripsi").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action
                ]);
                $('#addRowModal').modal('hide');

            });
        });
    </script>
@endsection
