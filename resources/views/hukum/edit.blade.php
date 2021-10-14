@extends('layouts.master')

@section('title')
   Hukum Online - DAPEN SG
@endsection

@section('header')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data File</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Data File</h4>
        </div>
    </div>
</div>
@endsection

@section('contents')
@php
 $menu = 'create';
@endphp

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Edit Data File</h4>
                <div class="general-label">
                    <form class="form-horizontal" action="{{ route('hukum.update', ['hukum' => encrypt($berkas->id)]) }}" method="POST" enctype="multipart/form-data">
                         @if ($edit)
                    {{ method_field('PUT') }}
                @endif
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">No Dokumen</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="no_dokumen" id="example-text-input" value="{{$berkas->no_dokumen}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Perihal / Judul</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="perihal" id="example-text-input" value="{{$berkas->perihal}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Deksripsi</label>
                            <div class="col-sm-8">
                                <textarea required class="form-control" name="keterangan" rows="3">{{$berkas->keterangan}}</textarea>
                            </div>
                        </div>
                        <input class="form-control" type="hidden" name="kategori" value="hukumonline" id="example-text-input" >
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="jenis" required>
                                    <option>-Pilih Kategori-</option>
                                    @php $kategori =
                                        array("SK Pengurus" => "SK Pengurus", "Instruksi Pengurus DPSG" => "Instruksi Pengurus DPSG", "Perundang - undangan" => "Perundang - undangan");
                                    @endphp
                                    @foreach($kategori as $kat)
                                    <option value="{{$kat}}" {{ $kat == $berkas->jenis ? 'selected' : '' }}>{{$kat}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="example-input1-group2">File</label>
                            <div class="col-md-6">
                                <h4 class="mt-0 header-title">File Upload 1</h4>
                                <input type="file" name="berkas" id="input-file-now" />
                                @if ($errors->has('berkas')) <span class="text-danger">{{ $errors->first('berkas') }}</span> @endif
                            </div>
                            {{--  <div class="col-md-4">
                                <button type="button" class="btn btn-outline-info waves-effect waves-light">Upload</button>
                            </div>  --}}
                        </div>

                        <div class="form-group mb-0 pull-right">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Simpan
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('js')

    <script src="{{ url('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ url('assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ url('assets/pages/upload.init.js') }}"></script>

@endsection
