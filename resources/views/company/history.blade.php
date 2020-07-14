@extends('layouts.main2')

@section('content')

<!-- Page title -->
<div class="page-title parallax-style parallax1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h2>Company history</h2>
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
                        <li class="trail-item"><a href="{{route('about')}}">About us</a></li>
                        <li>Company history</li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-breadcrumbs -->

<div class="flat-row flat-general sidebar-right">
    <div class="container">
        <div class="row">
            <div class="general">
                <img src="images/img-single/ch.jpg" alt="images">

                <div class="flat-divider d30px"></div>

                <h3 class="flat-title-section style">Company <span>history</span></h3>
                <div><p><span class="scheme">Canava</span> Transport headquartered in NewYork, US, has been providing truckload services for over 25 years. Initially founded as a traditional truckload carrier, <span class="scheme">Canava</span> has diversified itself as a true transportation solutions provider and technology innovator, committed to delivering unique, high-value and customized solutions to its customers.</p></div>

                <div class="flat-divider d55px"></div>

                <div class="flat-history">
                    <ul class="history">
                        <li>
                            <h3 class="title"><span class="year">1988</span> Start in New York, US</h3>
                            <p>Canava was founded in September of 1988 by John Doe as a six truck, twelve trailer operation in NewYork, US, just outside of Pittsburgh. Prior to starting Canava, John Doe was introduced to trucking and developed his passion for the industry, working for less-than-truckload (LTL) providers Hammel’s Express and PITT OHIO (formerly PITT OHIO EXPRESS) from 1976 through 1988. When he left to start his own company, he took with him the values of hard work and dedication to service as the founding principles of Canava Transport.</p>
                        </li>
                        <li>
                            <h3 class="title"><span class="year">1999</span> Expanded its core territory</h3>
                            <p>Throughout the mid to late 1990´s, Canava expanded its core territory to cover the entire Mid-Atlantic region, growing both organically and through acquisition; as well as offering its customers over-the-road truckload and volume LTL services. By 1999, Canava was operating out of 10 terminals and had finished completion of its current corporate headquarters in Chicago, US. It was at this time Canava broadened its services by unveiling a non-asset based Logistics division to offer customers 50 state capability through a strategic partner network.</p>
                        </li>
                        <li>
                            <h3 class="title"><span class="year">2005</span> Merge with privately held LTL carrier</h3>
                            <p>In 2005, Canava announced its intentions to merge with privately held LTL carrier, PITT OHIO, to offer both customer bases an unmatched network of asset and non-asset based services for both LTL and Truckload. The customer centric philosophies that brought the companies together serves as a backbone of the partnership, which continues to evolve today.</p>
                        </li>
                        <li>
                            <h3 class="title"><span class="year">2007</span> Introduced on-board computing systems</h3>
                            <p>Understanding the critical link in the customer supply chain, Canava introduced on-board computing systems in each of its tractors in late 2007. This breakthrough enabled Canava customers the ability to track and trace their freight in real time on the company website; as well as providing up to the minute critical data events via email and electronic data interchange (EDI).</p>
                        </li>
                        <li>
                            <h3 class="title"><span class="year">2016</span> Present</h3>
                            <p>Today, Canava operates more than 350 tractors and 1300 trailers in its 14 terminal network throughout the Mid-Atlantic region. Our hybrid approach to Truckload transportation and Logistics services provide our customers the flexibility in their supply chain to meet even their toughest challenges. Canava’s customer centric philosophy is centered around delivering high-value, cost effective transportation solutions that are truly customized to your needs.</p>
                        </li>
                    </ul>
                </div><!-- /.flat-history -->
            </div><!-- /.general -->

            <div class="general-sidebars">
                <div class="sidebar-wrap">
                    <div class="sidebar">
                        <div class="widget widget_nav_menu">
                            <ul class="nav_menu">
                                <li class="menu-item">
                                    <a href="about.html">About us</a>
                                </li>
                                <li class="menu-item">
                                    <a class="active" href="company-history.html">Company history</a>
                                </li>
                                <li class="menu-item">
                                    <a href="our-people.html">our people</a>
                                </li>
                                <li class="menu-item">
                                    <a href="partners.html">Partners</a>
                                </li>
                                <li class="menu-item">
                                    <a href="careers.html">Careers</a>
                                </li>
                                <li class="menu-item">
                                    <a href="faq.html">faq</a>
                                </li>
                                <li class="menu-item">
                                    <a href="testimonials.html">Testimonials</a>
                                </li>
                            </ul>
                        </div><!-- /.widget_nav_menu -->

                        <div class="widget widget_recent_entries">
                            <h4 class="widget-title">Company news</h4>
                            <ul>
                                <li>
                                    <a href="blog-single.html">Raising productivity &amp; morale in the warehouse</a>
                                    <span class="post-date">March 25, 2016</span>
                                </li>
                                <li>
                                    <a href="blog-single.html">Seafield logistics goes into administration</a>
                                    <span class="post-date">March 25, 2016</span>
                                </li>
                                <li>
                                    <a href="blog-single.html">Transport managers grow scarce</a>
                                    <span class="post-date">March 25, 2016</span>
                                </li>
                            </ul>
                        </div><!-- /.widget_recent_entries -->

                        <div class="widget widget_text">
                            <div class="textwidget">
                                <div class="content-text">
                                    <h4 class="title">How can we help you?</h4>
                                    <p>Our customer service standards provide information on how we will handle your enquiry. There is also compliments and complaints information to help you when you lodge feedback with us.</p>
                                    <a class="button white" href="company-history.html#">Contact Us<i class="fa fa-chevron-right"></i></a>
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
