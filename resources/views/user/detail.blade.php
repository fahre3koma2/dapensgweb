@extends('layouts.master')

@section('title')
    User
@endsection

@section('header')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">User</a></li>
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div>
            <h4 class="page-title">Detail User</h4>
        </div>
    </div>
</div>
@endsection

@section('contents')
@php
 $menu = 'dashboard';
@endphp

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                @if ($edit)
                    <h4 class="mt-0 header-title">Form Edit User</h4>
                @else
                    <h4 class="mt-0 header-title">Form Add User</h4>
                @endif


                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">No Pegawai</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="no_pegawai" name="no_pegawai" value="{{ $edit ? $user->biodata->no_pegawai : old('no_pegawai') }}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="name" name="name" value="{{ $edit ? $user->name : old('name') }}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" value="{{ $edit ? $user->email : old('email') }}" disabled>
                        @if($errors->has('email'))
                            <label id="login-error" class="text-danger">{{ $errors->first('email') }}</label>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="nohp" name="nohp" value="{{ $edit ? $user->biodata->nohp : old('nohp') }}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $edit ? $user->biodata->jabatan : old('jabatan') }}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Unit</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="unit" required disabled>
                        @foreach ($unit as $id => $nama)
                            <option value="{{$id}}" {{ $id == $user->biodata->unit ? 'selected' : '' }}>{{$nama}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group mb-0">
                    <div>
                        <a href="{{ route('user.edit', ['user' => encrypt($user->id)]) }}" class="btn btn-warning waves-effect waves-light">Edit</a>
                        <a href="{{ url('/user') }}" class="btn btn-secondary waves-effect m-l-5">Kembali</a>
                        <button class="btn btn-sm btn-info float-right direset" data-id="{{ $user->id }}" data-file="direset_{{$user->id}}"><i class="fa fa-lock"></i> Reset Password</button>
                            {{ Form::open(['url'=>route('resetpass', [Crypt::encrypt($user->id)]), 'method'=> 'post', 'id' => 'direset_'.$user->id]) }}
                            {{ csrf_field() }}
                            {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection

@section('js')
    <script src="{{ url('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $("body").on("click", ".direset", function (e) {
            e.preventDefault();
            var id = $(this).data('id');

            Swal.fire({
                title: "Apakah Anda Yakin?",
                text: "Reset User Ini ?!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "No"
            }).then((result) => {
                if (result.value) {
                    Swal.close();
                    $("#direset_"+id).submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire('Direset', 'User Berhasil Di Reset', 'error');
                }
            });
        });
    </script>
@endsection
