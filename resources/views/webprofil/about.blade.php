@extends('webprofil.main')

@section('title')
    Dapen SG - Tentang Kami
@endsection

@section('header')
    <section class="page-title" style="background-image:url({{ url('webprofil/images/background/1.jpg')}})">
        <div class="auto-container">
            <h1>Tentang Kami</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">home</a></li>
                <li>About</li>
            </ul>
        </div>
    </section>
@endsection

@section('contents')
    <section class="case-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="clearfix">

					<!-- Image Column -->
					<div class="image-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="{{ url('webprofil/images/resource/case1.jpg')}}" alt="" />
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<h2>Tentang Kami <br> Dana Pensiun Semen Gresik</h2>
								<div class="text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et volutate repudiandae sint et molestiae non recusandae earum  rerum hic tenetur a sapiente delectus ut aut reiciendis  voluptatibus maiores alias consequatur aut nerfereni doloribus asperiores repellat.</div>
							</div>
							{{--  <div class="text-box">
								Nam libero tempore, cum soluta nobis est eligenioptio cumque nihil impedit quo minus id quod maxplaceat facere possimus, omnis voluptas.
								<a href="corporate_law.html" class="arrow flaticon-right"></a>
							</div>  --}}
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Welcome Section -->

	<!-- Fluid Section Two -->
    <section class="team-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Our Professional Team</h2>
			</div>
			<div class="row clearfix">
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                </div>
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ url('webprofil/images/resource/team1.jpg')}}" alt="" />
						</div>
						<div class="lower-box">
							<h5><a href="our_team.html">Sudartini, SE. </a></h5>
							<div class="designation">Plt. Direktur</div>
							{{--  <a class="arrow flaticon-right-arrow-3" href="our_team.html"></a>  --}}
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="{{ url('webprofil/images/resource/team2.jpg')}}" alt="" />
						</div>
						<div class="lower-box">
							<h5><a href="our_team.html">Nur Widjajanti, SE</a></h5>
							<div class="designation">Plt. Direktur Utama</div>
							{{--  <a class="arrow flaticon-right-arrow-3" href="our_team.html"></a>  --}}
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Fluid Section Two -->

@endsection
