
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
      <link rel="stylesheet" href="{{ url('webprof/css/bootstrap3.min.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/icons/icomoon.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/icons/fontawesome-all.min.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/css/plugins.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/css/main.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/css/styles.css')}}">
      <link rel="stylesheet" href="{{ url('webprof/dist/css/swiper.min.css')}}">
      <link href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css" rel="stylesheet">
      <style>
        #example {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #example td, #example th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #example tr:nth-child(even){background-color: #ffffff;}

        #example tr:hover {background-color: #ddd;}

        #example th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #EDFAFF;
        color: black;
        }

      </style>

      {{--  @yield('style')  --}}

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
                       <a href="{{url('/dashboard')}}" class="logo" title="LOGO">
                        <img class="logo-img" src="{{ url('webprof/img/logo.png')}}" width="20%" alt="LOGO">
                        <img class="alt-logo-img" src="{{ url('webprof/img/logo-alt.png')}}" alt="LOGO">
                        </a>
                     </div>
                     <div class="nav-wrap">
                         @include('webprofil.menu')
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
         <span class="no-intro"></span>
         @yield('contents')
         <!-- Footer START -->
         @include('webprofil.footer')
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

      @yield('js')
{{--
      <script src="{{ url('webprof/faq/js/jquery-2.1.1.js')}}"></script>
      <script src="{{ url('webprof/faq/js/jquery.mobile.custom.min.js')}}"></script>
      <script src="{{ url('webprof/faq/js/main.js')}}"></script> <!-- Resource jQuery -->  --}}

   </body>
</html>

