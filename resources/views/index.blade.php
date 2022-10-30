<!doctype html>
<html lang="zxx">


<!-- Mirrored from cutesolution.com/html/Techvio/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 18:09:53 GMT -->
@include('parts/head')

<body>

	<!-- Start Preloader Area -->
	@include('parts/preloader')
	<!-- End Preloader Area -->
	
	<!-- Start Navbar Area -->
	@include('parts/menu')
	<!-- End Navbar Area -->
	@include('parts/carousel_accueil')

	<section class="overview-section section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="overview-image">
						<img src="{{ asset('img/choose-2.jpg') }}" alt="image">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="overview-content">
						<h2>ECOCAJOU SA</h2>
						<p style="font-weight: 700; text-align: justify">@lang('public.apropos1') ...</p>
						<br>
						<div class="services-btn-link">
							<a href="{{ route('about') }}" class="services-link" style="font-weight: bold">@lang('public.lirePlus')</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Start Services Section -->
	@include('parts.services')
	<!-- End Services Section -->
	
	<!-- Start Overview Section -->
	
	<!-- End Overview Section -->
		
	<!-- Start Team Section -->
	@include('parts/equipe')
	<!-- End Team Section -->
	
	<!-- Start Partner section -->
	@include('parts/partenaire')
	<!-- End Partner section -->

	<!-- Start Blog Section -->
	<section class="blog-section bg-grey pt-100 pb-70">
		<div class="container">
			<div class="section-title">
				<h2>Blogs</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="{{ asset('img/blog/blog-1.jpg')}}" alt="image">
							</a>
						</div>
						<div class="single-blog-item">
							<ul class="blog-list">
								<li>
									<a href="#"> <i class="fa fa-user-alt"></i> Author</a>
								</li>
								<li>
									<a href="#"> <i class="fas fa-calendar-week"></i>17 June 2021</a>
								</li>
							</ul>
							<div class="blog-content">
								<h3>
                                    <a href="single-blog.html">
										Planning for a Safe Return to the Workplace IT Solutions
                                    </a>
                                </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt</p>
								<div class="blog-btn"> <a href="single-blog.html" class="blog-btn-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="{{ asset('img/blog/blog-2.jpg')}}" alt="image">
							</a>
						</div>
						<div class="single-blog-item">
							<ul class="blog-list">
								<li>
									<a href="#"> <i class="fa fa-user-alt"></i> Author</a>
								</li>
								<li>
									<a href="#"> <i class="fas fa-calendar-week"></i>20 June 2021</a>
								</li>
							</ul>
							<div class="blog-content">
								<h3>
									<a href="single-blog.html">
                                       Announcing Our New Smiles for Success Charity
                                    </a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt</p>
								<div class="blog-btn">
									<a href="single-blog.html" class="blog-btn-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="{{ asset('img/blog/blog-3.jpg')}}" alt="image">
							</a>
						</div>
						<div class="single-blog-item">
							<ul class="blog-list">
								<li>
									<a href="#"> <i class="fa fa-user-alt"></i> Author</a>
								</li>
								<li>
									<a href="#"> <i class="fas fa-calendar-week"></i>25 June 2021</a>
								</li>
							</ul>
							<div class="blog-content">
								<h3>
                                    <a href="single-blog.html">
                                        Machine Learning Applications for Every Industry
                                    </a>
                                </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt</p>
								<div class="blog-btn"> <a href="single-blog.html" class="blog-btn-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog Section -->
	
	@include('parts/footer')
	
</body>
@include('parts/locale')

<!-- Mirrored from cutesolution.com/html/Techvio/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 18:09:56 GMT -->
</html>