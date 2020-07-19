@extends('layouts.main2')

@section('content')

    <!-- Page title -->
    <div class="page-title parallax-style parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2>News</h2>
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
                            <li>News</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.flat-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-breadcrumbs -->

    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="content-wrap">
                    <div class="main-content">
                        <div class="main-content-wrap">
                            <div class="content-inner">

                                <article class="blog-post">
                                    <div class="entry-wrapper">
                                        <div class="entry-cover">

                                                <img src="{{asset('images/news/news.jpg')}}" alt="images">

                                        </div><!-- /.entry-cover -->
                                        <h4 class="entry-time">
                                            <span class="entry-month">Jan</span>
                                            <span class="entry-day">21</span>
                                        </h4>

                                        <div class="entry-header">
                                            <div class="entry-header-content">
                                                <h4 class="entry-title">
                                                    <a href="{{url('blog-single.html')}}">New law to axe rogue clearing agents, address cargo delays.</a>
                                                </h4>
                                                <div class="entry-meta">
                                                    <i class="fa fa-user"></i>
                                                    <span class="entry-author">admin</span>
                                                    <i class="fa fa-folder-open"></i>
                                                    <span class="entry-categories">Warehouse</span>
                                                    <i class="fa fa-comment"></i>
                                                    <span class="entry-comments-link">0 Comment</span>
                                                </div>
                                            </div><!-- /.entry-header-content -->
                                        </div><!-- /.entry-header -->

                                        <div class="entry-content">
                                            <p>Players in the clearing and forwarding sector are pushing for a new law to help streamline industry operations and kick out rogue clearing agents.</p>
                                            <p>The Kenya International Freight Forwarders Association (KIFWA) and the Federation of East African Freight Forwarders Associations (FEAFFA), in partnership with other relevant industry associations, want the adoption of the Kenya Customs Agents and Freight Forwarders Bill 2020.</p>
                                        </div><!-- /.entry-content -->
                                    </div><!-- /.entry-wrapper -->
                                </article><!-- /.blog-post -->

                                <article class="blog-post">
                                    <div class="entry-wrapper">
                                        <div class="entry-cover">

                                                <img src="{{asset('images/cargo/cargo.jpg')}}" alt="images">

                                        </div><!-- /.entry-cover -->
                                        <h4 class="entry-time">
                                            <span class="entry-month">May</span>
                                            <span class="entry-day">20</span>
                                        </h4>

                                        <div class="entry-header">
                                            <div class="entry-header-content">
                                                <h4 class="entry-title">
                                                    <a href="{{url('#')}}">African logistics, warehousing sector set to overcome pandemic storm</a>
                                                </h4>
                                                <div class="entry-meta">
                                                    <i class="fa fa-user"></i>
                                                    <span class="entry-author">admin</span>
                                                    <i class="fa fa-folder-open"></i>
                                                    <span class="entry-categories">Warehouse</span>
                                                    <i class="fa fa-comment"></i>
                                                    <span class="entry-comments-link">0 Comment</span>
                                                </div>
                                            </div><!-- /.entry-header-content -->
                                        </div><!-- /.entry-header -->

                                        <div class="entry-content">
                                            <p>According to Tim White, CEO of Profica, the logistics and warehousing sectors have strong fundamentals in place which may see the industrial sector weather the Covid-19 storm and emerge with a more positive long-term outlook.</p>
                                            <P>Prior to the pandemic, the demand for quality industrial and logistics space was estimated at over 15 million square metres in Africa’s highest-potential markets. “Providers have struggled to keep up with demand in the logistics and warehousing market, which has been driven by growing e-commerce activity, increasing intra-regional trade and urbanisation,” says White.</P>
                                        </div><!-- /.entry-content -->
                                    </div><!-- /.entry-wrapper -->
                                </article><!-- /.blog-post -->

                                <article class="blog-post">
                                    <div class="entry-wrapper">
                                        <div class="entry-cover">

                                                <img src="{{asset('images/news/plane.jpg')}}" alt="images">

                                        </div><!-- /.entry-cover -->
                                        <h4 class="entry-time">
                                            <span class="entry-month">June</span>
                                            <span class="entry-day">9</span>
                                        </h4>

                                        <div class="entry-header">
                                            <div class="entry-header-content">
                                                <h4 class="entry-title">
                                                    <a href="{{url('#')}}">Global air cargo demand plummets</a>
                                                </h4>
                                                <div class="entry-meta">
                                                    <i class="fa fa-user"></i>
                                                    <span class="entry-author">admin</span>
                                                    <i class="fa fa-folder-open"></i>
                                                    <span class="entry-categories">Warehouse</span>
                                                    <i class="fa fa-comment"></i>
                                                    <span class="entry-comments-link">0 Comment</span>
                                                </div>
                                            </div><!-- /.entry-header-content -->
                                        </div><!-- /.entry-header -->

                                        <div class="entry-content">
                                            <p>Data released by the International Air Transport Association (IATA) for global air freight markets in April showed that demand dropped by 27.7% compared to the same period in 2019 - the sharpest fall ever recorded.</p>
                                            <P>There is a severe capacity crunch in air cargo. Demand fell by 27.7% compared to April 2019. But capacity was down 42% because of the sharp cuts in passenger operations which also carry cargo. The result is damaging global supply chains with longer shipping times and higher costs. Airlines are deploying as much capacity as possible, including special charter operations and the temporary use of passenger cabins for cargo.</P>
                                        </div><!-- /.entry-content -->
                                    </div><!-- /.entry-wrapper -->
                                </article><!-- /.blog-post -->
                            </div><!-- /.content-inner -->

                        </div><!-- /.main-content-wrap -->
                    </div><!-- /.main-content -->

                    <div class="sidebars">
                        <div class="sidebars-wrap">
                            <div class="sidebar">

                                <div class="widget widget_text">
                                    <div class="textwidget">
                                        <div class="content-text">
                                            <h4 class="title">How can we help you?</h4>
                                            <p>Our customer service standards provide information on how we will handle your enquiry. There is also compliments and complaints information to help you when you lodge feedback with us.</p>
                                            <a class="button white" href="{{route('contact')}}">Talk to Us<i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div><!-- /.textwidget -->
                                </div><!-- /.widget_text -->

                            </div><!-- /.sidebar -->
                        </div><!-- /.sidebars-wrap -->
                    </div><!-- /.sidebars -->
                </div><!-- /.content-wrap  -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.blog -->

@endsection
