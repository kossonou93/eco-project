<div class="navbar-area">
    <div class="techvio-responsive-nav">
        <div class="container">
            <div class="techvio-responsive-menu">
                <div class="logo">
                    <a href="{{route('index')}}">
                        <img src="{{ asset('img/logo.png" class="white-logo')}}" alt="logo">
                        <img src="{{ asset('img/logo-black.png" class="black-logo')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="techvio-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{ asset('img/logo.png')}}" class="white-logo" alt="logo">
                    <img src="{{ asset('img/logo-black.png')}}" class="black-logo" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"> 
                            <a href="{{route('index')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about')}}" class="nav-link">@lang('public.apropos')</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('services')}}" class="nav-link">@lang('public.nosServices')</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('activites')}}" class="nav-link">@lang('public.nosActivites')</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="#" class="nav-link">Blog<i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('blogs')}}" class="nav-link">Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('bulletins.index')}}" class="nav-link">@lang('public.telechargeBulletins')</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('galeries.index')}}" class="nav-link">@lang('public.galerie') </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('stories.index')}}" class="nav-link">@lang('public.nosRealisations')</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact<i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('contacts.index')}}" class="nav-link">@lang('public.contactezNous')</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('partenaires.index')}}" class="nav-link">@lang('public.creerPartenariat')</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('dons.index')}}" class="nav-link">@lang('public.faireDon')</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="other-option">
                        <!--<a class="default-btn" href="locale/fr">Français <span></span></a>-->
                        <select class="form-control font-weight-bold text-primary" id="changeLang" style="">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>@lang('public.anglais')</option>
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>@lang('public.francais')</option>
                        </select>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
