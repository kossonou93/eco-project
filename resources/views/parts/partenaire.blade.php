        
<section class="project-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <h2>@lang('public.nosPartenaires')</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="project-list">
                    <ul class="nav" id="project-flters">
                        <li class="filter filter-active" data-filter=".all">@lang('public.tous')</li>
                        <li class="filter" data-filter=".branding" onclick="showBranding('branding'); return false;">@lang('public.techniques')</li>
                        <li class="filter" data-filter=".application" onclick="showApplication('application'); return false;">@lang('public.financiers')</li>
                    </ul>
                </div>
            </div> 
            <br>
            <div class="project-container">
                <div class="col-md-12">
                    <div id="owl-demo" class="owl-carousel owl-theme project-grid-item all">
                        <div class="project-item"><img src="{{ asset('img/partner/Away4Africa.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item"><img src="{{ asset('img/partner/cashew.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item"><img src="{{ asset('img/partner/dibcoop.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item"><img src="{{ asset('img/partner/ecookim.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item"><img src="{{ asset('img/partner/nederland.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item"><img src="{{ asset('img/partner/prosper.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item"><img src="{{ asset('img/partner/usaid.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item"><img src="{{ asset('img/partner/usda.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item"><img src="{{ asset('img/partner/westafrica.PNG')}}" alt="Owl Image"></div>
                    </div>
                </div>
            </div>

            <div class="project-container" style="display: none" id="branding">
                <div class="col-md-12">
                    <div id="owl-demo" class="owl-carousel owl-theme project-grid-item branding">
                        <div class="project-item"><img src="{{ asset('img/partner/Away4Africa.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item"><img src="{{ asset('img/partner/dibcoop.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item"><img src="{{ asset('img/partner/prosper.PNG')}}" alt="Owl Image"></div>
                    </div>
                </div>
            </div>

            <div class="project-container" style="display: none" id="application">
                <div class="col-md-12">
                    <div id="owl-demo" class="owl-carousel owl-theme project-grid-item application">
                        <div class="project-item application"><img src="{{ asset('img/partner/cashew.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item application"><img src="{{ asset('img/partner/ecookim.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item application"><img src="{{ asset('img/partner/nederland.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item application"><img src="{{ asset('img/partner/usaid.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item application"><img src="{{ asset('img/partner/usda.PNG')}}" alt="Owl Image"></div>
                        <div class="project-item application"><img src="{{ asset('img/partner/westafrica.PNG')}}" alt="Owl Image"></div>
                    </div>
                </div>
            </div>
    </div>
</section>
   
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
        navigation : false,
        navigationText : ["prev","next"],
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
        });
        $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
        });
    });
</script>

<script>
    function showBranding(id) {
        document.getElementById(id).style.display = 'block';
    }

    function showApplication(id) {
        document.getElementById(id).style.display = 'block';
    }
</script>