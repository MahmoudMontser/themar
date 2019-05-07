@extends('layouts.main')
@section('head')



<section class="head">
    <!--carousel-test-->
    <!--carousel-test-->
    <div id="owl-demo" class="owl-carousel owl-theme ">

        <div class="item"><img src="{{asset('them/imgs/background-carousel.png')}}" alt="The Last of us">
            <div class="carousel-caption">
                <h1>Themar<span> Evolution</span></h1>
                <p>Rentiong all kinds of properties for owners and knowing the details of the property and its condtiion</p>
            </div>
            <div class="botton-caro"></div>
        </div>

        <div class="item"><img src="{{asset('them/imgs/background-carousel.png')}}" alt="The Last of us">
            <div class="carousel-caption">
                <h1>Themar<span> Evolution</span></h1>
                <p>Rentiong all kinds of properties for owners and knowing the details of the property and its condtiion</p>
            </div>
            <div class="botton-caro"></div>
        </div>

        <div class="item"><img src="{{asset('them/imgs/background-carousel.png')}}" alt="The Last of us">
            <div class="carousel-caption">
                <h1>Themar<span> Evolution</span></h1>
                <p>Rentiong all kinds of properties for owners and knowing the details of the property and its condtiion</p>
            </div>
            <div class="botton-caro"></div>
        </div>


        <div class="item"><img src="{{asset('them/imgs/background-carousel.png')}}" alt="The Last of us">
            <div class="carousel-caption">
                <h1>Themar<span> Evolution</span></h1>
                <p>Rentiong all kinds of properties for owners and knowing the details of the property and its condtiion</p>
            </div>
            <div class="botton-caro"></div>
        </div>

        <div class="item"><img src="{{asset('them/imgs/background-carousel.png')}}" alt="The Last of us">
            <div class="carousel-caption">
                <h1>Themar<span> Evolution</span></h1>
                <p>Rentiong all kinds of properties for owners and knowing the details of the property and its condtiion</p>
            </div>
            <div class="botton-caro"></div>
        </div>

    </div>
    <!--carousel-test-->

    <!--navbare-start-->
    <nav class="navbar navbar-default head-nav">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header pull-right">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><div class="img-responsive"> <img src="{{asset('images/settings/'.$settings->logo)}}" class="img-responsive"></div> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">الرئيسيه <span class="sr-only">(current)</span></a></li>
                    <li><a href="/about_us">من نحن</a></li>
                    <li><a href="/buildings">العقارات</a></li>
                    <li><a href="/contact_us">اتصل بنا</a></li>
                    <li>
                        <div class="search-icon  hidden-xs">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </div>

                        <form class="navbar-form navbar-left formmm">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="بحث">
                            </div>
                            <button type="submit" class="btn btn-default">انطلق</button>
                        </form></li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--navbar-end-->

    <!--social icons-start--->
    <div class="social-icons hidden-xs" >
        <ul class="list-unstyled">
            <li><a href="{{$settings->facebook_contact}}"><i class="fa fa-facebook"></i></a></li>
            <li><a href="{{$settings->twitter_contact}}"> <i class="fab fa-twitter"></i> </a></li>
            <li><a href="{{$settings->google_contact}}"> <i class="fab fa-google-plus-g"></i> </a></li>
            <li><a href="{{$settings->instagram_contact}}"> <i class="fab fa-instagram"></i> </a></li>
        </ul>
    </div>
    <!--social icons-end--->

    <!--option-box-->
    <section class="option-box">
        <div class="login-box">
            <ul class="list-unstyled">
                <li><a href="/signin"> تسجيل دخول</a> </li>
                <li><a href="/signup"> تسجيل جديد</a> </li>
                <li><a href="{{route('user_edit')}}">الاعدادات</a> </li>
                <li><a href="{{route('logout')}}">خروج</a> </li>
            </ul>
        </div>
        <div class=" gear-check">
            <i class="fa fa-gear fa-spin fa-3x" style="font-size:24px"></i></div>
    </section>
    <!--option-box-->

</section>
<!--section-head-end-->


@endsection







@section('contents')
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="about-row">
                    <h1 class="main">من نحن</h1>
                    <div class="col-md-6 col-sm-12 col-xs-12 pull-right">

                        <ol>
                            @foreach($hints as $hint)


                                <li><h1><a href="#"> {{$hint->title}}</a></h1>
                                    <p>    <a href="#">{{$hint->hint}}  </a></p>
                                </li>

                            @endforeach


                        </ol>
                        <div class="goal">
                            <h1>  <span></span>اهدافنا</h1>
                            <ol>
                                @foreach($goals as $goal)


                                    <li>
                                        <p>    <a href="#">{{$goal->goal}}  </a></p>
                                    </li>

                                @endforeach


                            </ol>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="house ">
                            <a href="#">  <img src="{{asset('them/imgs/house.png')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- buildings --------------------------------------       -->

    <section class="buldings">
        <div class="container">
            <h1 class="main">العقارات</h1>
            <div id="second-owl" class="owl-carousel owl-theme second-owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1608px, 0px, 0px); transition: all 0.25s ease 0s; width: 2896px;">

                        @foreach($buildings as $building)

                            <div class="owl-item cloned" style="width: 296.667px; margin-right: 25px;"><div class="item">


                                    <div class="item">


                                        <div class="item">
                                            <div class="first">
                                                <div class="item-img">
                                                    <a href="#">  <img src="{{asset('them/imgs/house6.png')}}"> </a>
                                                </div>
                                                <div class="describtion">
                                                    <h2><a href="#">  </a>{{$building->owner}}</h2>
                                                    <ul class="list-unstyled">
                                                        <li> <i class="fas fa-building"></i> <a href="#">{{$building->name}}</a> </li>
                                                        <li> <i class="fas fa-map-marker"></i> <a href="#">{{$building->location->location_name}}</a> </li>
                                                        <li> <i class="fas fa-home"></i> <a href="#">{{$building->status}}</a> </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>


                                    </div>


                                </div>
                            </div>
                        @endforeach
                    </div></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div>

        </div>
    </section>



    <!--  contact_us--------------------------                -->
    <section class="contact-us">
        <div class="container">
            <h1 class="main">اتصل بنا</h1>
            <div class="section-background">
                <img src="{{asset('them/imgs/themar.png')}}" class="img-responsive">
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12 pull-right">
                    <div class="phar pharagh">
                        <p>دائما كن على اتصال بنا اذا زاجهتك اى مشكلة او عندك اى شكوى عن الموقع او عملاء مشتركين فى الموقع نحن دائما فى الخدمة 24 ساعة يوميا</p>

                        <!--social icons-start--->
                        <div class="contact-icons hidden-sm hidden-xs">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fab fa-google-plus-g"></i> </a></li>
                                <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                        <!--social icons-end--->

                    </div>

                </div>

                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 pull-left">
                    <div class="left">
                        <div class="left-img">
                            <img src="{{asset('them/imgs/cover.png')}}">
                        </div>
                        <form method="post" action="/pushm">
                            <div class="form-group">
                                <input type="text" class="form-control one"  id="name" name="name" required placeholder="اكتب اسمك هنا">
                                <input type="text" class="form-control two" id="email" name="email" required placeholder="اكتب الايميل هنا">
                                <textarea class="form-control input-lg" id="message" name="message" required placeholder="اكتب رسالتك هنا"></textarea>
                                <button type="submit" class="btn btn-default">ارسال</button>
                                {{csrf_field()}}

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection