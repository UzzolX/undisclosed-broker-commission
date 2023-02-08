<script>
    (function (ss, ex) {
        window.ldfdr = window.ldfdr || function () {
            (ldfdr._q = ldfdr._q || []).push([].slice.call(arguments));
        };
        (function (d, s) {
            fs = d.getElementsByTagName(s)[0];

            function ce(src) {
                var cs = d.createElement(s);
                cs.src = src;
                cs.async = 1;
                fs.parentNode.insertBefore(cs, fs);
            };
            ce('https://sc.lfeeder.com/lftracker_v1_' + ss + (ex ? '_' + ex : '') + '.js');
        })(document, 'script');
    })('bElvO73pvmb4ZMqj');
</script>

<!--Bootstrap JS-->
<script src="{{asset('frontend-assets/assets/js/bootstrap.min.js')}}"></script>
<!--Jquery JS-->
<script src="{{asset('frontend-assets/assets/js/jquery.min.js')}}"></script>
<script>
    $(window).on('scroll', function () {
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
