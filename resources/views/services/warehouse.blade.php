@extends('layouts.main2')

@section('content')

    <!-- Page title -->
    <div class="page-title parallax-style parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2>Warehouse & Storage</h2>
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
                                    <a class="popup-gallery" href="{{asset('images/warehouse/wh1.jpg')}}"><img src="{{asset('images/warehouse/wh1.jpg')}}" alt="images"></a>
                                </li>
                                <li>
                                    <a class="popup-gallery" href="{{asset('images/warehouse/wh2.jpg')}}"><img src="{{asset('images/warehouse/wh2.jpg')}}" alt="images"></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.services-slider -->

                    <div class="flat-divider d10px"></div>

                    <h3 class="flat-title-section style">Service <span>overview</span></h3>
                    <div>
                        <p>Warehousing and Storage services offered by Fair Logistics have become an integral part of our client’s requirements. We specialise in providing customised storage solutions for our customers.</p>
                        <p>Whether you require short, medium or long term warehousing, our multi-user facilities provide scalable solutions that share cost of of resources. We can also take care of your warehouse operations and labour functions, making the most of your facility while you focus on your core business.</p>
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
                                        <a href="{{route('air')}}">Air freight</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('board')}}">Boarder Station</a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="active" href="{{route('warehouse')}}">Warehousing and storage</a>
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
                                        <a href="{{route('news')}}">Global air cargo demand plummets</a>
                                        <span class="post-date">June 9, 2020</span>
                                    </li>
                                </ul>
                            </div><!-- /.widget_recent_entries -->

                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <div class="content-text">
                                        <h4 class="title">Why choose us?</h4>
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-right"></i> Over 20 years experience</li>
                                            <li><i class="fa fa-arrow-circle-right"></i>  Well over 100 Trucks</li>
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
