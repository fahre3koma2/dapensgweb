<!doctype html>
<html class="no-js" lang="ru">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Dana Pensiun Semen Gresik</title>
      <meta name="description" content="">
      <!---meta name="viewport" content="width=device-width, initial-scale=1"---->
      <link rel="manifest" href="site.webmanifest">
      <link rel="icon" href="favicon.png">
      <link rel="apple-touch-icon" href="icons/icon.png">

      <!-- Place favicon.ico in the root directory -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,500,600" rel="stylesheet">
      <link rel="stylesheet" href="{{ url('webprof/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/icons/icomoon.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/icons/fontawesome-all.min.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/css/plugins.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/css/main.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/css/styles.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/dist/css/swiper.min.css')}}">
   </head>
   <body>
      <!-- Page Content START -->
      <div class="page-content">
         <!-- Main Nav START -->
         <nav id="main-nav" class="main-nav fixed">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="nav-header d-flex justify-content-between align-items-center">
                        <a href="{{url('/')}}" class="logo" title="LOGO">
                        <img class="logo-img" src="{{ url('webprof/img/logo.png')}}" width="20%" alt="LOGO">
                        <img class="alt-logo-img" src="{{ url('webprof/img/logo-alt2.png')}}" alt="LOGO">
                        </a>
                     </div>
                     <div class="nav-wrap">
                        <ul id="nav" class="nav-wrap__list menu">
                           <li class="current"><a href="{{url('/dasboard')}}" title="HOME">Home</a></li>
                           <li><a href="{{url('/about')}}" title="tentang">Tentang Kami</a></li>
                           <li><a href="{{url('/manajemen')}}" title="manajemen">Newsfeed</a></li>
                           <li><a href="{{url('/penghargaan')}}" title="penghargaan">Hukum Online</a></li>
                           <div class="dropdown">
                                <span>
                                    <div class="drop-ed"></div>
                                </span>
                                <div class="dropdown-content">
                                    <span class="arrow_box"></span>
                                    <ul class="drop-vape">
                                        <li><a href="{{url('/admin')}}"> Admin </a> </li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                        <div class="riglt-floats-xs">
                           <a href="#" class="btn-login"><span class="ic-sx21"></span> Halo, {{ Auth::user()->nickname; }}</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
         <!-- Main Nav END -->
         <!-- Home Section START -->
         <section id="home-sec" class="main-banner parallax">
            <div class="bg-lefts"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-9">
                     <!-- Swiper -->
                     <div class="swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide" data-hash="slide1">
                                <div class="col-md-10">
                                    <img class="img-ste1" width="100%" src="{{ url('webprof/img/post3.jpg')}}">
                                </div>

                              {{--  <div class="col-md-6">
                                 <h4 class="name-intro">DANA PENSIUN<br>SEMEN GRESIK</h4>
                                 <span class="hr-intro"></span>
                                 <p class="docopation-intro">
                                    Jl. R.A. Kartini No.23, Injen Timur, Gapurosukolilo,<br> Kec. Gresik, Kabupaten Gresik, Jawa Timur 61122
                                 </p>
                                   <a href="#" class="btn-drop"><span class="ic-sx22"></span> Подробнее</a>
                              </div>  --}}
                           </div>
                           <div class="swiper-slide" data-hash="slide2">
                              <div class="col-md-10">
                                    <img class="img-ste1" width="100%" src="{{ url('webprof/img/post2.jpg')}}">
                              </div>
                           </div>
                           <div class="swiper-slide" data-hash="slide3">
                              <div class="col-md-10">
                                    <img class="img-ste1" width="100%" src="{{ url('webprof/img/post1.jpg')}}">
                              </div>
                           </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <a href="#" class="block-s1 p2">
                        <p class="how-to-games">Jumlah Pengunjung</p>
                        <p class="desctops">    </p>
                     </a>
                     <a href="how-start.html" class="block-s1">
                        <p class="how-to-games">Как начать играть ?</p>
                        <p class="desctops"> В данной теме рассказано как нчать игру на нашем проекте.</p>
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Home Section END -->
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-9">
                  <div class="news-link">
                     <img class="poster" src="{{ url('webprof/img/post.png')}}" />
                     <span class="hot-news">HOT</span>
                     <h3 class="news-log">Berita / Artikel !</h3>
                     <p class="description">
                        Встречайте новая мини-игра PUBG теперь и на нашем сервере в майнкрафт !
                        По традиции нашим первым шагом будет ознакомление с правилами и регистрация аккаунта.
                        Будьте внимательны при чтении правил нашего проекта, незнание их не освобождает вас от...
                     </p>
                     <a href="#" class="btn-view"><span class="ic-sx24"></span> Подробнее</a>
                     <span class="time-data">18.05.18 12:42</span>
                  </div>
                  <div class="news-link">
                     <img class="poster" src="{{ url('webprof/img/post.png')}}" />
                     <span class="new-news">NEW</span>
                     <h3 class="news-log">Berita / Artikel !</h3>
                     <p class="description">
                        Встречайте новая мини-игра PUBG теперь и на нашем сервере в майнкрафт !
                        По традиции нашим первым шагом будет ознакомление с правилами и регистрация аккаунта.
                        Будьте внимательны при чтении правил нашего проекта, незнание их не освобождает вас от...
                     </p>
                     <a href="#" class="btn-view"><span class="ic-sx24"></span> Подробнее</a>
                     <span class="time-data">18.05.18 12:42</span>
                  </div>
                  <div class="news-link">
                     <img class="poster" src="{{ url('webprof/img/post.png')}}" />
                      <h3 class="news-log">Berita / Artikel !</h3>
                     <p class="description">
                        Встречайте новая мини-игра PUBG теперь и на нашем сервере в майнкрафт !
                        По традиции нашим первым шагом будет ознакомление с правилами и регистрация аккаунта.
                        Будьте внимательны при чтении правил нашего проекта, незнание их не освобождает вас от...
                     </p>
                     <a href="#" class="btn-view"><span class="ic-sx24"></span> Подробнее</a>
                     <span class="time-data">18.05.18 12:42</span>
                  </div>
                  <div class="news-link">
                     <img class="poster" src="{{ url('webprof/img/post.png')}}" />
                      <h3 class="news-log">Berita / Artikel !</h3>
                     <p class="description">
                        Встречайте новая мини-игра PUBG теперь и на нашем сервере в майнкрафт !
                        По традиции нашим первым шагом будет ознакомление с правилами и регистрация аккаунта.
                        Будьте внимательны при чтении правил нашего проекта, незнание их не освобождает вас от...
                     </p>
                     <a href="#" class="btn-view"><span class="ic-sx24"></span> Подробнее</a>
                     <span class="time-data">18.05.18 12:42</span>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="right-block">
                     <div class="n-m">Informasi Lain</div>
                     <div class="server online">
                        <div class="second circle">
                           <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                           Онлайн: 50/100
                        </div>
                     </div>
                     <div class="server online">
                        <div class="second circle">
                           <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                           Онлайн: 50/100
                        </div>
                     </div>
                     <p class="tdx-strom"><span class="online-o"></span> Общий онлайн: 2173</p>
                  </div>
                  <div class="right-block vk">
                     <div class="n-m">Video</div>
                     <div class="widget-vk">
                       <iframe width="238" height="238" target="_blank" src="https://www.youtube.com/embed/37bLs3iDVNI"></iframe>
                     </div>
                  </div>

                  <div class="right-block">
                       <img class="img-ste1" width="100%" src="{{ url('webprof/img/visi.png')}}">

                  </div>
               </div>
            </div>
         </div>
         <!-- Footer START -->
         <footer class="section site-footer bg-dark">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-md-8">
                       <p class="footer-text">
                            <h5>Kantor Dana Pensun Semen Gresik</h5>
                            Jalan RA. Kartini No. 23 Gresik, 61122<br>
                            Telp. 031 3984492 Fax. 031 3981371
                        </p>
                  </div>
                  <div class="col-md-4">
                     <ul class="ft-nav social-nav my-3">
                        <li class="mx-1"><a href="javascript:void(0);" title="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="mx-1"><a href="javascript:void(0);" title="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="mx-1"><a href="javascript:void(0);" title="instagram"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </footer>
         <!-- Footer END -->
      </div>
      <!-- Page Content END -->
      <script src="{{ url('webprof/dist/js/swiper.min.js')}}"></script>
      <!-- Initialize Swiper -->
      <script>
         var swiper = new Swiper('.swiper-container', {
           spaceBetween: 10,
           hashNavigation: {
             watchState: true,
           },
           pagination: {
             el: '.swiper-pagination',
             clickable: true,
           },
           navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev',
           },
           loop: true,
                autoplay: {
                delay: 3000,
                disableOnInteraction: true,
            },
         });
      </script>
      <script src="{{ url('webprof/js/jquery.min.js')}}"></script>
      <script src="{{ url('webprof/js/circle-progress.js')}}"></script>
      <script src="{{ url('webprof/js/examples.js')}}"></script>
      <script src="{{ url('webprof/js/vendor/modernizr-3.5.0.min.js')}}"></script>
      <script src="{{ url('webprof/js/vendor/jquery-3.2.1.min.js')}}"></script>
      <script src="{{ url('webprof/js/plugins.js')}}"></script>
      <script src="{{ url('webprof/js/main.js')}}"></script>
   </body>
</html>
