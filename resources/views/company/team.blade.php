@extends('layouts.main2')

@section('content')

<!-- Page title -->
<div class="page-title parallax-style parallax1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h2>Our People</h2>
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
                        <li>Our People</li>
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
                <h3 class="flat-title-section style style1">Board of <span>director</span></h3>

                <div class="flat-divider d40px"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="flat-member">
                            <div class="member-image">
                                <img src="{{asset('images/team/charles.jpeg')}}" alt="images">
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">Charles Otieno Ongoya</h3>
                                <div class="member-subtitle">Director</div>
                                <div class="member-desc">
                                    He is greatly dedicated in propelling the company to greater heights. His enthusiasm is quite infectious.
                                </div>
                                <div class="social-links style1">
                                    <a href="{{url('#')}}" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="{{url('#')}}" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="{{url('#')}}" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="{{url('#')}}" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div><!-- /.flat-member -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="flat-member">
                            <div class="member-image">
                                <img src="{{asset('images/team/rozalia.jpeg')}}" alt="images">
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">Rozalia Akoth</h3>
                                <div class="member-subtitle">Director</div>
                                <div class="member-desc">
                                    A go getter. She will do everything in her capacity to ensure targets are met by the team. She offers leadership that is second to none.
                                </div>
                                <div class="social-links style1">
                                    <a href="{{url('#')}}" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="{{url('#')}}" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="{{url('#')}}" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="{{url('#')}}" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div><!-- /.flat-member -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->

                <div class="flat-divider d50px"></div>

                <h3 class="flat-title-section style">Meet our <span>staff</span></h3>

                <div class="flat-divider d20px"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="flat-member">
                            <div class="member-image">
                                <img src="{{asset('images/team/Rosy.jpg')}}" alt="images">
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">Rosylene Mwita</h3>
                                <div class="member-subtitle">Team Leader Operations</div>
                                <div class="member-desc">
                                    A dynamic, highly disciplined and proactive Team leader with over 5 years in the logistics industry.
                                </div>
                                <div class="social-links style1">
                                    <a href="{{url('#')}}" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="{{url('#')}}" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="{{url('#')}}" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="{{url('#')}}" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div><!-- /.flat-member -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="flat-member">
                            <div class="member-image">
                                <img src="{{asset('images/team/lawi.jpg')}}" alt="images">
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">Lawi Awina</h3>
                                <div class="member-subtitle">Port Clerk</div>
                                <div class="member-desc">
                                    Having accumulated knowledge &amp; experience in many fields &amp; having a record of extream professionalism.
                                </div>
                                <div class="social-links style1">
                                    <a href="{{url('#')}}" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="{{url('#')}}" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="{{url('#')}}" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="{{url('#')}}" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div><!-- /.flat-member -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="flat-member">
                            <div class="member-image">
                                <img src="{{asset('images/team/Norah.jpg')}}" alt="images">
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">Norah Chepkemoi</h3>
                                <div class="member-subtitle">Ass. Operations Team Leader</div>
                                <div class="member-desc">
                                    I am a highly motivated and professional individual, capable of delivering to the highest level.
                                </div>
                                <div class="social-links style1">
                                    <a href="{{url('#')}}" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="{{url('#')}}" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="{{url('#')}}" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="{{url('#')}}" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div><!-- /.flat-member -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->

                <div class="flat-divider d20px"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="flat-member">
                            <div class="member-image">
                                <img src="{{asset('images/team/cecilia.jpg')}}" alt="images">
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">Cecilia Muasya</h3>
                                <div class="member-subtitle">Declaration Clerk</div>
                                <div class="member-desc">
                                    A charismatic individual who is not afraid of trying to achieve something that has seemed to be impossible to many.
                                </div>
                                <div class="social-links style1">
                                    <a href="{{url('#')}}" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="{{url('#')}}" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="{{url('#')}}" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="{{url('#')}}" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div><!-- /.flat-member -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="flat-member">
                            <div class="member-image">
                                <img src="{{asset('images/team/mukoya.jpg')}}" alt="images">
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">Liverson Mukoya</h3>
                                <div class="member-subtitle">Port Clerk</div>
                                <div class="member-desc">
                                   He will go over and above to ensure deadlines are met and quality work is done, putting a smile on every customer.
                                </div>
                                <div class="social-links style1">
                                    <a href="{{url('#')}}" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="{{url('#')}}" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="{{url('#')}}" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="{{url('#')}}" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div><!-- /.flat-member -->
                    </div><!-- /.col-md-4 -->

                </div><!-- /.row -->

            </div><!-- /.general -->

            <div class="general-sidebars">
                <div class="sidebar-wrap">
                    <div class="sidebar">
                        <div class="widget widget_nav_menu">
                            <ul class="nav_menu">
                                <li class="menu-item">
                                    <a href="{{route('about')}}">About us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{url('#')}}">Company history</a>
                                </li>
                                <li class="menu-item">
                                    <a class="active" href="{{route('team')}}">our people</a>
                                </li>

                            </ul>
                        </div><!-- /.widget_nav_menu -->

                        <div class="widget widget_recent_entries">
                            <h4 class="widget-title">Values which Guide Us</h4>
                            <ul>
                                <li>
                                    <span class="post-date">Passion</span>
                                </li>
                                <li>
                                    <span class="post-date">Integrity</span>
                                </li>
                                <li>
                                    <span class="post-date">Commitment</span>
                                </li>
                            </ul>
                        </div><!-- /.widget_recent_entries -->

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
                </div><!-- /.sidebar-wrap -->
            </div><!-- /.general-sidebars -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.blog -->

@endsection
