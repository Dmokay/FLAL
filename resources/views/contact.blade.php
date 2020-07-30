@extends('layouts.main2')

@section('content')

    <!-- Page title -->
    <div class="page-title parallax-style parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2>Contact us</h2>
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
                            <li>Contact us</li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.flat-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-breadcrumbs -->

    <div class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="mag-top0px">Headquarters</h5>
                    <p>
                        <strong>Amal Plaza, Mombasa, 2nd floor</strong><br>
                        Mamba Round About<br>
                        Tel: 0110002322 <br>
                        Tel: +254 729 414 008<br>
                        Email: <a class="scheme" href="{{url('#')}}">info@fairlogistics.net</a><br>
                        Email: <a class="scheme" href="{{url('#')}}">fairlogisticsagency2011@gmail.com</a>
                    </p>
                </div><!-- /.col-md-3 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.flat-row -->

    <div class="flat-row pad-top0px pad-bottom30px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="flat-map"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.flat-row -->

    <div class="flat-row pad-bottom40px">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="flat-contact-us">
                        <h4 class="flat-title-section style mag-top0px">Office<span> hours</span></h4>
                        <p>Find us at the office ready to serve you through out the week as per these hours. Thank you !</p>
                    </div>
                    <div class="flat-divider d20px"></div>
                    <ul class="iconlist">
                        <li><i class="fa fa-clock-o"></i> <strong>Monday:</strong> 08:00 a.m – 06:00 p.m</li>
                        <li><i class="fa fa-clock-o"></i> <strong>Tuesday:</strong> 08:00 a.m – 06:00 p.m</li>
                        <li><i class="fa fa-clock-o"></i> <strong>Wednesday:</strong> 08:00 a.m – 06:00 p.m</li>
                        <li><i class="fa fa-clock-o"></i> <strong>Thursday:</strong> 08:00 a.m – 06:00 p.m</li>
                        <li><i class="fa fa-clock-o"></i> <strong>Friday:</strong> 08:00 a.m – 06:00 p.m</li>
                        <li><i class="fa fa-clock-o"></i> <strong>Saturday – Sunday:</strong> Closed</li>
                    </ul>

                    <div class="flat-divider d20px"></div>
                </div><!-- /.col-md-4 -->


            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.flat-row -->

@endsection
