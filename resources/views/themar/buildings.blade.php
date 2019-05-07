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
                        <li class="active"><a href="/buildings">العقارات <span class="sr-only">(current)</span></a></li>
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
        <div class="head-details">
            <h1>تفاصيل العقار</h1>
        </div>

        <div class="page-details">
            <div class="container page-color">
                <ul class="list-unstyled">

                    <li>الرئيسيه</li>
                    <li><i class="fas fa-chevron-left"></i></li>
                    <li>تفاصيل العقار</li>
                </ul>
            </div>
        </div>
    </section>
    <!--section-head-end-->



    <div class="close-all">

    </div>


@endsection





@section('contents')


<section class="Slideshow">

    <div class="container">
        <div class="mySlides" style="display: none;">
            <div class="numbertext">6 / 6</div>
            <img src="{{asset('them/imgs/img_snow_wide.jpg')}}" style="width:100%">
        </div>


        <div class="caption-container">
            <p id="caption">Northern Lights</p>
        </div>

        <div class="row padd-right">


            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            <div class="column">
                <img class="demo cursor" src="{{asset('them/imgs/img_snow.jpg')}}" style="width:91%" onclick="currentSlide(6)" alt="Snowy Mountains">
            </div>
        </div>

        <div class="describtion">
            <h2><a href="#">{{$first->owner}} </a></h2>
            <ul class="list-unstyled">
                <li> <i class="fas fa-building"></i> <a href="#">{{$first->name}}</a> </li>
                <li> <i class="fas fa-map-marker"></i> <a href="#">{{$first->location->location_name}}</a> </li>
                <li> <i class="fas fa-home"></i> <a href="#">{{$first->status}}</a> </li>
            </ul>

            <p>

                {{$first->description}}
            </p>


        </div>
    </div>


</section>










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
                                                <a href="#">  <img src="{{asset('images/b_images/'.$building->building_images)}}"> </a>
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
                </div>
            </div>
            <div class="owl-dots disabled">
                <button role="button" class="owl-dot active">
                    <span></span>
                </button>
            </div>
        </div>

    </div>
</section>
    @endsection