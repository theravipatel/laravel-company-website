<div class="clearfix"></div>
    <footer class="footer">
            <div class="copyright_info">
                <div class="container">

                    <div class="clearfix divider_dashed10"></div>

                    <div class="one_half animate" data-anim-type="fadeInRight" data-anim-delay="300">

                        Copyright © 2015 LinStar.com. All rights reserved. <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>

                    </div>

                    <div class="one_half last">

                        <ul class="footer_social_links">
                            <li class="animate" data-anim-type="zoomIn" data-anim-delay="300"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="animate" data-anim-type="zoomIn" data-anim-delay="300"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="animate" data-anim-type="zoomIn" data-anim-delay="300"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="animate" data-anim-type="zoomIn" data-anim-delay="300"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                    </div>

                </div>
            </div><!-- end copyright info -->


        </footer>



        <a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->



    </div>


    <!-- ######### JS FILES ######### -->
    <!-- get jQuery used for the theme -->
    <script type="text/javascript" src="{{url('frontend/js/universal/jquery.js')}}"></script>
    <script src="{{url('frontend/js/style-switcher/styleselector.js')}}"></script>
    <script src="{{url('frontend/js/animations/js/animations.min.js')}}" type="text/javascript"></script>
    <script src="{{url('frontend/js/mainmenu/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js/mainmenu/customeUI.js')}}"></script>
    <script src="{{url('frontend/js/masterslider/masterslider.min.js')}}"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            var slider = new MasterSlider();
            // adds Arrows navigation control to the slider.
            slider.control('arrows');
            slider.control('bullets');

            slider.setup('masterslider', {
                width: 1400, // slider standard width
                height: 680, // slider standard height
                space: 0,
                speed: 45,
                layout: 'fullwidth',
                loop: true,
                preload: 0,
                autoplay: true,
                view: "parallaxMask"
            });
        })(jQuery);
    </script>
    <script src="{{url('frontend/js/scrolltotop/totop.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{url('frontend/js/mainmenu/sticky.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/js/mainmenu/modernizr.custom.75180.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/js/cubeportfolio/jquery.cubeportfolio.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/js/cubeportfolio/main.js')}}"></script>
    <script src="{{url('frontend/js/tabs2/index.js')}}"></script>
    <script>
        $('.accordion, .tabs').TabsAccordion({
            hashWatch: true,
            pauseMedia: true,
            responsiveSwitch: 'tablist',
            saveState: sessionStorage,
        });
    </script>
    <script src="{{url('frontend/js/aninum/jquery.animateNumber.min.js')}}"></script>
    <script src="{{url('frontend/js/carouselowl/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/js/universal/custom.js')}}"></script>

</body>

</html>