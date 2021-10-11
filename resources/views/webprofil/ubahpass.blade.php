@extends('webprofil.main')

@section('title')
    Dapen SG - Manajemen
@endsection

@section('style')
        <style type="text/css">
            .my-active span{
                background-color: #5cb85c !important;
                color: white !important;
                border-color: #5cb85c !important;
            }
	    </style>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection

@section('header')
    <section class="page-title" style="background-image:url({{ url('webprofil/images/background/1.jpg')}})">
        <div class="auto-container">
			<h1>Manajemen</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{url('/')}}">home</a></li>
				<li>Manajemen</li>
			</ul>
        </div>
    </section>
@endsection

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <span class="name-rog">
                <div class="hr-line"></div> Ubah Password
                </span>
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                <form class="form-horizontal" action="{{ route('passstore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="section-how">
                <div class="reved">
                    <div class="arrow-road"></div>
                    <span class="name-form">Password Lama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    </span>
                    <input type="text" name="lama" id="name" placeholder="Password Lama" class="registration_short_field" />

                </div>
                </div>
                <div class="section-how">
                <div class="reved">
                    <div class="arrow-road"></div>
                    <span class="name-form">Password Baru &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    </span>
                    <input type="text" name="baru" id="name" placeholder="Password Baru" class="registration_short_field" />
                </div>
                </div>
                <div class="section-how">
                <div class="reved">
                    <div class="arrow-road"></div>
                    <span class="name-form">Konfirmasi Password Baru
                    </span>
                    <input type="text" name="konfirmasi" id="name" placeholder="Konfirmasi Password Baru" class="registration_short_field" />
                </div>
                </div>
                <div class="section-how">
                   <button type="submit" value="submit" class="generatel-btn"><h6>Submit</h6></button>
                </div>
                </form>
            </div>
        </div>
        <br/><br/><br/><br/><br/>
    </div>

@endsection
