@extends('layouts.main2')

@section('content')

    <!-- Page title -->
    <div class="page-title parallax-style parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2>Sea Freight</h2>
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
                                    <a class="popup-gallery" href="{{asset('images/sea/melati.jpg')}}"><img src="{{asset('images/sea/melati.jpg')}}" alt="images"></a>
                                </li>
                                <li>
                                    <a class="popup-gallery" href="{{asset('images/sea/s5.jpg')}}"><img src="{{asset('images/sea/s5.jpg')}}" alt="images"></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.services-slider -->

                    <div class="flat-divider d10px"></div>

                    <h3 class="flat-title-section style">Service <span>overview</span></h3>
                    <div>
                        <p>By using a combination of sea and land freight, you bring added flexibility to your supply chain. Agility helps companies find the right cost-time balance, maximizing the affordability of ocean movements and the convenience of land shipments. We have partnerships with the world’s most reliable sea carriers, so we can offer seamless shipping from origin to destination, for one rate, under a single document.</p>
                        <p>Our freight professionals identify the forwarding and logistics services that are best to help you meet your objectives. With personal service and a broader range of freight products, we make sure your supply chain finds the best balance between urgency and cost.</p>
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
                                        <a class="active" href="{{route('sea')}}">Sea freight</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('air')}}">Air freight</a>
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
