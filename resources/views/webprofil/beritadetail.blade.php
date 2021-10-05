@extends('webprofil.main')

@section('title')
    Dapen SG - Manajemen
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
                    <span class="name-rog"><div class="hr-line"></div><h5>Newsfeed</h5></span>
                    <div class="promo-donate">
                        <div class="col-md-1 dv lv">
                            <span class="ic-info"></span>
                        </div>
                        <div class="col-md-10 lv">
                            <h2 class="th-name">{{$berita->perihal}}</h2>
                            <center>
                            <img class="img-ste1" width="60%" src="{{ url('berkasnya/berita/'.$berita->file)}}">
                            </center>
                            <p class="desctop">
                                {!! $berita->keterangan !!}
                            <br><br>
                        </div>
                    </div>
                    <div class="promo-donate">
                            <div class="col-md-1 dv lv">
                                <span class="ic-g"></span>
                            </div>
                            <div class="col-md-10 lv">
                                <h3 class="th-name">Berita Lain</h3>
                                <p class="desctop">
                                    @foreach($list as $item)
                                    <li>
                                    <a class="cd-faq-trigger" href="#0">{{$item->perihal}}</a>
                                    <!-- cd-faq-content -->
                                    </li>
                                    @endforeach
                                </p>
                                <br><br>
                            </div>
                    </div>
                </div>

            </div>
         </div>

@endsection
