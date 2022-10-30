<section class="footer-subscribe-wrapper">
    <!-- Start Subscribe Area -->
    
    <!-- End Subscribe Area -->
    
    <!-- Start Footer Area -->
    <div class="footer-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-heading">
                            <h3>@lang('public.apropos')</h3>
                        </div>
                        <p>Ecocajou SA @lang('public.apropos1')</p>
                        <ul class="footer-social">
                            <li>
                                <a href="#"> <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-heading">
                            <h3>@lang('public.nosServices')</h3>
                        </div>
                        <ul class="footer-quick-links">
                            <li> <a href="#">@lang('public.fournitureBrute')</a></li>
                            <li> <a href="#">@lang('public.fournitureBio')</a></li>
                            <li> <a href="#">FAIRTRADE</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-heading">
                            <h3>Lien Utiles</h3>
                        </div>
                        <ul class="footer-quick-links">
                            <li><a href="{{ route('about')}}">@lang('public.apropos')</a></li>
                            <li><a href="{{ route('login')}}" target="_blank">Connexion</a></li>
                            <li><a href="{{ route('contacts.index')}}">@lang('public.contactezNous')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-heading">
                            <h3>Contact Info</h3>
                        </div>
                        <div class="footer-info-contact"> <i class="flaticon-phone-call"></i>
                            <h3>Phone</h3>
                            <span><a href="tel:0802235678">080 707 555-321</a></span>
                        </div>
                        <div class="footer-info-contact"> <i class="flaticon-envelope"></i>
                            <h3>Email</h3>
                            <span><a href="mailto:demo@example.com">demo@example.com</a></span>
                        </div>
                        <div class="footer-info-contact"> <i class="flaticon-placeholder"></i>
                            <h3>Address</h3>
                            <span>526  Melrose Street, Water Mill, 11976  New York</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Section -->
</section>
<!-- End Footer & Subscribe Section -->

<!-- Start Copy Right Section -->
<div class="copyright-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <p> <i class="far fa-copyright"></i> 2022 Ecocajou - @lang('public.droit').</p>
            </div>
            <!--<div class="col-lg-6 col-md-6">
                <ul>
                    <li> <a href="terms-condition.html">Terms & Conditions</a>
                    </li>
                    <li> <a href="privacy-policy.html">Privacy Policy</a>
                    </li>
                </ul>
            </div>-->
        </div>
    </div>
</div>
<!-- End Copy Right Section -->


<!-- Start Go Top Section -->
<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
</div>
@include('sweetalert::alert')

<script src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
<!-- Include js plugin -->
<script src="{{asset('owl-carousel/owl.carousel.js')}}"></script>
<!-- End Go Top Section -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Popper Min JS -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap Min JS -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- MeanMenu JS  -->
<script src="{{asset('js/jquery.meanmenu.js')}}"></script>
<!-- Appear Min JS -->
<script src="{{asset('js/jquery.appear.min.js')}}"></script>
<!-- CounterUp Min JS -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup Min JS -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Nice Select Min JS -->
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<!-- Isotope Min JS -->
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<!-- Swiper Min JS -->
<script src="{{asset('js/swiper.min.js')}}"></script>
<!-- WOW Min JS -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('js/main.js')}}"></script>