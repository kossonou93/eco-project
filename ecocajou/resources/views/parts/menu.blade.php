<div class="navbar-area">
    <div class="techvio-responsive-nav">
        <div class="container">
            <div class="techvio-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('user/assets/img/logo.png" class="white-logo')}}" alt="logo">
                        <img src="{{ asset('user/assets/img/logo-black.png" class="black-logo')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="techvio-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('user/assets/img/logo.png')}}" class="white-logo" alt="logo">
                    <img src="{{ asset('user/assets/img/logo-black.png')}}" class="black-logo" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"> 
                            <a href="{{route('home')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about')}}" class="nav-link">A Propos</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('services')}}" class="nav-link">Nos Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('activites')}}" class="nav-link">Nos Activités</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="#" class="nav-link">Blog<i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('blogs')}}" class="nav-link">Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="team.html" class="nav-link">Charger des bulletins</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">Télécharger des bulletins</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Galerie Photo </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Success Story</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact<i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link">Contactez-Nous</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-2.html" class="nav-link">Créer un Partenariat</a>
                                </li>
                                <li class="nav-item">
                                    <a href="single-blog.html" class="nav-link">Faire un Don</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="other-option">
                        <a class="default-btn" href="mailto:demo@example.com">Français <span></span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
