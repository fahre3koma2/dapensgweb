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
                    <li class="breadcrumb-item active">Inventasi</li>
                </ol>
            </div>
            <h4 class="page-title">Home</h4>
        </div>
    </div>
</div>
@endsection

@section('contents')
@php
 $menu = 'dashboard';
@endphp

<div class="row">

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Inventasi DAPENSG</h4>
                <p class="text-muted mb-4 font-14">Bisa Disi Gambar</p>


            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Informasi</h4>
                <p class="text-muted mb-4 font-14">Bisa Disi informasi</p>


            </div>
        </div>
    </div> <!-- end col -->

</div><!--end row-->

@endsection

@section('js')
    <script type="text/javascript" src="{{ url('theme/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ url('theme/js/pcoded.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('theme/js/vertical-layout.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ url('theme/js/script.min.js') }}"></script>
@endsection
