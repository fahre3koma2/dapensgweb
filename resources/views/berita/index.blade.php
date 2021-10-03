@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('header')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Berita</li>
                </ol>
            </div>
            <h4 class="page-title">List Berita</h4>
        </div>
    </div>
</div>
@endsection

@section('contents')
@php
 $menu = 'dashboard';
@endphp

<div class="row">

<div class="col-lg-12 col-sm-12">
    <div class="card">
        <div class="card-body table-responsive">
            <a href="{{ url('/berita/create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah File</a>
            <h5 class="header-title">Data Berita</h5>
            <div class="">
                <table id="datatable2" class="table">
                    <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Isi/ Content Berita</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($berkas as $value)
                    <tr>
                        <td><img src="{{ url('berkasnya/berita/'.$value->file) }}" height="100px" width="100px"></td>
                        <td>{{$value->perihal}}</td>
                        <td>{!!$value->keterangan!!}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-danger delete" data-id="{{ $value->id }}" data-file="{{$value->id}}"><i class="fa fa-trash"></i> Hapus</button>
                                {{ Form::open(['url'=>route('berkas.destroy', [Crypt::encrypt($value->id)]), 'method'=>'delete', 'id' => $value->id, 'style' => 'display: none;']) }}
                                {{ csrf_field() }}
                                {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

</div><!--end row-->

@endsection

@section('js')
    <script src="{{ url('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ url('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ url('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ url('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ url('assets/pages/datatables.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable2').DataTable();
        } );

        $("body").on("click", ".delete", function (e) {
            e.preventDefault();
            var id = $(this).data('id');

            Swal.fire({
                title: "Apakah Anda Yakin?",
                text: "Anda akan menghapus file ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "No"
            }).then((result) => {
                if (result.value) {
                    Swal.close();
                    $("#"+id).submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire('Dibatalkan', 'Data batal dihapus', 'error');
                }
            });
        });
    </script>
@endsection
