<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dana Pensiun Semen Gresik</title>
<!-- Stylesheets -->
<link href="{{ url('webprofil/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ url('webprofil/css/style.css') }}" rel="stylesheet">
<link href="{{ url('webprofil/css/responsive.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Bellefair&family=Open+Sans:wght@300;400;700;800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ url('webprofil/js/respond.js') }}"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

 	<!-- Main Header-->
    <header class="main-header header-style-two">
		<div class="auto-container clearfix">
            <!--  Header Top -->
            <div class="header-top clearfix">
                <div class="top-left pull-left clearfix">
                    <ul class="info-box clearfix">
                        <li><i class="flaticon-headphones"></i><a href="tel:0313984492">(031) 3984492</a></li>
                        <li><i class="flaticon-email"></i><a href="mailto:dpsg@indo.net.id">dpsg@indo.net.id</a></li>
                    </ul>
                </div>
                {{--  <div class="top-right pull-right clearfix">
                    <div class="search-box-outer">
                        <form action="index.html" method="post" class="search-btn">
                            <button type="button" class="search-toggler"><i class="flaticon-search"></i>Search</button>
                        </form>
                    </div>
                </div>  --}}
            </div>
        </div>

        <!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container clearfix">

				<div class="pull-left logo-box">
					<div class="logo"><a href="{{url('/')}}"><img src="{{ url('webprofil/images/logo-3.png')}}" alt="" title=""></a></div>
				</div>

				<div class="nav-outer clearfix">
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
					<!-- Main Menu -->
					<nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">Tentang Kami</a></li>
                                <li class="dropdown"><a href="{{url('/manajemen')}}">Manajemen</a></li>
                                <li class="dropdown"><a href="{{url('/penghargaan')}}">Penghargaan</a></li>
								{{--  <li class="dropdown"><a href="{{url('/struktur')}}">Stuktur Organisasi</a>
									<ul>
										<li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
								    </ul>
								</li>
                                <li><a href="{{url('/kontak')}}">Hubungi Kami</a></li>  --}}
                            </ul>
                        </div>
                    </nav>

					<!-- Main Menu End-->
					<div class="outer-box clearfix">

						<!-- Btn Box -->
						<div class="btn-box">
							<a href="{{url('/login')}}" class="theme-btn btn-style-one"><span class="txt">Sign In</span></a>
						</div>

					</div>
				</div>

            </div>
        </div>
        <!--End Header Upper-->

		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

					<!-- Main Menu End-->
					<div class="outer-box clearfix">

						<!-- Btn Box -->
						<div class="btn-box">
							<a href="{{url('/login')}}" class="theme-btn btn-style-two"><span class="txt">Log in</span></a>
						</div>

						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

					</div>

                </div>
            </div>
        </div><!-- End Sticky Menu -->

		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

	<!-- banner-section -->
    <section class="banner-section style-three">
        <!-- Social Nav -->
		<ul class="social-nav">
			<li class="facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
			<li class="twitter"><a href="#"><span class="fa fa-instagram"></span></a></li>
			{{--  <li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>  --}}
		</ul>
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ url('webprofil/images/main-slider/banner-7.jpg') }})"></div>
                <div class="pattern-layer">
                    <div class="pattern-3" style="background-image: url({{ url('webprofil/images/shape/pattern-28.png') }});"></div>
                    <div class="pattern-4" style="background-image: url({{ url('webprofil/images/shape/pattern-29.png') }});"></div>
                </div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-2 content-column">
                            <div class="inner-column">
                                <div class="title"></div>
                                <h1>Dana Pensiun <br> Semen Gresik</h1>
                                <div class="text">Jl. R.A. Kartini No.23, Injen Timur, Gapurosukolilo,<br> Kec. Gresik, Kabupaten Gresik, Jawa Timur 61122</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ url('webprofil/images/main-slider/banner-8.jpg') }})"></div>
                <div class="pattern-layer">
                    <div class="pattern-3" style="background-image: url({{ url('webprofil/images/shape/pattern-28.png') }});"></div>
                    <div class="pattern-4" style="background-image: url({{ url('webprofil/images/shape/pattern-29.png') }});"></div>
                </div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-2 content-column">
                            <div class="inner-column">
                                <div class="title"></div>
                                <h1>Dana Pensiun <br> Semen Gresik</h1>
                                <div class="text">Jl. R.A. Kartini No.23, Injen Timur, Gapurosukolilo,<br> Kec. Gresik, Kabupaten Gresik, Jawa Timur 61122</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ url('webprofil/images/main-slider/banner-9.jpg') }})"></div>
                <div class="pattern-layer">
                    <div class="pattern-3" style="background-image: url({{ url('webprofil/images/shape/pattern-28.png') }});"></div>
                    <div class="pattern-4" style="background-image: url({{ url('webprofil/images/shape/pattern-29.png') }});"></div>
                </div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-2 content-column">
                            <div class="inner-column">
                                <div class="title"></div>
                                <h1>Dana Pensiun <br> Semen Gresik</h1>
                                <div class="text">Jl. R.A. Kartini No.23, Injen Timur, Gapurosukolilo,<br> Kec. Gresik, Kabupaten Gresik, Jawa Timur 61122</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- chooseus-section -->
    <section class="chooseus-section alternet-2">

    </section>
    <!-- chooseus-section end -->

	<!-- Main Footer -->
    @include('webprofil.footer')

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{ url('webprofil/js/jquery.js') }}"></script>
<script src="{{ url('webprofil/js/popper.min.js') }}"></script>
<script src="{{ url('webprofil/js/bootstrap.min.js') }}"></script>
<script src="{{ url('webprofil/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ url('webprofil/js/jquery.fancybox.js') }}"></script>
<script src="{{ url('webprofil/js/appear.js') }}"></script>
<script src="{{ url('webprofil/js/parallax.min.js') }}"></script>
<script src="{{ url('webprofil/js/tilt.jquery.min.js') }}"></script>
<script src="{{ url('webprofil/js/jquery.paroller.min.js') }}"></script>
<script src="{{ url('webprofil/js/owl.js') }}"></script>
<script src="{{ url('webprofil/js/wow.js') }}"></script>
<script src="{{ url('webprofil/js/nav-tool.js') }}"></script>
<script src="{{ url('webprofil/js/jquery-ui.js') }}"></script>
<script src="{{ url('webprofil/js/script.js') }}"></script>

</body>
</html>
