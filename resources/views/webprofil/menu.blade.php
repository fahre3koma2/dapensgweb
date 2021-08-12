<header class="main-header header-style-one">
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container clearfix">

				<div class="pull-left logo-box">
					<div class="logo"><a href="index.html"><img src="{{ url('webprofil/images/logo.png')}}" alt="" title=""></a></div>
				</div>

				<div class="nav-outer clearfix">
					<!--Mobile Navigation Toggler-->
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
                                <li><a href="{{url('/manajemen')}}">Manajemen</a></li>
								<li><a href="{{url('/penghargaan')}}">Penghargaan</a></li>
								{{--  <li><a href="{{url('/struktur')}}">Struktur Organisasi</a></li>  --}}
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

						<!-- Phone Box -->


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
							<a href="{{url('/login')}}" class="theme-btn btn-style-two"><span class="txt">Log In</span></a>
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
