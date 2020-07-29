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
                            <img src="{{asset('images/client/pil.png')}}" style="height: 111.84px;width: 178px"  alt="images">
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
                            <img src="{{asset('images/client/ldc1.png')}}" style="height: 111.84px" alt="images">
                        </div>
                        <p class="tooltip">Louis Dreyfus Company</p>
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
                                            <img src="{{asset('images/trucks/truck2.png')}}" style="height: 260.22px;width: auto alt="images">
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
                                            <img src="{{asset('images/client/sgr2.jpeg')}}" style="height: 260.22px;width: auto" alt="images">
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
                                        <h5 class="box-title"><a href="{{route('land')}}">Over-land Transport</a></h5>
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
                                        <h5 class="box-title"><a href="{{route('sea')}}">Sea freight</a></h5>
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
                                        <h5 class="box-title"><a href="{{route('warehouse')}}">Warehousing and storage</a></h5>
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
                                        <h5 class="box-title"><a href="{{route('cargo')}}">Cargo</a></h5>
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
                                        <h5 class="box-title"><a href="{{route('logistics')}}">Logistics Solutions</a></h5>
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
                                <a class="button lg outline style1" href="{{route('contact')}}">Talk to us <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div><!-- /.make-quote -->
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
                                            <div class="entry-cover" style="height: 187px; overflow: hidden">
                                                <a href="{{route('index')}}">
                                                    <img src="{{asset('images/news/news.jpg')}}" alt="images">
                                                </a>
                                            </div><!-- /.entry-cover -->
                                            <div class="entry-header">
                                                <div class="entry-header-content">
                                                    <h4 class="entry-time">
                                                        <span class="entry-day">21</span>
                                                        <span class="entry-month">Jan</span>
                                                    </h4>
                                                    <h4 class="entry-title">
                                                        <a href="{{route('news')}}">New law to axe rogue clearing agents, address cargo delays.</a>
                                                    </h4>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->

                                            <div class="entry-content">
                                                <p>The Kenya International Freight Forwarders Association (KIFWA) and the Federation of East African Freight Forwarders Associations (FEAFFA), in partnership with other relevant industry associations, want the adoption of the Kenya Customs Agents and Freight Forwarders Bill 2020.</p>
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
                                            <div class="entry-cover" style="height: 187px; overflow: hidden">
                                                <a href="{{route('index')}}">
                                                    <img src="{{asset('images/cargo/cargo.jpg')}}" alt="images">
                                                </a>
                                            </div><!-- /.entry-cover -->
                                            <div class="entry-header">
                                                <div class="entry-header-content">
                                                    <h4 class="entry-time">
                                                        <span class="entry-day">25</span>
                                                        <span class="entry-month">Mar</span>
                                                    </h4>
                                                    <h4 class="entry-title">
                                                        <a href="{{route('news')}}">African logistics, warehousing sector set to overcome pandemic storm</a>
                                                    </h4>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->

                                            <div class="entry-content">
                                                <p>According to Tim White, CEO of Profica, the logistics and warehousing sectors have strong fundamentals in place which may see the industrial sector weather the Covid-19 storm and emerge with a more positive long-term outlook.</p>
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
                                            <div class="entry-cover" style="height: 187px; overflow: hidden">
                                                <a href="{{route('index')}}">
                                                    <img src="{{asset('images/news/plane.jpg')}}" alt="images">
                                                </a>
                                            </div><!-- /.entry-cover -->
                                            <div class="entry-header">
                                                <div class="entry-header-content">
                                                    <h4 class="entry-time">
                                                        <span class="entry-day">9</span>
                                                        <span class="entry-month">Jun</span>
                                                    </h4>
                                                    <h4 class="entry-title">
                                                        <a href="{{route('news')}}">Global air cargo demand plummets</a>
                                                    </h4>
                                                </div><!-- /.entry-header-content -->
                                            </div><!-- /.entry-header -->

                                            <div class="entry-content">
                                                <p>Data released by the International Air Transport Association (IATA) for global air freight markets in April showed that demand dropped by 27.7% compared to the same period in 2019 - the sharpest fall ever recorded. There is a severe capacity crunch in air cargo. Demand fell by 27.7% compared to April 2019.</p>
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
                                        <strong class="author-name">Dr.Mulisa Yvonne</strong>
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
                                        Thank you for delivering the food stuff to us so quickly. Your delivery guys were most helpful and courteous. You have been a pleasure to deal with and we will not hesitate to use your services again or recommend you.
                                    </blockquote>
                                </div>
                            </div><!-- /.testimonial -->

                            <div class="flat-testimonial">
                                <div class="testimonial-meta">
                                    <div class="testimonial-image">
                                        <img src="{{asset('images/testimonials/star.png')}}" alt="images">
                                    </div>
                                    <div class="testimonial-author">
                                        <strong class="author-name">Eng. Evans Makamu</strong>
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
                                        <strong class="author-name">Hon.Ken Muchiri</strong>
                                        <div class="author-info"></div>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <blockquote>
                                        We are not so happy with service. The dispatchers are quiet slow and we did not like it. Although fair logistics has been a good problem solver for us, there are abit of obstacles like unavailability of customer service when we had a tough time finding containers for overseas deliveries.
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
                <div class=" pad-top20px pad-bottom20px">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="clients-image style">
                                    <div class="item-img">
                                        <img src="{{asset('images/flags/uganda.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Uganda</p>
                                </div>
                            </div><!-- /.col-md-2 -->

                            <div class="col-md-2">
                                <div class="clients-image style">
                                    <div class="item-img">
                                        <img src="{{asset('images/flags/Tz.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Tanzania</p>
                                </div>
                            </div><!-- /.col-md-2 -->

                            <div class="col-md-2">
                                <div class="clients-image style">
                                    <div class="item-img">
                                        <img src="{{asset('images/flags/Zambia.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Zambia</p>
                                </div>
                            </div><!-- /.col-md-2 -->

                            <div class="col-md-2">
                                <div class="clients-image style">
                                    <div class="item-img">
                                        <img src="{{asset('images/flags/malawi.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Malawi</p>
                                </div>
                            </div><!-- /.col-md-2 -->

                            <div class="col-md-2">
                                <div class="clients-image style">
                                    <div class="item-img">
                                        <img src="{{asset('images/flags/Burundi.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Burundi</p>
                                </div>
                            </div><!-- /.col-md-2 -->

                            <div class="col-md-2">
                                <div class="clients-image style">
                                    <div class="item-img">
                                        <img src="{{asset('images/flags/Botswana.jpg')}}" alt="images">
                                    </div>
                                    <p class="tooltip">Botswana</p>
                                </div>
                            </div><!-- /.col-md-2 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.flat-row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->

        @endsection
