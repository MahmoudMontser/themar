
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>Ubold - Responsive Admin Dashboard Template</title>

    <link href="{{asset('dash/assets/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{asset('dash/assets/js/modernizr.min.js')}}"></script>

</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>

<div class="wrapper-page">
    <div class="card-box">
        <div class="panel-heading">
            <h3 class="text-center"> Sign In to <strong class="text-custom">THEMAR DASHBOARD</strong></h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="post" action="{{route('admin_login')}}" enctype="application/x-www-form-urlencoded">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control"
                               type="text"
                               id="email"
                               required
                               name="email"
                               spellcheck="false"
                               placeholder=" الايميل">
                    </div>


                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control"
                               type="password"
                               id="password"
                               required
                               name="password"
                               placeholder=" كلمة المرور"
                               spellcheck="false">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                    </div>
                </div>
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light"type="submit"  value="submit">
                            دخول
                        </button>
                    </div>
                </div>
                <div class="form-group m-t-20 m-b-0">
                </div>
                {{csrf_field()}}
            </form>

        </div>
    </div>

</div>

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('dash/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('dash/assets/js/bootstrap-rtl.min.js')}}"></script>
<script src="{{asset('dash/assets/js/detect.js')}}"></script>
<script src="{{asset('dash/assets/js/fastclick.js')}}"></script>
<script src="{{asset('dash/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('dash/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('dash/assets/js/waves.js')}}"></script>
<script src="{{asset('dash/assets/js/wow.min.js')}}"></script>
<script src="{{asset('dash/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('dash/assets/js/jquery.scrollTo.min.js')}}"></script>


<script src="{{asset('dash/assets/js/jquery.core.js')}}"></script>
<script src="{{asset('dash/assets/js/jquery.app.js')}}"></script>

</body>
</html>