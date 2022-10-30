@include('parts/head')

<body>

	<!-- Start Preloader Area -->
	@include('parts/preloader')
	<!-- End Preloader Area -->
	
	<!-- Start Navbar Area -->
	@include('parts/menu')
	<!-- End Navbar Area -->
	
	<!-- Start Page Title Area -->
	<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>@lang('public.apropos')</h2>
						<ul>
							<li><a href="{{route('home')}}">@lang('public.accueil')</a></li>
							<li><a href="{{route('about')}}">@lang('public.apropos')</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->
	
	<!-- Start About Section -->
	<section class="about-area bg-grey section-padding">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="about-content">
						<div class="about-content-text" style="text-align: justify">
							<h6>1 . @lang('public.presentation')</h6>
							<p style="font-weight: 700"><span style="font-weight: bold">ECOCAJOU SA</span> @lang('public.apropos1').</p>
							<p style="font-weight: 700">@lang('public.apropos2')</p>
							<p style="font-weight: 700">@lang('public.apropos3')</p>
							<p style="font-weight: 700">@lang('public.apropos4')</p>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12">
					<div class="about-image">
						<img src="img/anacarde_1.jpg" alt="About image">
						<!-- <div class="years-design">
							<h2>27</h2>
							<h5>Years Experience</h5>
                        </div> -->
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="about-content">
						<div class="about-content-text" style="text-align: justify">
							<h6>2 . @lang('public.apropos5')</h6> 
							<p style="font-weight: 700">@lang('public.apropos6')</p>
							<p style="font-weight: 700">@lang('public.apropos7')</p>
							<p style="font-weight: 700">@lang('public.apropos8')</p>
							<p style="font-weight: 700">@lang('public.apropos9')</p>
							<p><h6> <span style="font-weight: 800">@lang('public.apropos10') :</span> <span style="font-weight: bold"> WW, SW, LBW, LP, SP, BB.</span></h6></p>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12">
					<div class="about-image">
						<!--<img src="img/about.jpg" alt="About image">
						 <div class="years-design">
							<h2>27</h2>
							<h5>Years Experience</h5>
                        </div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Section -->
	<!-- Start Counter Section -->
	<section class="counter-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">27</span>
								<span>+</span>
							</h2>
							<h3 class="counter-heading">Années d'expérience</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">500</span>
								<span>+</span>
							</h2>
							<h3 class="counter-heading">Employés</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">30</span>
								<span>M</span>
							</h2>
							<h3 class="counter-heading">Projets complets</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- Start Team Section -->
	@include('parts/equipe')
	<!-- End Team Section -->
	
	<!-- End Hire Section -->
	
	@include('parts/footer')
	
</body>

@include('parts/locale')
<!-- Mirrored from cutesolution.com/html/Techvio/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 18:09:56 GMT -->
</html>