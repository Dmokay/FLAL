@extends('layouts.main2')

@section('content')

    <!-- Page title -->
    <div class="page-title parallax parallax2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2>About us</h2>
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
                        <h2 class="trail-browse"></h2>
                        <ul class="trail-items">
                            <li class="trail-item"><a href="{{route('index')}}">Home</a></li>
                            <li>About us</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.flat-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-breadcrumbs -->

    <div class="flat-row flat-general sidebar-right pad-bottom75px">
        <div class="container">
            <div class="row">
                <div class="general">
                    <div class="general-slider about-slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <a class="popup-gallery" href="{{asset('images/transport/transit.jpg')}}"><img src="{{asset('images/transport/transit.jpg')}}" alt="images"></a>
                                </li>
                                <li>
                                    <a class="popup-gallery" href="{{asset('images/warehouse/wh1.jpg')}}"><img src="{{asset('images/warehouse/wh1.jpg')}}" alt="images"></a>
                                </li>
                                <li>
                                    <a class="popup-gallery" href="{{asset('images/sea/melati2.jpg')}}"><img src="{{asset('images/sea/melati2.jpg')}}" alt="images"></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.about-slider -->

                    <div class="flat-divider d30px"></div>

                    <h3 class="flat-title-section style mag-top10px">Company <span>overview</span></h3>
                    <p>At Fair Logistics, we know time is of the essence. We pride ourselves in being regarded as one of the most reliable and affordable logistic and warehousing service providers in the country. As a third party logistic service provider, we excel at a range of logistic services, which includes trucking services, warehousing services, logistic services, and a range of other ancillary services. We have years of experience in the business of logistics, warehousing, distribution, trucking and supply chain management services, and aim to provide our clients with convenience, reliability and affordability through our premium logistic services.</p>
                    <p>Our team of experts at all levels of our services have years of experience backing them, which adds the credibility of an expert workforce. This also helps us in cutting down response time, and providing punctual delivery and services at all times, whether it is trucking service or warehousing services. Our goal is to make a positive difference in your business through our services, and build long term relationship with you. Our commitment to our clients can be seen by the amount of emphasis we lay on team work, customer support services and making technological upgrades in our logistic process and equipment from time to time.</p>
                    <p>Our experience in all the fields we serve in, and the range of services we provide, makes us one of the most comprehensive logistic service providers in the nation. And, with the help of continuous support and trust of our clients, we aim to stay at the top of the game, and humbly so. Our sophisticated systems, neatly designed logistic process, state of the art logistic tools and equipment, most advanced carriers, custom tailored services, and dedication to keep the costs low for end users, help us to provide logistic solution that aligns well with our clients’ requirements. We welcome you to our site, and request you to consult with our logistic experts for your logistic needs, and rest assured of getting done.</p>
                    <p>We have years of experience in the business of logistics, warehousing, distribution, trucking and supply chain management services, and aim to provide our clients with convenience, reliability and affordability through our premium logistic services.</p>
                    <div class="promobox">
                        <h5 class="promobox-title mag-top0px">With utmost care and timely consideration, We will handle your cargo and deliver it safe and on time.</h5>
                        <div class="group-btn">
                            <a class="button black" href="{{route('contact')}}">Talk to us <i class="fa fa-chevron-right"></i></a>

                        </div>
                    </div><!-- /.promobox -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="flat-tabs">
                                <ul class="menu-tabs">
                                    <li class="active"><a href="{{url('#')}}">Safety</a></li>
                                    <li><a href="{{url('#')}}">Security</a></li>
                                </ul>
                                <div class="content-tab">
                                    <div class="content-inner">
                                        <p>At Fair Logistics, ensuring the safety of our customers, employees and our communities is our priority. We understand the importance of continuous training and are proud of our safety knowledge, experienced staff and ability to exceed industry standards year after year. We have established and continually maintain excellent motor carrier safety ratings and low accident frequencies.</p>
                                        <p>As a company, we have a solid safety performance history and will continue to be a leader in the area of safety and compliance, due to the dedication and professionalism of our fleet of drivers and vehicle maintenance personnel.</p>
                                    </div><!-- /.content-inner -->

                                    <div class="content-inner">
                                        <p>At Fair Logistics, we offer industry-leading asset protection and security compliance programs.</p>
                                        <p>We understands that our customers may have important and unique needs related to security regulatory compliance, high-risk products, or brand protection. We offer consultation and proactive partnership to ensure that our customers’ security needs are met.</p>
                                        <p>By leveraging modern and proven technologies, we provide for the integrity of customer assets while in-transit or at one of our facilities.</p>
                                    </div><!-- /.content-inner -->
                                </div><!-- /.content-tab -->
                            </div><!-- /.flat-tabs -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <img src="{{asset('images/cargo/3.jpg')}}" alt="images">
                            <div class="flat-divider d30px"></div>
                            <img src="{{asset('images/img-single/2.jpg')}}" alt="images">
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.general -->

                <div class="general-sidebars">
                    <div class="sidebar-wrap">
                        <div class="sidebar">
                            <div class="widget widget_nav_menu">
                                <ul class="nav_menu">
                                    <li class="menu-item">
                                        <a class="active" href="{{route('about')}}">About us</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url('#')}}">Company history</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('team')}}">our people</a>
                                    </li>

                                </ul>
                            </div><!-- /.widget_nav_menu -->

                            <div class="widget widget_recent_entries">
                                <h4 class="widget-title">Company Values</h4>
                                <ul>
                                    <li>
                                        <a href="{{route('about')}}">Our Mission</a>
                                        <span>We are dedicated to providing the customer with the Most satisfying shipping, Clearing and Forwarding experience</span>
                                    </li>
                                    <li>
                                        <a href="{{route('about')}}">Our Vision</a>
                                        <span>To create a service-based company whose first ambition is to continually exceed the customers' expectations</span>
                                    </li>

                                </ul>
                            </div><!-- /.widget_recent_entries -->

                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <div class="content-text">
                                        <h4 class="title">How can we help you?</h4>
                                        <p>Our customer service standards provide information on how we will handle your enquiry. There is also compliments and complaints information to help you when you lodge feedback with us.</p>
                                        <a class="button white" href="{{route('contact')}}">Contact Us<i class="fa fa-chevron-right"></i></a>
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
