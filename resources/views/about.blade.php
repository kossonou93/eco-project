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
						<h2>A propos</h2>
						<ul>
							<li><a href="{{route('home')}}">Accueil</a></li>
							<li><a href="{{route('about')}}">A propos</a></li>
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
							<h6>1 . Présentation</h6>
							<p style="font-weight: 700"><span style="font-weight: bold">ECOCAJOU SA</span> est une société anonyme opérant dans l’achat, la transformation et l’exportation de noix et d’amandes de cajou certifiées BIO et FAIRTRADE. Elle est basée à Odienné dans la région du Kabadougou en Côte d’Ivoire. ECOCAJOU est née du groupe ECOOKIM, une union interrégionale de coopératives de café et cacao exportant plus de 55 000 tonnes de fèves de cacao par an.</p>
							<p style="font-weight: 700">Elle dispose d’une équipe expérimentée dans la transformation et la commercialisation des produits agricoles certifiés, en développement communautaire et en gestion d’entreprise. Nous travaillons avec un personnel expérimenté avec un effectif global de 700 personnes.</p>
							<p style="font-weight: 700">Pour son approvisionnement, nous nous appuyons sur un vaste réseau de sociétés coopératives qui assurent la disponibilité des matières premières. Ainsi, nous travaillons directement avec plus de 12000 producteurs, membres des sociétés coopératives que nous formons aux bonnes pratiques agricoles pour la durabilité et la traçabilité.</p>
							<p style="font-weight: 700">La capacité annuelle de notre unité de transformation est de 2500 tonnes d’amandes de cajou BIO et FAIRTRADE pour le démarrage et atteindra en croisière le double (soit 5000 tonnes d’amandes) et entre 10000 et 20000 tonnes de noix de cajou brutes. L’usine répond aux normes internationales de certification telles que BRC et autres.</p>
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
							<h6>2 . A propos de notre Entreprise</h6> 
							<p style="font-weight: 700">Nous sommes une société expérimentée dans les produits agricoles de noix de cajou, café et cacao. Nous travaillons directement avec les sociétés coopératives partenaires composées de 12000 membres contribuant ainsi à un approvisionnement régulier, garanti, durable en assurant la qualité et la traçabilité de nos produits. Notre usine de noix de cajou est certifiée aux normes BRC.</p>
							<p style="font-weight: 700">Capacité annuelle de stockage des noix brutes de cajou de l’usine 20.000 tonnes.</p>
							<p style="font-weight: 700">2500 tonnes d’amande de cajou BIO et FAIRTRADE par an.</p>
							<p style="font-weight: 700">10000 tonnes de noix brutes de cajou transformées annuellement.</p>
							<p><h6> <span style="font-weight: 800">Nos grades :</span> <span style="font-weight: bold"> WW, SW, LBW, LP, SP, BB.</span></h6></p>
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