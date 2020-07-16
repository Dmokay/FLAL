@extends('layouts.main')

@section('content')

    <!-- Promobox -->
    <div class="flat-row bg-scheme pad-top20px pad-bottom20px">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="clients-image style">
                        <div class="item-img">
                            <img src="{{asset('images/customers/diamond_industries.jpg')}}" alt="images">
                        </div>
                        <p class="tooltip">Diamond Industries</p>
                    </div>
                </div><!-- /.col-md-2 -->

                <div class="col-md-2">
                    <div class="clients-image style">
                        <div class="item-img">
                            <img src="{{asset('images/customers/mbs_technical.jpg')}}" alt="images">
                        </div>
                        <p class="tooltip">Technical University of Mombasa</p>
                    </div>
                </div><!-- /.col-md-2 -->

                <div class="col-md-2">
                    <div class="clients-image style">
                        <div class="item-img">
                            <img src="{{asset('images/customers/pacific_international.jpg')}}" alt="images">
                        </div>
                        <p class="tooltip">Pacific International Ltd</p>
                    </div>
                </div><!-- /.col-md-2 -->

                <div class="col-md-2">
                    <div class="clients-image style">
                        <div class="item-img">
                            <img src="{{asset('images/customers/pwani_oil.jpg')}}" alt="images">
                        </div>
                        <p class="tooltip">Pwani Oil Products Ltd</p>
                    </div>
                </div><!-- /.col-md-2 -->

                <div class="col-md-2">
                    <div class="clients-image style">
                        <div class="item-img">
                            <img src="{{asset('images/customers/west_coast.jpg')}}" alt="images">
                        </div>
                        <p class="tooltip">West Coast Oil Ltd</p>
                    </div>
                </div><!-- /.col-md-2 -->

                <div class="col-md-2">
                    <div class="clients-image style">
                        <div class="item-img">
                            <img src="{{asset('images/customers/diamond_industries.jpg')}}" alt="images">
                        </div>
                        <p class="tooltip">Bradbell</p>
                    </div>
                </div><!-- /.col-md-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.flat-row -->

        <!-- Flat imagebox -->
        <div class="flat-row parallax-style parallax1">
            <div class="overlay bg-scheme1"></div>
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="flat-imagebox clearfix">
                            <div class="flat-item item-three-column">
                                <div class="imagebox">
                                    <div class="box-wrapper">
                                        <div class="box-image">
                                            <img src="{{asset('images/imagebox/1.jpg')}}" alt="images">
                                        </div>
                                        <div class="box-header">
                                            <h5 class="box-title">
                                                <a href="{{route('index')}}">Why choose Fair Logistics ?</a>
                                            </h5>
                                        </div>
                                        <div class="box-content">
                                            <div class="box-desc">At Fair Logistics, we know time is of the essence. We have used our legacy Truckload service in the coastal part of Kenya to shape what our company is today.</div>

                                        </div>
                                    </div>
                                </div><!-- /.imagebox -->
                            </div><!-- /.item-three-column -->

                            <div class="flat-item item-three-column">
                                <div class="imagebox">
                                    <div class="box-wrapper">
                                        <div class="box-image">
                                            <img src="{{asset('images/imagebox/2.jpg')}}" alt="images">
                                        </div>
                                        <div class="box-header">
                                            <h5 class="box-title">
                                                <a href="{{route('index')}}">Our Mission</a>
                                            </h5>
                                        </div>
                                        <div class="box-content">
                                            <div class="box-desc">We are dedicated to providing the customer with the Most satisfying shipping, Clearing and Forwarding experience</div>

                                        </div>
                                    </div>
                                </div><!-- /.imagebox -->
                            </div><!-- /.item-three-column -->

                            <div class="flat-item item-three-column">
                                <div class="imagebox">
                                    <div class="box-wrapper">
                                        <div class="box-image">
                                            <img src="{{asset('images/imagebox/3.jpg')}}" alt="images">
                                        </div>
                                        <div class="box-header">
                                            <h5 class="box-title">
                                                <a href="{{route('index')}}">What makes Fair Logistics Agency stand out?</a>
                                            </h5>
                                        </div>
                                        <div class="box-content">
                                            <div class="box-desc">We are known for reasonably priced, environmentally sensitive and convenient Service Provision that is second to none.</div>

                                        </div>
                                    </div>
                                </div><!-- /.imagebox -->
                            </div><!-- /.item-three-column -->
                        </div><!-- /.flat-imagebox -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        <!-- Flat iconbox style -->
        <div class="flat-row pad-top60px pad-bottom10px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="flat-title-section style">What we <span class="scheme">offer.</span></h2>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="flat-divider d40px"></div>
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="flat-iconbox-style clearfix">
                            <div class="flat-item item-three-column">
                                <div class="iconbox style1">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa fa-mail-forward"></i></div>
                                        <h5 class="box-title"><a href="{{route('clearing')}}">Clearing & Forwarding</a></h5>
                                    </div>
                                    <div class="box-content">
                                        With our extensive network, we will find a competitive and efficient solution to your next assignment.

                                    </div>
                                </div>
                            </div><!-- /.item-three-column -->

                            <div class="flat-item item-three-column">
                                <div class="iconbox style1">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa fa-truck"></i></div>
                                        <h5 class="box-title"><a href="{{route('clearing')}}">Over-land Transport</a></h5>
                                    </div>
                                    <div class="box-content">
                                        Combined rail road transport is particularly well suited to the shipping of hazardous goods since it reduces risk.
                                    </div>
                                </div>
                            </div><!-- /.item-three-column -->

                            <div class="flat-item item-three-column">
                                <div class="iconbox style1">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa fa-ship"></i></div>
                                        <h5 class="box-title"><a href="{{route('clearing')}}">Sea freight</a></h5>
                                    </div>
                                    <div class="box-content">
                                        By using a combination of sea and land freight, you bring added flexibility to your supply chain.

                                    </div>
                                </div>
                            </div><!-- /.item-three-column -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="flat-iconbox-style clearfix">

                            <div class="flat-item item-three-column">
                                <div class="iconbox style1">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa fa-cube"></i></div>
                                        <h5 class="box-title"><a href="{{route('clearing')}}">Warehousing and storage</a></h5>
                                    </div>
                                    <div class="box-content">
                                        Fair Logistics is able to offer heated or unheated warehouse solutions both for short-term and for long-term storage.

                                    </div>
                                </div>
                            </div><!-- /.item-three-column -->

                            <div class="flat-item item-three-column">
                                <div class="iconbox style1">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa fa-dropbox"></i></div>
                                        <h5 class="box-title"><a href="{{route('clearing')}}">Cargo</a></h5>
                                    </div>
                                    <div class="box-content">
                                        Ground transport along with other ancillary services, help us to provide tailor made logistic solutions to our clients.
                                    </div>
                                </div>
                            </div><!-- /.item-three-column -->

                            <div class="flat-item item-three-column">
                                <div class="iconbox style1">
                                    <div class="box-header">
                                        <div class="box-icon"><i class="fa fa-globe"></i></div>
                                        <h5 class="box-title"><a href="{{route('clearing')}}">Logistics Solutions</a></h5>
                                    </div>
                                    <div class="box-content">
                                        Smart and sustainable business requires the skills of logistics experts who are able to think ahead.
                                    </div>
                                </div>
                            </div><!-- /.item-three-column -->
                        </div><!-- /.flat-iconbox-style -->
                    </div><!-- /.flat-wrapper -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        <div class="flat-row parallax parallax4 pad-top120px pad-bottom120px">
            <div class="overlay bg-scheme1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="make-quote">
                            <h1 class="title">From around the World to<br>around the country.</h1>
                            <h5 class="desc">We will take care of your cargo and deliver it safe and on time.</h5>
                            <div class="group-btn">
                                <a class="button lg" href="{{url('home-header-transparent.html#')}}">make a quote <i class="fa fa-chevron-right"></i></a>
                                <a class="button lg outline style1" href="{{route('index')}}">Talk to us <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div><!-- /.make-quote -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        <!-- Promobox -->
        <div class="flat-row bg-scheme1 pad-top0px pad-bottom0px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="promobox style1 style2 clearfix">
                            <h5 class="promobox-title">Contact us now to get quote for all your global shipping and cargo need.</h5>
                            <a class="button black sm" href="{{route('index')}}">Talk to us<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        <div class="flat-row blog-shortcode blog-home pad-top60px pad-bottom0px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="flat-title-section style mag-bottom0px">Latest <span class="scheme">news.</span></h2>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->

                <div class="row">
                    <div class="content-wrap">
                        <div class="main-content">
                            <div class="main-content-wrap">
                                <div class="content-inner clearfix">
                                    <article class="flat-item item-three-column blog-post">
                                        <div class="entry-wrapper">
                                            <div class="entry-cover">
                                                <a href="{{route('index')}}">
                                                    <img src="{{asset('images/blog/b1.jpg')}}" alt="images">
                                                </a>
                                            </div><!-- /.entry-cover -->
                                            <div class="entry-header">
                                                <div class="entry-header-content">
                                                    <h4 class="entry-time">
                                                        <span class="entry-day">25</span>
                                                        <span class="entry-month">Mar</span>
                                                    </h4>
                                                    <h4 class="entry-title">
                                                        <a href="{{route('index')}}">Raising productivity &amp; morale in the warehouse</a>
                                                    </h4>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->

                                            <div class="entry-content">
                                                <p>It’s a well-known fact that happy and motivated workers produce better results. A recent study found that happier workers were 12% ...</p>
                                            </div><!-- /.entry-content -->
                                            <div class="entry-footer">
                                                <div class="entry-meta">
                                                    <i class="fa fa-user"></i>
                                                    <span class="entry-author"><a href="{{route('index')}}">admin</a></span>
                                                    <i class="fa fa-folder-open"></i>
                                                    <span class="entry-categories"><a href="{{route('index')}}">Warehouse</a></span>
                                                    <i class="fa fa-comment"></i>
                                                    <span class="entry-comments-link"><a href="{{route('index')}}">Comments</a></span>
                                                </div>
                                            </div>
                                        </div><!-- /.entry-wrapper -->
                                    </article><!-- /.blog-post -->

                                    <article class="flat-item item-three-column blog-post">
                                        <div class="entry-wrapper">
                                            <div class="entry-cover">
                                                <a href="{{route('index')}}">
                                                    <img src="{{asset('images/blog/b2.jpg')}}" alt="images">
                                                </a>
                                            </div><!-- /.entry-cover -->
                                            <div class="entry-header">
                                                <div class="entry-header-content">
                                                    <h4 class="entry-time">
                                                        <span class="entry-day">25</span>
                                                        <span class="entry-month">Mar</span>
                                                    </h4>
                                                    <h4 class="entry-title">
                                                        <a href="{{route('index')}}">Seafield logistics goes into administration</a>
                                                    </h4>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->

                                            <div class="entry-content">
                                                <p>Seafield Logistics has gone into administration and two of its operational units have been sold. David Riley, Les Ross and Joe ...</p>
                                            </div><!-- /.entry-content -->
                                            <div class="entry-footer">
                                                <div class="entry-meta">
                                                    <i class="fa fa-user"></i>
                                                    <span class="entry-author"><a href="{{route('index')}}">admin</a></span>
                                                    <i class="fa fa-folder-open"></i>
                                                    <span class="entry-categories"><a href="{{route('index')}}">Jobs</a></span>
                                                    <i class="fa fa-comment"></i>
                                                    <span class="entry-comments-link"><a href="{{route('index')}}">Comments</a></span>
                                                </div>
                                            </div>
                                        </div><!-- /.entry-wrapper -->
                                    </article><!-- /.blog-post -->

                                    <article class="flat-item item-three-column blog-post">
                                        <div class="entry-wrapper">
                                            <div class="entry-cover">
                                                <a href="{{route('index')}}">
                                                    <img src="{{asset('images/blog/b3.jpg')}}" alt="images">
                                                </a>
                                            </div><!-- /.entry-cover -->
                                            <div class="entry-header">
                                                <div class="entry-header-content">
                                                    <h4 class="entry-time">
                                                        <span class="entry-day">25</span>
                                                        <span class="entry-month">Mar</span>
                                                    </h4>
                                                    <h4 class="entry-title">
                                                        <a href="{{route('index')}}">Transport managers grow scarce</a>
                                                    </h4>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->

                                            <div class="entry-content">
                                                <p>Welcome to the Logistics Job Shop Newsletter; your need-to-know digest and analyse the events of the past fortnight in the roa ...</p>
                                            </div><!-- /.entry-content -->
                                            <div class="entry-footer">
                                                <div class="entry-meta">
                                                    <i class="fa fa-user"></i>
                                                    <span class="entry-author"><a href="{{route('index')}}">admin</a></span>
                                                    <i class="fa fa-folder-open"></i>
                                                    <span class="entry-categories"><a href="{{route('index')}}">Transport</a></span>
                                                    <i class="fa fa-comment"></i>
                                                    <span class="entry-comments-link"><a href="{{route('index')}}">Comments</a></span>
                                                </div>
                                            </div>
                                        </div><!-- /.entry-wrapper -->
                                    </article><!-- /.blog-post -->
                                </div><!-- /.content-inner -->
                            </div><!-- /.main-content-wrap -->
                        </div><!-- /.main-content -->
                    </div><!-- /.content-wrap  -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        <div class="flat-row pad-bottom70px bg-f2f4f8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="flat-title-section style w90 mag-bottom0px">What clients <span class="scheme">say.</span></h2>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->

                <div class="flat-divider d48px"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-testimonial-owl">
                            <div class="flat-testimonial">
                                <div class="testimonial-meta">
                                    <div class="testimonial-image">
                                        <img src="{{asset('images/testimonials/star.png')}}" alt="images">
                                    </div>
                                    <div class="testimonial-author">
                                        <strong class="author-name">Yvonne Mulisa</strong>
                                        <div class="author-info"></div>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <blockquote>
                                        Fair Logistics is great to work with. They have many locations, competitive rates, and their staff is excellent, will go above and beyond for their partners. I look forward to working with them in the future. <br>Thank you!
                                    </blockquote>
                                </div>
                            </div><!-- /.testimonial -->

                            <div class="flat-testimonial">
                                <div class="testimonial-meta">
                                    <div class="testimonial-image">
                                        <img src="{{asset('images/testimonials/star.png')}}" alt="images">
                                    </div>
                                    <div class="testimonial-author">
                                        <strong class="author-name">Mokaya Duncan</strong>
                                        <div class="author-info"></div>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <blockquote>
                                        Thank you for delivering the chairs to us so quickly. Your delivery guys were most helpful and courteous. You have been a pleasure to deal with and we will not hesitate to use your services again or recommend you.
                                    </blockquote>
                                </div>
                            </div><!-- /.testimonial -->

                            <div class="flat-testimonial">
                                <div class="testimonial-meta">
                                    <div class="testimonial-image">
                                        <img src="{{asset('images/testimonials/star.png')}}" alt="images">
                                    </div>
                                    <div class="testimonial-author">
                                        <strong class="author-name">Hon Evans Makamu</strong>
                                        <div class="author-info"></div>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <blockquote>
                                        We have always found them to be highly professional and reliable, and have assisted us in delivering a high standard service to our customers. Canava have been a valuable supplier to Truflo and continue to be so.
                                    </blockquote>
                                </div>
                            </div><!-- /.testimonial -->

                            <div class="flat-testimonial">
                                <div class="testimonial-meta">
                                    <div class="testimonial-image">
                                        <img src="{{asset('images/testimonials/star.png')}}" alt="images">
                                    </div>
                                    <div class="testimonial-author">
                                        <strong class="author-name">Ken Muchiri</strong>
                                        <div class="author-info"></div>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <blockquote>
                                        We are very happy with service. The dispatchers are professional and responsive. There are no obstacles, and Lance has been a good problem solver for us, like when we had a tough time finding containers for overseas deliveries.
                                    </blockquote>
                                </div>
                            </div><!-- /.testimonial -->

                            <div class="flat-testimonial">
                                <div class="testimonial-meta">
                                    <div class="testimonial-image">
                                        <img src="{{asset('images/testimonials/star.png')}}" alt="images">
                                    </div>
                                    <div class="testimonial-author">
                                        <strong class="author-name">Masaba Bernes</strong>
                                        <div class="author-info"></div>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <blockquote>
                                        In a commodity business like trucking, GW really stands out because of its customer service. They come out to discuss our needs, give us fast and accurate quotes, and get me a truck when they say they will. That makes it a relationship.
                                    </blockquote>
                                </div>
                            </div><!-- /.testimonial -->
                        </div><!-- /.flat-testimonial -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="flat-row bg-scheme pad-top20px pad-bottom20px">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="clients-image style">
                                    <div class="item-img">
                                        <img src="images/client/c1.png" alt="images">
                                    </div>
                                    <p class="tooltip">Laurentides</p>
                                </div>
                            </div><!-- /.col-md-2 -->

                            <div class="col-md-2">
                                <div class="clients-image style">
                                    <div class="item-img">
                                        <img src="images/client/c2.png" alt="images">
                                    </div>
                                    <p class="tooltip">Veolia</p>
                                </div>
                            </div><!-- /.col-md-2 -->

                            <div class="col-md-2">
                                <div class="clients-image style">
                                    <div class="item-img">
                                        <img src="images/client/c3.png" alt="images">
                                    </div>
                                    <p class="tooltip">Plane Business</p>
                                </div>
                            </div><!-- /.col-md-2 -->

                            <div class="col-md-2">
                                <div class="clients-image style">
                                    <div class="item-img">
                                        <img src="images/client/c4.png" alt="images">
                                    </div>
                                    <p class="tooltip">Arrow GLS</p>
                                </div>
                            </div><!-- /.col-md-2 -->

                            <div class="col-md-2">
                                <div class="clients-image style">
                                    <div class="item-img">
                                        <img src="images/client/c5.png" alt="images">
                                    </div>
                                    <p class="tooltip">MWR Transport</p>
                                </div>
                            </div><!-- /.col-md-2 -->

                            <div class="col-md-2">
                                <div class="clients-image style">
                                    <div class="item-img">
                                        <img src="images/client/c6.png" alt="images">
                                    </div>
                                    <p class="tooltip">Bradbell</p>
                                </div>
                            </div><!-- /.col-md-2 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.flat-row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        @endsection
