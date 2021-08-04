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
                        <li><i class="flaticon-email"></i><a href="mailto:info@dapensg.com">info@dapensg.com</a></li>
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
					<div class="logo"><a href="index.html"><img src="images/logo3.png" alt="" title=""></a></div>
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
								<li class="dropdown"><a href="{{url('/struktur')}}">Stuktur Organisasi</a>
									<ul>
										<li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
								    </ul>
								</li>
                                <li><a href="{{url('/kontak')}}">Hubungi Kami</a></li>
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
			<li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
			<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
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
                                <div class="title">PT. SEMEN INDONESIA (Persero)</div>
                                <h1>Dana Pensiun <br> Semen Gresik</h1>
                                <div class="text">Jl. Kapten Dulasim Gg. 1 No.23, Injen Timur, Gapurosukolilo,<br> Kec. Gresik, Kabupaten Gresik, Jawa Timur 61122</div>
                                <div class="btns-box">
                                    <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Free Consultation <i class="arrow flaticon-right"></i></span></a>
                                </div>
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
                                <div class="title">PT. SEMEN INDONESIA (Persero)</div>
                                <h1>Dana Pensiun <br> Semen Gresik</h1>
                                <div class="text">Jl. Kapten Dulasim Gg. 1 No.23, Injen Timur, Gapurosukolilo,<br> Kec. Gresik, Kabupaten Gresik, Jawa Timur 61122</div>
                                <div class="btns-box">
                                    <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Free Consultation <i class="arrow flaticon-right"></i></span></a>
                                </div>
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
                                <div class="title">PT. SEMEN INDONESIA (Persero)</div>
                                <h1>Dana Pensiun <br> Semen Gresik</h1>
                                <div class="text">Jl. Kapten Dulasim Gg. 1 No.23, Injen Timur, Gapurosukolilo,<br> Kec. Gresik, Kabupaten Gresik, Jawa Timur 61122</div>
                                <div class="btns-box">
                                    <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Free Consultation <i class="arrow flaticon-right"></i></span></a>
                                </div>
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
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Reason for Choosing Us</h2>
                <div class="text">
                    <p>Obligations of business it will frequently occur that pleasures have to be repudiated & annoyances accepted.</p>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box">
                            	<div class="icon flaticon-file"></div>
                            </div>
                            <h4>Corporate Law</h4>
                            <p>Indignations & dislike men beguiled demoralized.</p>
                            <a href="family_law.html"><i class="flaticon-right-arrow"></i>More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box">
                            	<div class="icon flaticon-file-1"></div>
                            </div>
                            <h4>Real Estate Law</h4>
                            <p>Business it will frequently pleasures repudiated.</p>
                            <a href="family_law.html"><i class="flaticon-right-arrow"></i>More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box">
                            	<div class="icon flaticon-umbrella-1"></div>
                            </div>
                            <h4>Insurance Law</h4>
                            <p>Indignations & dislike men beguiled demoralized.</p>
                            <a href="family_law.html"><i class="flaticon-right-arrow"></i>More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box">
                            	<div class="icon flaticon-group"></div>
                            </div>
                            <h4>Family Law</h4>
                            <p>Business it will frequently pleasures repudiated.</p>
                            <a href="family_law.html"><i class="flaticon-right-arrow"></i>More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->


    <!-- video-section -->
    <section class="video-section">
        <div class="auto-container">
            <div class="video-content">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url({{ url('webprofil/images/shape/pattern-31.png') }});"></div>
                    <div class="pattern-2"></div>
                    <div class="pattern-3"></div>
                </div>
                <div id="image_block_1">
                    <div class="image-box">
                        <div class="video-inner" style="background-image: url({{ url('images/resource/video-img.jpg') }});">
                            <a href="https://www.youtube.com/watch?v=h-_iDmvJ55Q&ab_channel=SemenGresik" class="lightbox-image video-btn" data-caption="">
                                <i class="flaticon-play-arrow"></i>
                            </a>
                            <div class="border"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video-section end -->

    <!-- service-section -->
    <section class="service-section alternet-2 bg-color-light">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Inspiring Staffing Solutions</h2>
                <div class="text">Long established fact that a reader will be distracted by the <br />readable content of a page.</div>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                <div class="service-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ url('webprofil/images/resource/service-2.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <div class="inner">
                                    <div class="icon-box"><div class="icon flaticon-file"></div></div>
                                    <h4>Temporary</h4>
                                </div>
                                <div class="link"><a href="case-details.html">More Details</a></div>
                            </div>
                            <div class="overlay-content">
                                <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                <a href="case-details.html"><i class="flaticon-right-arrow"></i>More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ url('webprofil/images/resource/service-3.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <div class="inner">
                                    <div class="icon-box"><div class="icon flaticon-file-1"></div></div>
                                    <h4>Direct Hire</h4>
                                </div>
                                <div class="link"><a href="case-details.html">More Details</a></div>
                            </div>
                            <div class="overlay-content">
                                <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                <a href="case-details.html"><i class="flaticon-right-arrow"></i>More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ url('webprofil/images/resource/service-4.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <div class="inner">
                                    <div class="icon-box"><div class="icon flaticon-umbrella-1"></div></div>
                                    <h4>Contract</h4>
                                </div>
                                <div class="link"><a href="case-details.html">More Details</a></div>
                            </div>
                            <div class="overlay-content">
                                <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                <a href="case-details.html"><i class="flaticon-right-arrow"></i>More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ url('webprofil/images/resource/service-2.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <div class="inner">
                                    <div class="icon-box"><div class="icon flaticon-group"></div></div>
                                    <h4>Temporary</h4>
                                </div>
                                <div class="link"><a href="case-details.html">More Details</a></div>
                            </div>
                            <div class="overlay-content">
                                <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                <a href="case-details.html"><i class="flaticon-right-arrow"></i>More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ url('webprofil/images/resource/service-3.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <div class="inner">
                                    <div class="icon-box"><div class="icon flaticon-file"></div></div>
                                    <h4>Direct Hire</h4>
                                </div>
                                <div class="link"><a href="case-details.html">More Details</a></div>
                            </div>
                            <div class="overlay-content">
                                <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                <a href="case-details.html"><i class="flaticon-right-arrow"></i>More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ url('webprofil/images/resource/service-4.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <div class="inner">
                                    <div class="icon-box"><div class="icon flaticon-file-1"></div></div>
                                    <h4>Contract</h4>
                                </div>
                                <div class="link"><a href="case-details.html">More Details</a></div>
                            </div>
                            <div class="overlay-content">
                                <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                <a href="case-details.html"><i class="flaticon-right-arrow"></i>More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ url('webprofil/images/resource/service-2.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <div class="inner">
                                    <div class="icon-box"><div class="icon flaticon-umbrella-1"></div></div>
                                    <h4>Temporary</h4>
                                </div>
                                <div class="link"><a href="case-details.html">More Details</a></div>
                            </div>
                            <div class="overlay-content">
                                <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                <a href="case-details.html"><i class="flaticon-right-arrow"></i>More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ url('webprofil/images/resource/service-3.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <div class="inner">
                                    <div class="icon-box"><div class="icon flaticon-group"></div></div>
                                    <h4>Direct Hire</h4>
                                </div>
                                <div class="link"><a href="case-details.html">More Details</a></div>
                            </div>
                            <div class="overlay-content">
                                <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                <a href="case-details.html"><i class="flaticon-right-arrow"></i>More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ url('webprofil/images/resource/service-4.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <div class="inner">
                                    <div class="icon-box"><div class="icon flaticon-file"></div></div>
                                    <h4>Contract</h4>
                                </div>
                                <div class="link"><a href="case-details.html">More Details</a></div>
                            </div>
                            <div class="overlay-content">
                                <p>Explain to you how this idea denouncing pleasure & praising pain was born.</p>
                                <a href="case-details.html"><i class="flaticon-right-arrow"></i>More details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->

    <!-- project-style-two -->
    <section class="project-style-two">
        <div class="outer-container">

            <div class="sec-title centered">
                <h2>Our Case Studies</h2>
                <div class="text">Long established fact that a reader will be distracted by the <br />readable content of a page.</div>
            </div>

            <div class="four-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <div class="pattern-layer">
                                <div class="pattern-2" style="background-image: url({{ url('webprofil/images/shape/pattern-17.png') }});"></div>
                            </div>
                            <img src="images/resource/case-2.jpg" alt="">
                        </figure>
                        <div class="content-box">
                            <div class="text">
                                <span>@ Presentation</span>
                                <h4><a href="case-details.html">Helping Bigbasket Scale Up</a></h4>
                            </div>
                            <div class="view-btn"><a href="images/resource/case-2.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <div class="pattern-layer">
                                <div class="pattern-2" style="background-image: url({{ url('webprofil/images/shape/pattern-17.png') }});"></div>
                            </div>
                            <img src="images/resource/case-3.jpg" alt="">
                        </figure>
                        <div class="content-box">
                            <div class="text">
                                <span>@ Presentation</span>
                                <h4><a href="case-details.html">Helping Bigbasket Scale Up</a></h4>
                            </div>
                            <div class="view-btn"><a href="images/resource/case-3.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <div class="pattern-layer">
                                <div class="pattern-2" style="background-image: url({{ url('webprofil/images/shape/pattern-17.png') }});"></div>
                            </div>
                            <img src="images/resource/case-4.jpg" alt="">
                        </figure>
                        <div class="content-box">
                            <div class="text">
                                <span>@ Presentation</span>
                                <h4><a href="case-details.html">Helping Bigbasket Scale Up</a></h4>
                            </div>
                            <div class="view-btn"><a href="images/resource/case-4.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <div class="pattern-layer">
                                <div class="pattern-2" style="background-image: url({{ url('webprofil/images/shape/pattern-17.png') }});"></div>
                            </div>
                            <img src="images/resource/case-5.jpg" alt="">
                        </figure>
                        <div class="content-box">
                            <div class="text">
                                <span>@ Presentation</span>
                                <h4><a href="case-details.html">Helping Bigbasket Scale Up</a></h4>
                            </div>
                            <div class="view-btn"><a href="images/resource/case-5.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-text centered"><p>Interested to work with us? <a href="case-details.html">Let’s get started</a></p></div>
        </div>
    </section>
    <!-- project-style-two end -->

    <!-- Facts Section three -->
    <section class="facts-section-three" style="background-image: url({{ url('webprofil/images/background/1.jpg') }});">

        <div class="auto-container">
            <div class="fact-counter-style-three">
                <div class="row">
                    <!--Column-->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon"><span class="flaticon-briefcase"></span></div>
                                <div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="245">0</span><sup>+</sup>
                                    </div>
                                    <h4>Business Partners </h4>
                                    <div class="text">Indignation & dislike mens who <br> beguiled demoralized.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon"><span class="flaticon-balance"></span></div>
                                <div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="1879">0</span><sup>+</sup>
                                    </div>
                                    <h4>Cases Done</h4>
                                    <div class="text">Desire that they cannot foresee <br> the pain and trouble.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon"><span class="flaticon-trophy-2"></span></div>
                                <div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="350">0</span><sup>+</sup>
                                    </div>
                                    <h4>Awards Win</h4>
                                    <div class="text">These cases are perfect simple <br> & easy to distinguish.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- Practice Section -->
	<section class="practice-section" style="background-image: url({{ url('webprofil/images/background/pattern-2.png') }})">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Our LEGAL PRACTICE Areas</h2>
			</div>
			<div class="inner-container">
				<div class="clearfix">

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-car-1"></div>
							<h5><a href="corporate_law.html">Car Accident</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.html"></a>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-briefcase"></div>
							<h5><a href="corporate_law.html">Business LAw</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.html"></a>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-handcuffs-1"></div>
							<h5><a href="corporate_law.html">Criminal Law</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.html"></a>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-save-money"></div>
							<h5><a href="corporate_law.html">Child Support</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.html"></a>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-injury"></div>
							<h5><a href="corporate_law.html">Personal Injury</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.html"></a>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-law"></div>
							<h5><a href="corporate_law.html">Education LAw</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.html"></a>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-balance"></div>
							<h5><a href="corporate_law.html">Divorce Law</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.html"></a>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-notebook"></div>
							<h5><a href="corporate_law.html">TAX LAW</a></h5>
							<div class="text">Quis autem velo eum iure suam nihil molestiae</div>
							<a class="arrow flaticon-right-arrow-3" href="corporate_law.html"></a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Practice Section -->

	<!-- Fluid Section One -->
    <section class="fluid-section-one">
		<div class="side-icon"><img src="images/icons/fluid-icon.png" alt="" /></div>
    	<div class="outer-container clearfix">
        	<!-- Image Column -->
            <div class="image-column clearfix" style="background-image:url({{url('webprofil/images/resource/image-1.jpg') }})">
            	<div class="inner-column">
					<div class="sec-title light">
						<h2>Frequently asked <br> questions</h2>
						<div class="text">Tonam rem aperiam, eaque ipsa quae ab illo inventoe veritatis et quasi architecto beatae vitae dicta sunt explicabo exercitationem ullam corporis.</div>
					</div>

					<!-- Accordian Box -->
					<ul class="accordion-box">

						<!-- Block -->
						<li class="accordion block active-block">
							<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Quis autem vel eum iure reprederit?</div>
							<div class="acc-content current">
								<div class="content">
									<div class="accordian-text">Dolor sit amet, consectetur, adipisci velit, sed quia non numuameius modi tempora incidunt ut labore et dolore magnam aliuam quaerat voluptatem.</div>
								</div>
							</div>
						</li>

						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>fugiat quo voluptas nulla pariatu?</div>
							<div class="acc-content">
								<div class="content">
									<div class="accordian-text">Dolor sit amet, consectetur, adipisci velit, sed quia non numuameius modi tempora incidunt ut labore et dolore magnam aliuam quaerat voluptatem.</div>
								</div>
							</div>
						</li>

						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>minima veniam, quis nostrum exerci?</div>
							<div class="acc-content">
								<div class="content">
									<div class="accordian-text">Dolor sit amet, consectetur, adipisci velit, sed quia non numuameius modi tempora incidunt ut labore et dolore magnam aliuam quaerat voluptatem.</div>
								</div>
							</div>
						</li>

					</ul>

				</div>
            </div>

        	<!-- Content Column -->
            <div class="content-column">
            	<div class="inner-column">
					<div class="sec-title">
						<h2>GEt A Free <br> Consultation</h2>
					</div>

					<!-- Default Form -->
					<div class="default-form">
						<form method="post" action="contact.html">
							<div class="row clearfix">

								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" name="username" placeholder="Name" required>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" name="phone" placeholder="Phone" required>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<select class="custom-select-box">
										<option>Practice Area</option>
										<option>Area 01</option>
										<option>Area 02</option>
										<option>Area 03</option>
										<option>Area 04</option>
									</select>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<textarea name="message" placeholder="Message"></textarea>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Submit Now <i class="arrow flaticon-right"></i></span></button>
								</div>

							</div>
						</form>
					</div>
					<!-- End Default Form -->

				</div>
			</div>
		</div>
	</section>
	<!-- Fluid Section One -->

	<!-- Team Section -->
	<section class="team-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Our Professional Team</h2>
			</div>
			<div class="row clearfix">

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ url('webprofil/images/resource/team-1.jpg')}}" alt="" />
						</div>
						<div class="lower-box">
							<h5><a href="our_team.html">Chris JAriko</a></h5>
							<div class="designation">Founder and Ceo</div>
							<a class="arrow flaticon-right-arrow-3" href="our_team.html"></a>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ url('webprofil/images/resource/team-2.jpg')}}" alt="" />
						</div>
						<div class="lower-box">
							<h5><a href="our_team.html">ALina Kevin</a></h5>
							<div class="designation">Senior Attorney</div>
							<a class="arrow flaticon-right-arrow-3" href="our_team.html"></a>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ url('webprofil/images/resource/team-3.jpg')}}" alt="" />
						</div>
						<div class="lower-box">
							<h5><a href="our_team.html">Senior Attorney</a></h5>
							<div class="designation">Junior Attorney</div>
							<a class="arrow flaticon-right-arrow-3" href="our_team.html"></a>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ url('webprofil/images/resource/team-4.jpg')}}" alt="" />
						</div>
						<div class="lower-box">
							<h5><a href="our_team.html">Polard Andrew</a></h5>
							<div class="designation">Financial Attorney</div>
							<a class="arrow flaticon-right-arrow-3" href="our_team.html"></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Team Section -->

	<!-- Clients Section -->
	<section class="clients-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>TRUSTED COMPANIES</h2>
				<div class="text">Nemo enim ipsam voluptatem quia voluptas sit asper aut odit aut fugit, sed quia consequuntur magni doloreos <br> qui ratione voluptatem sequi nesciunt aorro ruisea</div>
			</div>
			<div class="inner-container">
				<div class="sponsors-outer">
					<!--Sponsors Carousel-->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Clients Section -->

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
