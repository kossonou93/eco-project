@include('parts/head')

<body>


	<!--Les coms peuvent être utile-->

	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="loader">
			<div class="shadow"></div>
			<div class="box"></div>
		</div>
	</div>
	<!-- End Preloader Area -->
	
	<!-- Start Navbar Area -->
	<div class="navbar-area">
		<div class="techvio-responsive-nav">
			<div class="container">
				<div class="techvio-responsive-menu">
					<div class="logo">
						<a href="index.html">
							<img src="{{ asset('user/assets/img/PHOTO-2022-03-24-13-13-14.jpg')}}" class="white-logo" alt="logo">
							<img src="{{ asset('user/assets/img/PHOTO-2022-03-24-13-13-14.jpg')}}" class="black-logo" alt="logo">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="techvio-nav">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="index.html">
						<h1 class="text-white">
							ECOCAJOU
						</h1>
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<!-- <li class="nav-item"> 
								<a href="index.html" class="nav-link">Home <i class="fas fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item"> 
										<a href="index.html" class="nav-link">Home 1</a>
									</li>
									<li class="nav-item"> 
										<a href="index-2.html" class="nav-link">Home 2</a>
									</li>
								</ul>
							</li> -->
							<li class="nav-item"> 
								<a href="index.html" class="nav-link">Accueil</a>
							</li>
							<li class="nav-item">
								<a href="about.html" class="nav-link">A propos</a>
							</li>
							<li class="nav-item"> 
								<a href="services.html" class="nav-link">Services</a>
							</li>
							<!-- <li class="nav-item">
								<a href="#" class="nav-link">Services <i class="fas fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item"> 
										<a href="services.html" class="nav-link">Services</a>
									</li>
									<li class="nav-item"> 
										<a href="single-services.html" class="nav-link">Services Details</a>
									</li>
								</ul>
							</li> -->
		
							
	
							<!-- <li class="nav-item"> 
								<a href="#" class="nav-link">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="about.html" class="nav-link">About Us</a>
									</li>
									<li class="nav-item">
										<a href="team.html" class="nav-link">Team</a>
									</li>
									<li class="nav-item">
										<a href="pricing.html" class="nav-link">Pricing</a>
									</li>
									<li class="nav-item">
										<a href="error-404.html" class="nav-link">404 Error</a>
									</li>
									<li class="nav-item">
										<a href="faq.html" class="nav-link">FAQ</a>
									</li>
									<li class="nav-item">
										<a href="coming-soon.html" class="nav-link">Coming Soon</a>
									</li>
									<li class="nav-item">
										<a href="terms-condition.html" class="nav-link">Terms & Conditions</a>
									</li>
									<li class="nav-item">
										<a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="blog-1.html" class="nav-link">Blog Grid</a>
									</li>
									<li class="nav-item">
										<a href="blog-2.html" class="nav-link">Blog Right Sidebar</a>
									</li>
									<li class="nav-item">
										<a href="single-blog.html" class="nav-link">Blog Details</a>
									</li>
								</ul>
							</li> -->
							<li class="nav-item">
								<a href="contact.html" class="nav-link">Contact</a>
							</li>
						</ul>
						<!-- <div class="other-option">
							<a class="default-btn" href="mailto:demo@example.com">Get It Support <span></span></a>
						</div> -->
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- End Navbar Area -->
	
	<!-- Start Home Area -->
	<div class="home-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-12">
							<div class="main-banner-content">
								<h1>Solutions IT, Conseil & Formations</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, magna aliqua. ipsum is simply dummy text of the printing.</p>
								<div class="banner-btn">
									<a href="about.html" class="default-btn-one">
                                        A propos
                                        <span></span>
                                    </a>
									<a class="default-btn" href="contact.html">
                                        Contactez-nous
                                        <span></span>
                                    </a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="banner-image">
								<img src="{{ asset('user/assets/img/home-font.png')}}" alt="image">
							</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="creative-shape">
            <img src="{{ asset('user/assets/img/home-bottom-shape.png')}}" alt="svg shape">
        </div>
	</div>
	<!-- End Home Area -->
	
	<!-- Start Services Section -->
	<section class="services-section section-padding">
		<div class="container">
            <div class="row">
                <div class="col-sm-12">
					<div class="section-title">
						<h6>Nous fournissons</h6>
						<h2>Solutions IT</h2>
					</div>
                </div>
            </div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="flaticon-project-management"></i>
						</div>
						<h3>Formation (SIG, Big Data, ...)</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Lire Plus</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="flaticon-programming"></i>
						</div>
						<h3>Développement web</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Lire Plus</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="flaticon-cpu-1"></i>
						</div>
						<h3>Services réseaux</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Lire Plus</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="flaticon-coding"></i>
						</div>
						<h3>Gestion d'information géographique (SIG)</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Lire Plus</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="flaticon-mobile-app"></i>
						</div>
						<h3>Gestion électronique de documents (GED)</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Lire Plus</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-item">
						<div class="services-icon">
							<i class="flaticon-cloud"></i>
						</div>
						<h3>Data science</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
						<div class="services-btn-link">
							<a href="#" class="services-link">Lire Plus</a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="container mt-5" align="center">
			<h6>
				<a href="" style="text-decoration: underline;">
					Voir Plus
				</a>
			</h6>
		</div>
	</section>
	<!-- End Services Section -->

	<!-- Start About Section -->
	<section class="about-area bg-grey section-padding">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="about-content">
						<div class="about-content-text">
							<h6>A propos de notre compagnie</h6> 
							<h2>Fournir des services IT de qualité est notre passion.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam, nostrud</p>
							<!-- <div class="skills">
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
							</div> -->
							<div class="about-btn-box"> 
								<a class="default-btn project-btn-1" href="projects.html">Lire Plus<span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12">
					<div class="about-image">
						<img src="{{ asset('user/assets/img/about.jpg')}}" alt="About image">
						<!-- <div class="years-design">
							<h2>27</h2>
							<h5>Years Experience</h5>
                        </div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Section -->
	
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
						<h6>Pourquoi nous choisir?</h6>
						<h2>La garantie de votre marque avec la cyber-sécurité</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Overview Section -->
	
	<!-- Start Overview Section 
	<section class="overview-section pt-70 pb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="overview-content">
						<h6>WHY TRUST US?</h6>
						<h2>Achieve digital transformation for your retail business services</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul class="features-list">
							<li> <span>Protect your Business</span></li>
							<li> <span>Network Security</span></li>
							<li> <span>Data Security</span></li>
							<li> <span>Small Business Owners</span></li>
							<li> <span>Running your Business</span></li>
							<li> <span>Network Monitoring</span></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="overview-image-2">
						<img src="assets/img/choose-2.jpg" alt="image">
					</div>
				</div>
			</div>
		</div>
	</section>
	-->
	<!-- End Overview Section -->
	
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
				<!-- <div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">90</span>
								<span>K+</span>
							</h2>
							<h3 class="counter-heading">5 </h3>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- Start Testimonial Section 
	<section class="testimonial-section pt-100 pb-50">
		<div class="container">
			<div class="section-title">
				<h6>Testimonial</h6>
				<h2>What Our Client Say</h2>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="testimonial-slider owl-carousel owl-theme">

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
								<img src="assets/img/client/testimonial-1.jpg" alt="testimonial images">
							</div>
							<div class="testimonial-bio">
								<div class="bio-info">
									<h3>Saabir al-Obeid</h3>
									<span>Business Man</span>
								</div>
							</div>
						</div>

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
								<img src="assets/img/client/testimonial-2.jpg" alt="testimonial images">
							</div>
							<div class="testimonial-bio">
								<div class="bio-info">
									<h3>Zahra Burnett</h3>
									<span>Business Man</span>
								</div>
							</div>
						</div>

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
								<img src="assets/img/client/testimonial-3.jpg" alt="testimonial images">
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
	-->
	<!-- End Testimonial Section -->
	
	<!-- Start Team Section -->
	<section class="team-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6>Membre de l'équipe</h6>
						<h2>Equipe d'Expert</h2>
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
	
	<!-- Start Blog Section 
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
								<img src="assets/img/blog/blog-1.jpg" alt="image">
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
								<img src="assets/img/blog/blog-2.jpg" alt="image">
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
								<img src="assets/img/blog/blog-3.jpg" alt="image">
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
	-->
	<!-- End Blog Section -->
	
	<!-- Start Hire Section -->
	<section class="hire-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-12">
					<div class="hire-content">
						<h6>Voulez-vous travaillez avec nous?</h6>
						<h2>Accroissez votre business avec la transformation digitale</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud consectetur voluptatem accusantium doloremque adipiscing elit.</p>
						<div class="hire-btn">
							<a class="default-btn" href="tel:0802235678">Appelez maintenant<span></span></a>
							<a class="default-btn-one" href="contact.html">Contact Nous<span></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Hire Section -->
	
	<!-- Start Partner section 
	<section class="partner-section pt-100 pb-70">
		<div class="container">
			<div class="partner-title">
				<h6>Il nous font confiance</h6>
				<h2>Nos Clients</h2>
			</div>
			<div class="partner-list">
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-1.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-2.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-3.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-4.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-5.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-6.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-7.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-8.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-1.png" alt="image">
					</a>
				</div>
			</div>
		</div>
	</section>
	-->
	<!-- End Partner section -->
	
	<!-- Start Footer & Subscribe Section -->
	@include('parts/footer')
	
</body>

<!-- Mirrored from cutesolution.com/html/Techvio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 18:09:29 GMT -->
</html>