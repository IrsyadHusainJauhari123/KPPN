@extends('components.admin')
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Tambah Kode Ba</h4>
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#basicModal">
                                <i class="fa fa-plus"></i>
                                | Tambah Data
                            </button>


                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('kodeba') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Data Bagian</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            {{-- <div class="form-group">
                                                    <label for="" class="control-label">Bagian</label>
                                                    <select name="id_divisi" class="form-control">
                                                        <option value="">--Pilih Bagian--</option>
                                                        @foreach ($list_divisi as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nama_divisi }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div> --}}
                                            <div class="form-group">
                                                <label for="kode_ba" class="control-label">Kode</label>
                                                <input type="text" name="kode_ba" class="form-control" id="kode_ba">
                                            </div>
                                            <div class="form-group">
                                                <label for="deskripsi" class="control-label">deskripsi</label>
                                                <input type="text" name="deskripsi" class="form-control" id="deskripsi">
                                            </div>
                                            {{-- <div class="form-group">
                                                            <label for="" class="control-label">Level</label>
                                                            <select name="level" class="form-control">
                                                                <option value="">--Pilih--</option>
                                                                <option value="Visi">Visi</option>
                                                                <option value="Misi">Misi</option>
                                                                <option value="Misi">Tupoksi</option>
                                                            </select>
                                                        </div> --}}

                                            {{-- <div class="form-group">
                                                        <label for="deskripsi" class="control-label">Password</label>
                                                        <input type="password" name="password" class="form-control"
                                                            id="password">
                                                    </div> --}}

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
                        <!--Modal Tambah -->
                        <!--modal Edit-->
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>

                                        <th>Kode BA</th>
                                        <th>Deskripsi</th>
                                        {{-- <th>Office</th> --}}
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>Kode BA</th>
                                        <th>Deskripsi</th>
                                        {{-- <th>Email</th> --}}
                                        {{-- <th>Office</th> --}}
                                        {{-- <th style="width: 10%">Action</th> --}}
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($list_kodeba as $kodeba)
                                        {{-- <tr>
                                                    <td>{{ $loop->iteration }}</td> --}}
                                        </tr>
                                        <td>{{ $kodeba->kode_ba }}</td>
                                        <td>{{ $kodeba->deskripsi }}</td>
                                        {{-- <td>{{ $kodeba->email }}</td> --}}

                                        <td>
                                            {{-- <div class="btn-group">

                                                    <button class="btn btn-warning" data-toggle="modal"
                                                        data-target="#edit{{ $kodeba->id }}">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    @include('components.utils.delete', [
                                                        'url' => url('kodeba', $kodeba->id),
                                                    ])
                                                </div> --}}

                                            <div class="form-button-action">
                                                <button type="button" data-toggle="modal"
                                                    data-target="#editModal{{ $kodeba->kode_ba }}"
                                                    class="btn btn-link btn-warning btn-lg">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                {{-- <a href="{{ url('kodeba', $kodeba->kodeba) }}" class="btn btn"
                                                            style="background: rgb(13, 186, 195)">
                                                            <i class="fa fa-info" style="color: black"></i>
                                                        </a> --}}

                                                @include('components.utils.delete', [
                                                    'url' => url('kodeba', $kodeba->kode_ba),
                                                ])


                                            </div>
                                        </td>
                                        </tr>
                                        @foreach ($list_kodeba as $kodeba)
                                            {{-- Modal Edit kodeba --}}
                                            <div class="modal fade" id="editModal{{ $kodeba->kode_ba }}" tabindex="-1"
                                                role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form action="{{ url('kodeba', $kodeba->kode_ba) }}" method="post"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('put')
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel">Edit
                                                                    kodeba</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Form Edit kodeba -->
                                                                {{-- <form id="editForm{{ $kodeba->id }}"> --}}
                                                                <div class="form-group">
                                                                    <label for="nama" class="control-label">Kode
                                                                        Ba</label>
                                                                    <input type="kode_ba" name="kode_ba"
                                                                        value="{{ $kodeba->kode_ba }}" class="form-control"
                                                                        id="kode_ba">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi" class="control-label">Kode
                                                                        Ba</label>
                                                                    <input type="deskripsi" name="deskripsi"
                                                                        value="{{ $kodeba->deskripsi }}"
                                                                        class="form-control" id="deskripsi">
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


{{-- <script>
    // JavaScript (jQuery) untuk mengambil ID
    $(document).ready(function() {
        $(".edit-button").click(function() {
            var dataTarget = $(this).data("target");
            var id = dataTarget.replace("#edit", "{{ $kodeba->id }}");

            console.log("ID edit:", id);

            // Lakukan sesuatu dengan ID ini, misalnya, kirimkan permintaan AJAX, dll.
        });
    });
</script> --}}
