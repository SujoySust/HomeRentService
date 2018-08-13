<!DOCTYPE HTML>
<html>
<head>
    <title>Housing owner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('Admin/')}}/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{asset('Admin/')}}/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="{{asset('Admin/')}}/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="{{asset('Admin/')}}/css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="{{asset('Admin/')}}/js/jquery-1.10.2.min.js"></script>
    <script src="{{asset('Admin/')}}/js/amcharts.js"></script>
    <script src="{{asset('Admin/')}}/js/serial.js"></script>
    <script src="{{asset('Admin/')}}/js/light.js"></script>
    <script src="{{asset('Admin/')}}/js/radar.js"></script>
    <link href="{{asset('Admin/')}}/css/barChart.css" rel='stylesheet' type='text/css' />
    <link href="{{asset('Admin/')}}/css/fabochart.css" rel='stylesheet' type='text/css' />
    <!--clock init-->
    <script src="{{asset('Admin/')}}/js/css3clock.js"></script>
    <!--Easy Pie Chart-->
    <!--skycons-icons-->
    <script src="{{asset('Admin/')}}/js/skycons.js"></script>

    <script src="{{asset('Admin/')}}/js/jquery.easydropdown.js"></script>

    <!--//skycons-icons-->
</head>
<body>
<div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
        <div class="inner-content">
            <!-- header-starts -->
           @include('admin.Include.header')
            <!-- //header-ends -->
            @yield('mainContent')
        </div>
    </div>
    <!--//content-inner-->
@include('admin.Include.sidebar')
    <div class="clearfix"></div>
</div>
<script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
        if (toggle)
        {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position":"absolute"});
        }
        else
        {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({"position":"relative"});
            }, 400);
        }

        toggle = !toggle;
    });
</script>
<!--js -->
<link rel="stylesheet" href="{{asset('Admin/')}}/css/vroom.css">
<script type="text/javascript" src="{{asset('Admin/')}}/js/vroom.js"></script>
<script type="text/javascript" src="{{asset('Admin/')}}/js/TweenLite.min.js"></script>
<script type="text/javascript" src="{{asset('Admin/')}}/js/CSSPlugin.min.js"></script>
<script src="{{asset('Admin/')}}/js/jquery.nicescroll.js"></script>
<script src="{{asset('Admin/')}}/js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('Admin/')}}/js/bootstrap.min.js"></script>
</body>
</html>