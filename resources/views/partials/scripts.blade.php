 <!-- Bootstrap -->
 <script src="frontend/assets/js/bootstrap.bundle.min.js"></script>
 <!-- Load jQuery require for isotope -->
 <script src="frontend/assets/js/jquery.min.js"></script>
 <!-- Isotope -->
 <script src="frontend/assets/js/isotope.pkgd.js"></script>
 <!-- Page Script -->
 <script>
     $(window).load(function() {
         // init Isotope
         $('.inner').slick({
         dots: true,
         infinite: true,
         speed: 300,
         slidesToShow: 1,
         adaptiveHeight: false,
         autoplay:true,
         autoplaySpeed:3000,
         });


         var $projects = $('.projects').isotope({
             itemSelector: '.project',
             layoutMode: 'fitRows'
         });
         $(".filter-btn").click(function() {
             var data_filter = $(this).attr("data-filter");
             $projects.isotope({
                 filter: data_filter
             });
             $(".filter-btn").removeClass("active");
             $(".filter-btn").removeClass("shadow");
             $(this).addClass("active");
             $(this).addClass("shadow");
             return false;
         });


     });

 </script>
 <!-- Templatemo -->
 <script src="frontend/assets/js/templatemo.js"></script>
 <!-- slick-slider -->
 <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <!-- Custom -->
 <script src="frontend/assets/js/custom.js"></script>
 <!-- wowslider -->
 <script type="text/javascript" src="frontend/assets/wowslider/engine1/wowslider.js"></script>
 <script type="text/javascript" src="frontend/assets/wowslider/engine1/script.js"></script>







 @stack('script')
</body>

</html>