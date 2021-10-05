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
               <div class="col-lg-9 col-md-9">
                  <span class="name-rog">
                     <div class="hr-line"></div>
                     Newsfeed
                  </span>
                  <div class="promo-donate">
                     <div class="col-md-1 dv lv">
                        <span class="ic-info"></span>
                     </div>
                     <div class="col-md-10 lv">
                        <h3 class="th-name">{{$baru->perihal}}</h3>
                        <p class="desctop">
                            {{ \Illuminate\Support\Str::limit(strip_tags($baru->keterangan),260,'...')}}
                        </p>

                        <a href="{{ url('/berita/'.Crypt::encrypt($baru->id)) }}" class="btn-startgames macosx lf"><span class="ic-dw"></span> Buka</a>
                     </div>
                  </div>
                  <span class="name-rog">
                     <div class="hr-line"></div>
                     List Berita Terkahir
                  </span>
                  <div class="cd-faq-items">
                     <ul id="basics" class="cd-faq-group">
                        <br>
                        @foreach($berita as $item)
                        <li>
                           <a class="cd-faq-trigger" href="#0">{{$item->perihal}}</a>
                           <div class="cd-faq-content">
                              <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->keterangan),260,'...')}}</p>
                           </div>
                           <!-- cd-faq-content -->
                        </li>
                        @endforeach
                     </ul>
                     <!-- cd-faq-group -->
                  </div>
                  <!-- cd-faq-items -->
               </div>

            </div>
         </div>

@endsection
