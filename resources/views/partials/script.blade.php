 <!--Bootstrap JS-->
 <script src="{{asset('frontend-assets/assets/js/bootstrap.min.js')}}"></script>
 <!--Jquery JS-->
 <script src="{{asset('frontend-assets/assets/js/jquery.min.js')}}"></script>
 <script>
     $(window).on('scroll', function() {
         if ($(this).scrollTop() > 100) {
             $('.nav-menu').addClass("sticky");
         } else {
             $('.nav-menu').removeClass('sticky');
         }
     })
 </script>
 <!--Popper JS-->
 <script src="{{asset('frontend-assets/assets/js/popper.main.js')}}"></script>
 <!--aos JS-->
 <script src="{{asset('frontend-assets/assets/js/aos.js')}}"></script>
 <!--aos JS-->
 <script src="{{asset('frontend-assets/assets/js/owl.carousel.min.js')}}"></script>
 <!--main JS-->
 <script src="{{asset('frontend-assets/assets/js/main.js')}}"></script>
