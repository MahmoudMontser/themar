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
                        <li ><a href="/contact_us" >اتصل بنا</a></li>
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
            <h1>تسجيل دخول جديد</h1>
        </div>

        <div class="page-details">
            <div class="container page-color">
                <ul class="list-unstyled">

                    <li>الرئيسيه</li>
                    <li><i class="fas fa-chevron-left"></i></li>
                    <li> تسجيل دخول جديد</li>
                </ul>
            </div>
        </div>
    </section>
    <!--section-head-end-->



    <div class="close-all">

    </div>

@endsection
@section('contents')
    <section class="sign-in">
        <div class="container">
            <div class="signn">
                <div class="sign">
                    <div class=" col-lg-7 col-md-7 col-sm-12 col-xs-12 pull-right">


                        <form method="post" action="user_create" enctype="application/x-www-form-urlencoded">
                            <div class="form-group sign-up">

                                {{ csrf_field() }}
                                <input type="text" class="form-control one sign-up-one mainLoginInput"
                                       id="user-name"
                                       required
                                       name="name"
                                       spellcheck="false"
                                       placeholder="   اسم المستخدم   ">

                                <input type="text" class="form-control two sign-up-two mainLoginInput"
                                       id="phone-number"
                                       required
                                       name="phone_number"
                                       spellcheck="false"
                                       placeholder="    رقم الجوال    ">
                                <input type="text" class="form-control two sign-up-two mainLoginInput"
                                       id="email"
                                       required
                                       name="email"
                                       spellcheck="false"
                                       placeholder="    الايميل ">
                                <input type="text" class="form-control two sign-up-two mainLoginInput"
                                       id="pass"
                                       required
                                       name="pass"
                                       type="password"
                                       spellcheck="false"
                                       placeholder="   كلمه المرور ">
                                <input type="text" class="form-control two sign-up-two mainLoginInput"
                                       id="pass_confirmation"
                                       required
                                       type="password"
                                       name="pass_confirmation"
                                       spellcheck="false"
                                       placeholder="    تاكيد كلمه المرور ">

                                <button type="submit"  value="submit" class="btn btn-default">تسجيل</button>
                                <div class="not-avilable">
                                    لدي حساب بالفعل<span><a href="#">تسجيل دخول</a> </span>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class=" col-lg-5 col-md-5 pull-left hidden-sm hidden-xs">
                        <div class="img-left rocket">
                            <img src="{{asset('them/imgs/rocko.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
