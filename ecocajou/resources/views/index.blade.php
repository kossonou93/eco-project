@include('parts/head')

<body>

	<!-- Start Preloader Area -->
	@include('parts/preloader')
	<!-- End Preloader Area -->
	
	<!-- Start Navbar Area -->
	@include('parts/menu')
	<!-- End Navbar Area -->
	@include('parts/carousel_accueil')
	<!-- Start Slider Are -->
    
    <!-- End Slider Area -->

	<!-- Start About Section -->
	<section class="about-area section-padding">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="about-content">
						<div class="about-content-text">
							<h6>A Propos</h6> 
							<h2>Providing your business with a quality IT service is our passion.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam, nostrud</p>
							<div class="skills">
								<div class="skill-item">
									<h6>IT Consulting <em>90%</em></h6>
									<div class="skill-progress">
										<div class="progres" data-value="90%"></div>
									</div>
								</div>
								<div class="skill-item">
									<h6>Virtual Workstation <em>75%</em></h6>
									<div class="skill-progress">
										<div class="progres" data-value="75%"></div>
									</div>
								</div>
								<div class="skill-item">
									<h6>Managed IT Service <em>80%</em></h6>
									<div class="skill-progress">
										<div class="progres" data-value="80%"></div>
									</div>
								</div>
							</div>
							<div class="about-btn-box"> 
								<a class="default-btn project-btn-1" href="projects.html">Learn More<span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12">
					<div class="about-image">
						<img src="{{ asset('user/assets/img/about.jpg')}}" alt="About image">
						<div class="years-design">
							<h2>27</h2>
							<h5>Years Experience</h5>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Section -->
	
	<!-- Start Services Section -->
	<section class="services-section bg-grey section-padding">
		<div class="container">
            <div class="row">
                <div class="col-sm-12">
					<div class="section-title">
						<h6>What We Provide</h6>
						<h2>IT Solutions</h2>
					</div>
                </div>
            </div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="flaticon-project-management"></i>
						</div>
						<h3>IT Solution</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="flaticon-programming"></i>
						</div>
						<h3>Web Development</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="flaticon-cpu-1"></i>
						</div>
						<h3>Networking Services</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="flaticon-coding"></i>
						</div>
						<h3>SEO Optimization</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="flaticon-mobile-app"></i>
						</div>
						<h3>App Optimization</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="flaticon-cloud"></i>
						</div>
						<h3>Data Recovery</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section -->
	
	<!-- Start Project Section -->
    <section class="project-area section-padding">
        <div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="section-title">
						<h6>Recent Works</h6>
						<h2>Our Portfolio</h2>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="project-list">
                        <ul class="nav" id="project-flters">
                            <li class="filter filter-active" data-filter=".all">all</li>
                            <li class="filter" data-filter=".branding">branding</li>
                            <li class="filter" data-filter=".application">application</li>
                            <li class="filter" data-filter=".webdesign">web design</li>
                            <li class="filter" data-filter=".photography">photography</li>
                        </ul>
                    </div>
                </div>
                <div class="project-container">
                    <!-- project-item -->
                    <div class="col-lg-3 col-md-6 project-grid-item all branding webdesign">
                        <div class="project-item">
							<img src="{{ asset('user/assets/img/portfolio/portfolio-1.jpg')}}" alt="image">
                            <div class="project-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-projects.html">Creative Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- project-item -->
                    <div class="col-lg-6 col-md-6 project-grid-item all application photography">
                        <div class="project-item">
							<img src="{{ asset('user/assets/img/portfolio/portfolio-2.jpg')}}" alt="image">
                            <div class="project-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-projects.html">Creative Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- project-item -->
                    <div class="col-lg-3 col-md-6 project-grid-item all branding webdesign">
                        <div class="project-item">
							<img src="{{ asset('user/assets/img/portfolio/portfolio-3.jpg')}}" alt="image">
                            <div class="project-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-projects.html">Creative Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- project-item -->
                    <div class="col-lg-3 col-md-6 project-grid-item all branding webdesig photographyn">
                        <div class="project-item">
							<img src="{{ asset('user/assets/img/portfolio/portfolio-4.jpg')}}" alt="image">
                            <div class="project-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-projects.html">Creative Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- project-item -->
                    <div class="col-lg-3 col-md-6 project-grid-item all application webdesign photography">
                        <div class="project-item">
							<img src="{{ asset('user/assets/img/portfolio/portfolio-5.jpg')}}" alt="image">
                            <div class="project-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-projects.html">Creative Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project Section -->

	<!-- Start Counter Section -->
	<section class="counter-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">27</span>
								<span>+</span>
							</h2>
							<h3 class="counter-heading">Years Helping Business</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">500</span>
								<span>+</span>
							</h2>
							<h3 class="counter-heading">Employees</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">30</span>
								<span>M</span>
							</h2>
							<h3 class="counter-heading">Complete Projects</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">90</span>
								<span>K+</span>
							</h2>
							<h3 class="counter-heading">5 Star Rating</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- Start Overview Section -->
	<section class="overview-section section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="overview-image">
						<img src="{{ asset('user/assets/img/choose-1.jpg')}}" alt="image">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="overview-content">
						<h6>Why Choose Us?</h6>
						<h2>Safeguard your brand with Cyber-Security & IT Solutions</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul class="features-list">
							<li> <span>Remote It Assistance</span></li>
							<li> <span>Solving IT Problems</span></li>
							<li> <span>Practice IT Management</span></li>
							<li> <span>IT Security Services</span></li>
							<li> <span>Managed IT Service</span></li>
							<li> <span>Cloud Services</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Overview Section -->
		
	<!-- Start Team Section -->
	<section class="team-area pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6>Team Member</h6>
						<h2>Expert Team</h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="{{ asset('user/assets/img/team/team-1.jpg')}}" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Ava Farrington</h3>
							<span>Founder, ceo</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="{{ asset('user/assets/img/team/team-2.jpg')}}" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Kevin Haley</h3>
							<span>Co-founder, cto</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="{{ asset('user/assets/img/team/team-3.jpg')}}" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Alishia Fulton</h3>
							<span>Chief creative officer</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="{{ asset('user/assets/img/team/team-4.jpg')}}" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Lucas Martinez</h3>
							<span>Project Manager</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Section -->

	<!-- Start Hire Section -->
	<section class="hire-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-12">
					<div class="hire-content">
						<h6>Want to work with us?</h6>
						<h2>Digitally transform and grow your business!</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud consectetur voluptatem accusantium doloremque adipiscing elit.</p>
						<div class="hire-btn">
							<a class="default-btn" href="tel:0802235678">Call Now<span></span></a>
							<a class="default-btn-one" href="contact.html">Contact Us<span></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Hire Section -->
	
	<!-- Start Testimonial Section -->
	<section class="testimonial-section section-padding">
		<div class="container">
			<div class="section-title">
				<h6>Testimonial</h6>
				<h2>What Our Client Say</h2>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="testimonial-slider owl-carousel owl-theme">
						<!-- testimonials item -->
						<div class="single-testimonial">
							<div class="rating-box">
								<ul>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</div>
							<div class="testimonial-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
							</div>
							<div class="avatar">
								<img src="{{ asset('user/assets/img/client/testimonial-1.jpg')}}" alt="testimonial images">
							</div>
							<div class="testimonial-bio">
								<div class="bio-info">
									<h3>Saabir al-Obeid</h3>
									<span>Business Man</span>
								</div>
							</div>
						</div>
						<!-- testimonials item -->
						<div class="single-testimonial">
							<div class="rating-box">
								<ul>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</div>
							<div class="testimonial-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
							</div>
							<div class="avatar">
								<img src="{{ asset('user/assets/img/client/testimonial-2.jpg')}}" alt="testimonial images">
							</div>
							<div class="testimonial-bio">
								<div class="bio-info">
									<h3>Zahra Burnett</h3>
									<span>Business Man</span>
								</div>
							</div>
						</div>
						<!-- testimonials item -->
						<div class="single-testimonial">
							<div class="rating-box">
								<ul>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</div>
							<div class="testimonial-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
							</div>
							<div class="avatar">
								<img src="{{ asset('user/assets/img/client/testimonial-3.jpg')}}" alt="testimonial images">
							</div>
							<div class="testimonial-bio">
								<div class="bio-info">
									<h3>Stevie Wills</h3>
									<span>Business Man</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!-- Start Partner section -->
	<section class="partner-section pb-70">
		<div class="container">
			<div class="partner-title">
				<h6>Trusted By Over 40,000</h6>
				<h2>Our Customers</h2>
			</div>
			<div class="partner-list">
				<div class="partner-item">
					<a href="#0">
						<img src="{{ asset('user/assets/img/partner/client-1.png')}}" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="{{ asset('user/assets/img/partner/client-2.png')}}" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="{{ asset('user/assets/img/partner/client-3.png')}}" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="{{ asset('user/assets/img/partner/client-4.png')}}" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="{{ asset('user/assets/img/partner/client-5.png')}}" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="{{ asset('user/assets/img/partner/client-6.png')}}" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="{{ asset('user/assets/img/partner/client-7.png')}}" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="{{ asset('user/assets/img/partner/client-8.png')}}" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="{{ asset('user/assets/img/partner/client-1.png')}}" alt="image">
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Partner section -->

	<!-- Start Blog Section -->
	<section class="blog-section bg-grey pt-100 pb-70">
		<div class="container">
			<div class="section-title">
				<h6>Blog & Article</h6>
				<h2>Recent Blog</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="{{ asset('user/assets/img/blog/blog-1.jpg')}}" alt="image">
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
								<img src="{{ asset('user/assets/img/blog/blog-2.jpg')}}" alt="image">
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
								<img src="{{ asset('user/assets/img/blog/blog-3.jpg')}}" alt="image">
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


<!-- Mirrored from cutesolution.com/html/Techvio/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 18:09:56 GMT -->
</html>