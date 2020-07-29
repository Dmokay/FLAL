@extends('layouts.main2')

@section('content')

    <!-- Page title -->
    <div class="page-title parallax-style parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2>Air Freight</h2>
                    </div><!-- /.page-title-heading -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <div class="page-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="flat-wrapper">
                    <div class="breadcrumbs">
                        <ul class="trail-items">
                            <li class="trail-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="trail-item"><a href="{{route('clearing')}}">Services</a></li>
                            <li>Cargo</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.flat-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-breadcrumbs -->

    <div class="flat-row flat-general sidebar-left pad-bottom65px">
        <div class="container">
            <div class="row">
                <div class="general">
                    <div class="general-slider services-slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <a class="popup-gallery" href="{{asset('images/cargo/cargo1.jpg')}}"><img src="{{asset('images/cargo/cargo1.jpg')}}" alt="images"></a>
                                </li>
                                <li>
                                    <a class="popup-gallery" href="{{asset('images/cargo/cargo2.jpg')}}"><img src="{{asset('images/cargo/cargo2.jpg')}}" alt="images"></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.services-slider -->

                    <div class="flat-divider d10px"></div>

                    <h3 class="flat-title-section style">Service <span>overview</span></h3>
                    <div><p>Our technical and human teams are prepared to receive and handle your cargo with utmost expertise. We are always available to help you with any queries you might have, or if you want to consult in length your logistic requirements. We would study your requirements and provide you with a quote that would not only suit your budget, but would also save you considerable amount of money in the long term. And, we guarantee that.</p>
                        <p>Our logistics processes, services, tools and systems in combination with strategic warehouse locations help our clients to meet their business logistic needs and achieve their long term business goals with much more accuracy. Moreover, our supply chain management experts would design a logistic process especially for you to align with your business in an integrated fashion. </p>
                        <p>Whether it is the one time delivery you need done, or whether you are looking for professional and commercial trucking service to offload your ongoing trucking requirements, we can assure you of the best services at the most economical pricing.</p>
                    </div>

                    <div class="flat-divider d50px"></div>

                    <div class="flat-tabs">
                        <ul class="menu-tabs">
                            <li class="active"><a href="{{url('#')}}">Protection</a></li>
                            <li class=""><a href="{{url('#')}}">Versatility</a></li>
                            <li class=""><a href="{{url('#')}}">Customized solutions</a></li>
                        </ul>
                        <div class="content-tab">
                            <div class="content-inner active">
                                <p>First and foremost, transport packaging must serve to protect goods in transit. Given the nature of road and rail infrastructure, transport packaging should be manufactured so as to absorb unintended shocks, impacts or accidents of any kind, as well as protect against the elements such as humidity, excessive temperatures or heavy weather.</p>
                            </div><!-- /.content-inner -->

                            <div class="content-inner">
                                <p>Transport packaging must take into account the possibility of multiple stages in transit before the product reaches its final destination. This includes multiple off-loading, re-packaging, re-loading and possibly storage of the product(s). Transport packaging should thus be versatile enough to facilitate this process when necessary.</p>
                            </div><!-- /.content-inner -->
                            <div class="content-inner">
                                <p>Transport packaging should be as individual as the product itself and perfectly match the product’s consistency, size and dimensions. The focus here is on packaging that is lightweight, robust, easy to handle and that takes up as little space as possible.</p>
                            </div><!-- /.content-inner -->
                        </div><!-- /.content-tab -->
                    </div><!-- /.flat-tabs -->
                </div><!-- /.general -->

                <div class="general-sidebars">
                    <div class="sidebar-wrap">
                        <div class="sidebar">
                            <div class="widget widget_nav_menu">
                                <ul class="nav_menu">
                                    <li class="menu-item">
                                        <a href="{{route('clearing')}}">All services</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('clearing')}}">Clearing & Forwarding</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('land')}}">Over-land Transport</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('sea')}}">Sea freight</a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="active" href="{{route('air')}}">Air freight</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('board')}}">Board Station</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('warehouse')}}">Warehousing and storage</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('cargo')}}">Cargo</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('logistics')}}">Logistics Solutions</a>
                                    </li>
                                </ul>
                            </div><!-- /.widget_nav_menu -->

                            <div class="widget widget_recent_entries">
                                <h4 class="widget-title">Recent news</h4>
                                <ul>
                                    <li>
                                        <a href="{{route('news')}}">New law to axe rogue clearing agents, address cargo delays.</a>
                                        <span class="post-date">Jan 21, 2020</span>
                                    </li>
                                    <li>
                                        <a href="{{route('clearing')}}">African logistics, warehousing sector set to overcome pandemic storm</a>
                                        <span class="post-date">May 20, 2020</span>
                                    </li>
                                </ul>
                            </div><!-- /.widget_recent_entries -->

                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <div class="content-text">
                                        <h4 class="title">Why choose us?</h4>
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-right"></i> Over 20 years experience</li>
                                            <li><i class="fa fa-arrow-circle-right"></i>  Well over 15 Trucks</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Reliable Service</li>
                                            <li><i class="fa fa-arrow-circle-right"></i>  On Time Deliveries</li>
                                            <li><i class="fa fa-arrow-circle-right"></i>  Professional Drivers</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Excellent Customer Service</li>
                                        </ul>
                                    </div>
                                </div><!-- /.textwidget -->
                            </div><!-- /.widget_text -->

                        </div><!-- /.sidebar -->
                    </div><!-- /.sidebar-wrap -->
                </div><!-- /.general-sidebars -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.blog -->

@endsection
