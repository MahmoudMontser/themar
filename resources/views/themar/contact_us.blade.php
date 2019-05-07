@extends('layouts.main')


@section('head')
    <section class="head  head-pages">

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
                    <a class="navbar-brand" href="#"><div class="img-responsive"> <img src='{{asset('images/settings/'.$settings->logo)}}' class="img-responsive"></div> </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li><a href="/">الرئيسيه</a></li>
                        <li><a href="/about_us">من نحن</a></li>
                        <li ><a href="/buildings">العقارات </a></li>
                        <li class="active"><a href="/contact_us" >اتصل بنا</a></li>
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
        <div class="head-details">
            <h1>اتصل بنا</h1>
        </div>

        <div class="page-details">
            <div class="container page-color">
                <ul class="list-unstyled">

                    <li>الرئيسيه</li>
                    <li><i class="fas fa-chevron-left"></i></li>
                    <li> اتصل بنا</li>
                </ul>
            </div>
        </div>
    </section>


    <div class="close-all">

    </div>


@endsection

@section('contents')

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
                        <form method="post" action="/pushm" enctype="application/x-www-form-urlencoded">
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
@endsection