@extends('layouts.main2')

@section('content')

    <!-- Page title -->
    <div class="page-title parallax-style parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2>Layout 01</h2>
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
                        <h2 class="trail-browse">You are here:</h2>
                        <ul class="trail-items">
                            <li class="trail-item"><a href="http://themesflat.com/html/canava/index-v2.html">Home</a></li>
                            <li class="trail-item"><a href="{{asset('gallery')}}">Gallery</a></li>
                            <li>Layout 01</li>
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
                            <li class="active"><a data-filter="*" href="{{asset('gallery')}}">All</a></li>
                            <li><a data-filter=".warehouse" href="{{asset('gallery')}}">Team</a></li>
                            <li><a data-filter=".cargo" href="{{asset('gallery')}}">Cargo</a></li>
                            <li><a data-filter=".transport" href="{{asset('gallery')}}">Transport</a></li>
                            <li><a data-filter=".logistics" href="{{asset('gallery')}}">Warehouse</a></li>
                        </ul><!-- /.project-filter -->

                        <div class="portfolio">
                            <div class="portfolio-item item-three-column warehouse">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="portfolio-single.html"><img src="images/portfolio/p1.jpg" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="portfolio-single.html"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="portfolio-single.html">Warehouse canava</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="portfolio-v1.html#">Warehouse</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column cargo">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="portfolio-single.html"><img src="images/portfolio/p2.jpg" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="portfolio-single.html"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="portfolio-single.html">Cargo photos 2016</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="portfolio-v1.html#">Cargo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column transport">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="portfolio-single.html"><img src="images/portfolio/p3.jpg" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="portfolio-single.html"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="portfolio-single.html">Sea delivery</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="portfolio-v1.html#">Transport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column logistics">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="portfolio-single.html"><img src="images/portfolio/p4.jpg" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="portfolio-single.html"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="portfolio-single.html">Logistics photos 2016</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="portfolio-v1.html#">Logistics</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column transport">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="portfolio-single.html"><img src="images/portfolio/p5.jpg" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="portfolio-single.html"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="portfolio-single.html">Air delivery</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="portfolio-v1.html#">Transport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column transport">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="portfolio-single.html"><img src="images/portfolio/p6.jpg" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="portfolio-single.html"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="portfolio-single.html">Transport photos</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="portfolio-v1.html#">Transport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column cargo">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="portfolio-single.html"><img src="images/portfolio/p7.jpg" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="portfolio-single.html"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="portfolio-single.html">Cargo Photos</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="portfolio-v1.html#">Cargo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column coaching logistics">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="portfolio-single.html"><img src="images/portfolio/p8.jpg" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="portfolio-single.html"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="portfolio-single.html">Logistics Photos</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="portfolio-v1.html#">Logistics</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.portfolio-item -->

                            <div class="portfolio-item item-three-column warehouse">
                                <div class="portfolio-wrap">
                                    <div class="portfolio-thumbnail">
                                        <a href="portfolio-single.html"><img src="images/portfolio/p9.jpg" alt="images"></a>
                                        <div class="flat-figcaption">
                                            <div class="project-buttons">
                                                <a href="portfolio-single.html"><span>Quick View</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-wrap">
                                            <h6 class="portfolio-title">
                                                <a href="portfolio-single.html">Warehouse envato</a>
                                            </h6>
                                            <ul class="portfolio-categories">
                                                <li><a href="portfolio-v1.html#">Warehouse</a></li>
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
