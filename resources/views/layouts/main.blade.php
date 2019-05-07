
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <title>{{$settings->title}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='{{asset('them/css/jquery.fancybox.min.css')}}'/>
    <link rel='stylesheet' href='{{asset('them/css/bootstrap.css')}}'/>
    <link rel='stylesheet' href='{{asset('them/css/rtl.css')}}'/>
    <link rel='stylesheet' href='{{asset('them/css/animate.css')}}'/>
    <link rel='stylesheet' href='{{asset('them/css/owl.carousel.min.css')}}'/>
    <link rel='stylesheet' href='{{asset('them/css/owl.theme.default.min.css')}}'/>

    <link rel='stylesheet' href='{{asset('them/css/style.css')}}'/>
    <link rel='stylesheet' href='{{asset('them/css/eng.css')}}'/>

    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

</head>
<body>







@yield('head')

@yield('contents')

<!--section footer-start-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 border-left">{{asset('them/imgs/logl.png')}}
                <div class="partion">
                    <a href="#">  <img class="img-responsive img-footer" src="{{asset('images/settings/'.$settings->logo)}}"></a>
                    <p>{{$settings->text_below_logo}}</p>
                    <ul class="list-unstyled social">
                        <li><a href="{{$settings->facebook_contact}}"><i class="fa fa-facebook"></i></a> </li>
                        <li><a href="{{$settings->twitter_contact}}"> <i class="fab fa-twitter"></i></a> </li>
                        <li><a href="{{$settings->instagram_contact}}"><i class="fab fa-instagram"></i> </a> </li>
                        <li><a href="{{$settings->google_contact}}"><i class="fab fa-google-plus-g"></i> </a> </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 border-left">
                <div class="partion part2">
                    <h1 class="main">الاقسام</h1>
                    <ul class="list-unstyled menu">
                        <li><a href="/"> الرئيسيه</a> </li>
                        <li><a href="/about_us"> من نحن</a> </li>
                        <li><a href="/buildings">العقارات</a> </li>
                        <li><a href="/contact_us"> اتصل بنا</a> </li>
                    </ul>
                </div>
            </div>


            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="partion part2 part3">
                    <h1 class="main">اتصل بنا</h1>
                    <ul class="list-unstyled contact">
                        <li><i class="fas fa-phone"></i><a href="#"><span>+966</span>{{$settings->phone}}</a> </li>
                        <li><i class="fab fa-whatsapp"></i><a href="#"><span>+966</span>{{$settings->whatsapp}}</a> </li>
                        <li><i class="fas fa-envelope"></i><a href="#">{{$settings->email}}</a></li>

                    </ul>
                </div>
            </div>

        </div>
        <div class="bottom-footer">
            <a href="#">www.Themar Evaluation.com</a>
            <div class="divider"></div>
            <div class="divider2"></div>
            <div class="copyrights">
                <p>جميع الحقوق محفوظه لموقع  <span>ثمار التطور</span> </p>
            </div>
        </div>

    </div>

</div>


<!--section footer-start-->
<div class="lang">
    <div class="language-button">
        <i class="fas fa-chevron-down"></i><h6>English</h6>

    </div>

    <div class="language-box">
        <h6>Arabic</h6>
        <h6>English</h6>
    </div>

</div>



<div class="small-search hidden-sm hidden-md hidden-lg" id="sear">
    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
</div>

<form class="small-form">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="بحث">
        <button type="submit" class="btn btn-default">انطلق</button>
        <div class="close"><i class="fas fa-times"></i></div>
    </div>

</form>

<!--reading scrol bare -->
<div class="scrol">

    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
</div>

<!--reading scrol bare -->`
<section class="overlay">

</section>
<!--loading page-->


<!--loading page-->

<div class="close-all">

</div>

<script src="{{asset('them/js/html5shiv.min.js')}}"></script>
<script src="{{asset('them/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('them/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('them/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('them/js/bootstrap.min.js')}}"></script>
<script src="{{asset('them/js/respond.min.js')}}"></script>
<script src="{{asset('them/js/custom.js')}}"></script>
<script src="{{asset('them/js/wow.min.js')}}"></script>
<script src="{{asset('them/js/jquery.nicescroll.min.js')}}"></script>




<script>
    new WOW().init();
</script>


</body>
</html>