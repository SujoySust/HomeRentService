<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Housing a Real Estate Category Bootstrap Responsive website Template | Home :: w3layouts</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Sweet Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href="{{asset('FontEnd/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" >
    <!--//booststrap end-->

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('FontEnd/')}}/css/font-awesome.min.css" />

    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="{{asset('FontEnd/')}}/css/style.css" rel='stylesheet' type='text/css' media="all">
    <link href="{{asset('FontEnd/')}}/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" /><!-- //pop-ups-->
    <link href="{{asset('FontEnd/')}}/css/lsb.css" rel="stylesheet" type="text/css"> <!--gallery lsb-->

    <link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
    <!--//style sheet end here-->
</head>
<body>
@include('FontEnd.Include.header')


@yield('mainContent')
<!--footer-->
@include('FontEnd.Include.footer')
<!--//footer-->
<!--menu script-->
<script type='text/javascript' src='{{asset('FontEnd/')}}/js/jquery-2.2.3.min.js'></script>
<script type="text/javascript" src="{{asset('FontEnd/')}}/js/modernizr-2.6.2.min.js"></script>
<script src="{{asset('FontEnd/')}}/js/bootstrap.min.js"></script>
<!--//menu script-->
<!-- banner-->
<script src="{{asset('FontEnd/')}}/js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 1000,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!-- OnScroll-Number-Increase-JavaScript -->
<script src="{{asset('FontEnd/')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('FontEnd/')}}/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--pop-up-box video-->
<script src="{{asset('FontEnd/')}}/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- //pop-up-box video -->
<!-- gallery-lightbox -->
<script src="{{asset('FontEnd/')}}/js/lsb.min.js"></script>
<script>
    $(window).load(function() {
        $.fn.lightspeedBox();
    });
</script>
<!-- //gallery-lightbox -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('FontEnd/')}}//move-top.js"></script>
<script type="text/javascript" src="{{asset('FontEnd/')}}/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->

<!-- for-bottom-to-top smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //for-bottom-to-top smooth scrolling -->
</body>
</html>