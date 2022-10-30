
<header class="slider slider-prlx">
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ asset('img/cajou1.jpg')}}" data-overlay-dark="5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="caption">
                                    <h1>ECOCAJOU SA</h1>
                                    <p>@lang('public.slogan')</p>
                                    <div class="banner-btn home-slider-btn">
                                        <a href="{{route('about')}}" class="default-btn-one">
                                            @lang('public.apropos')
                                            <span></span>
                                        </a>
                                        <a class="default-btn" href="{{route('contacts.index')}}">
                                            @lang('public.contactezNous')
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ asset('img/cajou.jpg')}}" data-overlay-dark="5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="caption">
                                    <h1>ECOCAJOU SA</h1>
                                    <p>@lang('public.slogan')</p>
                                    <div class="banner-btn home-slider-btn">
                                        <a href="{{route('about')}}" class="default-btn-one">
                                            @lang('public.apropos')
                                            <span></span>
                                        </a>
                                        <a class="default-btn" href="{{route('contacts.index')}}">
                                            @lang('public.contactezNous') 
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider setting -->
        <div class="control-text">
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                <span class="arrow prv"></span>
            </div>
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                <span class="arrow nxt"></span>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</header>