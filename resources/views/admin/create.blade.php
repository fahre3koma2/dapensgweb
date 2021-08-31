@extends('layouts.master')

@section('title')
    Akutansi - DAPEN SG
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
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" value="Judul" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Deksripsi</label>
                            <div class="col-sm-8">
                                <textarea required class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama File</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" value="Nama File" id="example-text-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-4">
                                <select class="custom-select">
                                    <option selected>-Pilih-</option>
                                    <option value="1">Akutansi & Keuangan</option>
                                    <option value="2">Inventasi</option>
                                    <option value="3">Kepesertaan</option>
                                    <option value="1">Kearsipan</option>
                                    <option value="2">Tata Kelola</option>
                                    <option value="3">Hukum Online</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2" for="example-input1-group2">File</label>
                            <div class="col-md-6">
                                <h4 class="mt-0 header-title">File Upload 1</h4>
                                <input type="file" id="input-file-now" />
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-outline-info waves-effect waves-light">Upload</button>
                            </div>
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
