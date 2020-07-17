<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Fair Logistics Agency Limited</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/bootstrap.css')}}" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/style.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/responsive.css')}}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/colors/color1.css')}}" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/animate.css')}}">

    <!-- Favicon and touch icons  -->
    <link href="{{asset('icon/apple-touch-icon-48-precomposed.png')}}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{asset('icon/apple-touch-icon-32-precomposed.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{asset('icon/favicon.png')}}" rel="shortcut icon">

    <link rel="stylesheet" type="text/css" href="{{url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="header-sticky page-loading">
<div class="loading-overlay">
</div>

<!-- Boxed -->
<div class="boxed">
    <div class="site-header header-v3">
        <div class="flat-top">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <img src="{{asset('images/kenya.png')}}" style="height: 15px;width: auto;">| |
                        <img src="{{asset('images/uganda.png')}}" style="height: 15px;width: auto;">| |
                        <img src="{{asset('images/Rwanda.jpg')}}" style="height: 15px;width: auto;">| |
                        <img src="{{asset('images/Tanzania.png')}}" style="height: 15px;width: auto;">| |
                        <img src="{{asset('images/ethopia.jpg')}}" style="height: 15px;width: auto;">
                        <div class="social-links">
                            <a href="{{route('index')}}">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="{{route('index')}}">
                                <i class="fa fa-facebook-official"></i>
                            </a>
                            <a href="{{route('index')}}">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="{{route('index')}}">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-top -->

        <header id="header" class="header clearfix">
            <div class="header-wrap clearfix">
                <div class="container">
                    <div class="row">
                        <div class="flat-wrapper">
                            <div  class="logo">
                                <a href="{{route('index')}}">
                                    <img src="{{asset('images/logo3.png')}}" alt="Logo">
                                </a>
                            </div><!-- /.logo -->
                            <div class="btn-menu">
                                <span></span>
                            </div><!-- //mobile menu button -->

                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">

                                    <ul class="menu">
                                        <li class="home">

                                            <a href="{{route('index')}}">Home</a>

                                        </li>

                                        <li><a href="{{route('about')}}">Company</a>
                                            <ul class="submenu">
                                                <li><a href="{{route('about')}}">About Us</a></li>
                                                <li><a href="{{route('history')}}">Company History</a></li>
                                                <li><a href="{{route('team')}}">Our People</a></li>
                                            </ul><!-- /.submenu -->
                                        </li>

                                        <li>

                                            <a href="{{route('clearing')}}">Services</a>
                                            <ul class="submenu">
                                                <li><a href="{{route('clearing')}}">Clearing & Forwarding</a></li>
                                                <li><a href="{{route('land')}}">Over-land Transport</a></li>
                                                <li><a href="{{route('sea')}}">Sea freight</a></li>
                                                <li><a href="{{route('warehouse')}}">Warehousing and storage</a></li>
                                                <li><a href="{{route('cargo')}}">Cargo</a></li>
                                                <li><a href="{{route('logistics')}}">Logistics Solutions</a></li>
                                            </ul><!-- /.submenu -->


                                        </li>
                                        <li>

                                            <a href="{{route('gallery')}}">Gallery</a>

                                        </li>
                                        <li>

                                            <a href="{{route('news')}}">News</a>

                                        </li>


                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                    </ul><!-- /.menu -->
                                </nav><!-- /.mainnav -->
                            </div><!-- /.nav-wrap -->
                        </div><!-- /.flat-wrapper -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.header-inner -->
        </header><!-- /.header -->
    </div><!-- /.site-header -->

    <!-- Slider -->
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>
                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="{{asset('images/slides/1.jpg')}}" alt="slider-image" />
                    <div class="tp-caption sfl title-slide center" data-x="40" data-y="100" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                        <span class="scheme">Fair Logistics Agency<br>Limited</span>

                    </div>
                    <div class="tp-caption sfr desc-slide center" data-x="40" data-y="240" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        An Expert in Shipping, Clearing, Forwarding, Transportation and<br>General Suppliers.
                    </div>
                    <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="40" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="{{route('index')}}">Read more</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>

                    <div class="tp-caption sfr flat-button-slider" data-x="225" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="{{route('index')}}">Talk to us</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
                </li>

                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="{{asset('images/slides/2.jpg')}}" alt="slider-image" />
                    <div class="tp-caption sfl title-slide center" data-x="40" data-y="100" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                        Overland<br>Transportion
                    </div>
                    <div class="tp-caption sfr desc-slide center" data-x="40" data-y="240" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        The road transport industry is the backbone of strong<br>economies and dynamic societies.
                    </div>
                    <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="40" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="{{route('index')}}">Read more</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>

                    <div class="tp-caption sfr flat-button-slider" data-x="225" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="{{route('index')}}">Talk to us</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
                </li>

                <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="{{asset('images/slides/3.jpg')}}" alt="slider-image" />
                    <div class="tp-caption sfl title-slide center" data-x="40" data-y="100" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                        Clearing and<br>Forwarding
                    </div>
                    <div class="tp-caption sfr desc-slide center" data-x="40" data-y="240" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                        Have an experience of a highly efficient and speedy <br>clearing & forwarding process
                    </div>
                    <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="40" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="{{route('index')}}">Read more</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>

                    <div class="tp-caption sfr flat-button-slider" data-x="225" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="{{route('index')}}">Talk to us</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
                </li>
            </ul>
        </div>
    </div>

        @yield('content')

<!-- Map -->
    <div class="flat-row pad-top0px pad-bottom0px">
        <div id="flat-map"></div>
    </div><!-- /.flat-row -->

    <!-- Footer -->
    <footer class="footer">
        <div class="content-bottom-widgets">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="ft-wrapper clearfix">
                            <div class="footer-50">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="counter">
                                            <div class="counter-image"><i class="fa fa-building-o"></i></div>
                                            <div class="numb-count" data-to="23" data-speed="3000" data-waypoint-active="yes">23</div>
                                            <div class="counter-title">
                                                Offices Countrywide
                                            </div>
                                        </div>
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-4">
                                        <div class="counter ft-style1">
                                            <div class="counter-image"><i class="fa fa-group"></i></div>
                                            <div class="numb-count" data-to="14" data-speed="3000" data-waypoint-active="yes">14</div>
                                            <div class="counter-title">
                                                Hardworking people
                                            </div>
                                        </div>
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-4">
                                        <div class="counter ft-style2">
                                            <div class="counter-image"><i class="fa fa-globe"></i></div>
                                            <div class="numb-count" data-to="15" data-speed="3000" data-waypoint-active="yes">15</div>
                                            <div class="counter-title">
                                                Counties covered
                                            </div>
                                        </div>
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
                            </div><!-- /.footer-50 -->


                        </div><!-- /.ft-wrapper -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-widgets -->

        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widge widget_text">
                            <div class="textwidget">
                                <h2>Fair Logistics-Fresh/Dry Food stuffs &amp; Solid Fuel Suppliers .</h2>
                            </div>
                        </div><!-- /.widget_text -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget widget_recent_entries">
                            <h4 class="widget-title">Recent News</h4>
                            <ul>
                                <li>
                                    <a href="blog-single.html">Raising productivity &amp; morale in the warehouse</a>
                                    <span class="post-date">May 25, 2020</span>
                                </li>
                                <li>
                                    <a href="blog-single.html">Seafield logistics goes into administration</a>
                                    <span class="post-date">May 25, 2020</span>
                                </li>
                            </ul>
                        </div><!-- /.widget_recent_entries -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title">Information</h3>
                            <div class="menu-footer-menu-container">
                                <ul class="menu-footer-menu">
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('index')}}">About us</a></li>
                                    <li><a href="{{route('index')}}">Services</a></li>
                                    <li><a href="{{route('index')}}">My Account</a></li>
                                    <li><a href="{{route('index')}}">Contact us</a></li>
                                    <li><a href="{{route('index')}}">News</a></li>
                                    <li><a href="{{route('index')}}">Gallery</a></li>
                                    <li><a href="{{route('index')}}">Careers</a></li>
                                    <li><a href="{{route('index')}}">FAQ</a></li>
                                    <li><a href="{{route('index')}}">Partners</a></li>

                                </ul>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget widget_text information">
                            <h3 class="widget-title">Contact Us</h3>
                            <div class="textwidget">
                                <p><strong>P.o Box 2802-80100, Mombasa, Amal Plaza, Mamba Round About</strong></p>
                                <p>
                                    <i class="fa fa-phone"></i>0722 353 372<br>
                                    <i class="fa fa-envelope"></i>info@fairlogistics.net
                                </p>
                                <p>
                                    <i class="fa fa-phone"></i>0729 414 008<br>
                                    <i class="fa fa-envelope"></i>fairlogisticsagency@gmail.com
                                </p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-content -->

        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="ft-wrap clearfix">
                            <div class="social-links">
                                <a href="{{route('index')}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{route('index')}}"><i class="fa fa-facebook-official"></i></a>
                                <a href="{{route('index')}}"><i class="fa fa-google-plus"></i></a>
                                <a href="{{route('index')}}"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <div class="copyright">
                                <div class="copyright-content">
                                    Copyright © 2020. <a href="{{route('index')}}">Fair Logistics Agency Limited</a>
                                </div>
                            </div>
                        </div><!-- /.ft-wrap -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-content -->
    </footer>

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-chevron-up"></i>
    </a>

</div>

<!-- Javascript -->
<script type="text/javascript" src="{{asset('javascript/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery-waypoints.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery-countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery.cookie.js')}}"></script>
<script type="text/javascript" src="{{asset('https://maps.googleapis.com/maps/api/js?sensor=false')}}"></script>
<script type="text/javascript" src="{{asset('javascript/gmap3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery-validate.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/main.js')}}"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="{{asset('javascript/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/slider.js')}}"></script>

</body>
</html>

