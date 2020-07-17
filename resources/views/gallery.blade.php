@extends('layouts.main2')

@section('content')

    <!-- Page title -->
    <div class="page-title parallax-style parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2>Gallery</h2>
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
                            <li class="trail-item"><a href="{{route('index')}}">Gallery</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.flat-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-breadcrumbs -->

    <!-- Portfolio -->
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="flat-wrapper">
                    <div class="flat-portfolio portfolio-grid-alt">
                        <ul class="portfolio-filter">
                            <li class="active"><a data-filter="*" href="{{route('index')}}">All</a></li>
                            <li><a data-filter=".warehouse" href="{{route('index')}}">Team</a></li>
                            <li><a data-filter=".cargo" href="{{route('index')}}">Cargo</a></li>
                            <li><a data-filter=".transport" href="{{route('index')}}">Transport</a></li>
                            <li><a data-filter=".logistics" href="{{route('index')}}">Warehouse</a></li>
                        </ul><!-- /.project-filter -->

                        <div class="portfolio">
                            <div class="portfolio-item item-three-column warehouse">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="{{route('index')}}"><img src="{{asset('images/portfolio/p1.jpg')}}" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="{{route('index')}}"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="{{route('index')}}">Warehouse canava</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="{{route('index')}}">Warehouse</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column cargo">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="{{route('index')}}"><img src="{{asset('images/portfolio/p2.jpg')}}" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="{{route('index')}}"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="{{route('index')}}">Cargo photos 2016</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="{{route('index')}}">Cargo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column transport">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="{{route('index')}}"><img src="{{asset('images/portfolio/p3.jpg')}}" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="{{route('index')}}"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="{{route('index')}}">Sea delivery</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="{{route('index')}}">Transport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column logistics">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="{{route('index')}}"><img src="{{asset('images/portfolio/p4.jpg')}}" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="{{route('index')}}"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="{{route('index')}}">Logistics photos 2016</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="{{route('index')}}">Logistics</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column transport">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="{{route('index')}}"><img src="{{asset('images/portfolio/p5.jpg')}}" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="{{route('index')}}"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="{{route('index')}}">Air delivery</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="{{route('index')}}">Transport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column transport">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="{{route('index')}}"><img src="{{asset('images/portfolio/p6.jpg')}}" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="{{route('index')}}"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="{{route('index')}}">Transport photos</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="{{route('index')}}">Transport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column cargo">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="{{route('index')}}"><img src="{{asset('images/portfolio/p7.jpg')}}" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="{{route('index')}}"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="{{route('index')}}">Cargo Photos</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="{{route('index')}}">Cargo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column coaching logistics">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="{{route('index')}}"><img src="{{asset('images/portfolio/p8.jpg')}}" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="{{route('index')}}"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="{{route('index')}}">Logistics Photos</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="{{route('index')}}">Logistics</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column warehouse">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="{{route('index')}}"><img src="{{asset('images/portfolio/p9.jpg')}}" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="{{route('index')}}"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="{{route('index')}}">Warehouse envato</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="{{route('index')}}">Warehouse</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->
                        </div><!-- /.portfolio -->
                    </div><!-- /.flat-portfolio -->
                </div><!-- /.flat-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection
