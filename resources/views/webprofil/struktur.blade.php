@extends('webprofil.main')

@section('title')
    Dapen SG - Tentang Kami
@endsection

@section('header')
    <section class="page-title" style="background-image:url({{ url('webprofil/images/background/1.jpg')}})">
        <div class="auto-container">
            <h1>Struktur Organisasi</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">home</a></li>
                <li>Struktur Organisasi</li>
            </ul>
        </div>
    </section>
@endsection

@section('contents')
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
	<!-- End Fluid Section Two -->

@endsection
