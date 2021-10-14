@extends('layouts.master')

@section('title')
    Berita - DAPEN SG
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
            <h4 class="page-title">Input Data File</h4>
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
                <h4 class="mt-0 header-title">Tambah Data File</h4>
                <div class="general-label">
                    <form class="form-horizontal" action="{{ route('gambar.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="slide" required>
                                    <option>-Pilih Kategori-</option>
                                    <option value="slide1">Slide 1</option>
                                    <option value="slide2">Slide 2</option>
                                    <option value="slide3">Slide 3</option>
                                    <option value="slide4">Slide 4</option>
                                    <option value="slide5">Slide 5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2" for="example-input1-group2">File</label>
                            <div class="col-md-6">
                                <h4 class="mt-0 header-title">File Upload 1</h4>
                                <input type="file" name="berkas" id="input-file-now" required />
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

    <script src="{{ url('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ url('assets/pages/summernote.init.js') }}"></script>

@endsection
