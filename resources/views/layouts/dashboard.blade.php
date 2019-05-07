
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{asset('dash/assets/images/favicon_1.ico')}}">

    <title>THEMAR DASHBOARD</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('dash/assets/plugins/morris/morris.css')}}">

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


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>
                <!-- Image Logo here -->
                <!--<a href="index.html" class="logo">-->
                <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                <!--</a>-->
            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
                    <div class="pull-left">
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="md md-menu"></i>
                        </button>
                        <span class="clearfix"></span>
                    </div>

                    <ul class="nav navbar-nav hidden-xs">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                               role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>




                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="dropdown top-menu-item-xs">
                            <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                <li class="list-group slimscroll-noti notification-list">
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond noti-primary"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-cog noti-warning"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">New settings</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-bell-o noti-custom"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">Updates</h5>
                                                <p class="m-0">
                                                    <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-user-plus noti-pink"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">New user registered</h5>
                                                <p class="m-0">
                                                    <small>You have 10 unread messages</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond noti-primary"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-cog noti-warning"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">New settings</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="list-group-item text-right">
                                        <small class="font-600">See all notifications</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                        </li>
                        <li class="hidden-xs">
                            <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
                        </li>S
                        <li class="dropdown top-menu-item-xs">
                            <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">{{Auth()->user()->name}} </a>
                            <ul class="dropdown-menu">

                                <li class="divider"></li>
                                <li><a href="{{route('admin_logout')}}"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>

                    <li class="text-muted menu-title">Navigation</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><span class="fa fa-users"></span><span> Users </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('retrieve_users')}}"><span class="fa fa-list"></span>list of users</a></li>
                            <li><a href="{{route('create_users_page')}}"><span class="fa fa-plus"></span>Add user</a></li>

                        </ul>
                    </li>


                </ul>

                <ul>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><span class="fa fa-envelope-o"></span><span> Messages </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('retrieve_messages')}}"><span class="fa fa-list"></span>list of Messages</a></li>


                        </ul>
                    </li>


                </ul>
                <ul>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><span> Buildings </span><span class="ti-home"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('retrieve_buildings')}}"><span class="fa fa-list"></span>list of Buildings</a></li>
                            <li><a href="{{route('create_buildings_page')}}"><span class="fa fa-plus-circle"></span>Add Building</a></li>


                        </ul>
                    </li>


                </ul>
                <ul>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><span class="fa fa-flag-o"></span><span> About_US</span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('retrieve_hints')}}"><span class="fa fa-newspaper-o"></span>Hints</a></li>
                            <li><a href="{{route('retrieve_goals')}}"><span class="fa fa-trophy"></span>Goals</a></li>


                        </ul>
                    </li>


                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            @yield('contentt')

        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        © 2016. All rights reserved.
    </footer>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- Right Sidebar -->
<div class="side-bar right-bar nicescroll">
    <h4 class="text-center">Chat</h4>
    <div class="contact-list nicescroll">
        <ul class="list-group contacts-list">
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('dash/assets/images/users/avatar-1.jpg')}}" alt="">
                    </div>
                    <span class="name">Chadengle</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('dash/assets/images/users/avatar-2.jpg')}}" alt="">
                    </div>
                    <span class="name">Tomaslau</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('dash/assets/images/users/avatar-3.jpg')}}" alt="">
                    </div>
                    <span class="name">Stillnotdavid</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('dash/assets/images/users/avatar-4.jpg')}}" alt="">
                    </div>
                    <span class="name">Kurafire</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('dash/assets/images/users/avatar-5.jpg')}}" alt="">
                    </div>
                    <span class="name">Shahedk</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('dash/assets/images/users/avatar-6.jpg')}}" alt="">
                    </div>
                    <span class="name">Adhamdannaway</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('dash/assets/images/users/avatar-7.jpg')}}" alt="">
                    </div>
                    <span class="name">Ok</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('dash/assets/images/users/avatar-8.jpg')}}" alt="">
                    </div>
                    <span class="name">Arashasghari</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('dash/assets/images/users/avatar-9.jpg')}}" alt="">
                    </div>
                    <span class="name">Joshaustin</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{asset('dash/assets/images/users/avatar-10.jpg')}}" alt="">
                    </div>
                    <span class="name">Sortino</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
        </ul>
    </div>
</div>
<!-- /Right-bar -->

</div>
<!-- END wrapper -->



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

<script src="{{asset('dash/assets/plugins/peity/jquery.peity.min.js')}}"></script>

<!-- jQuery  -->
<script src="{{asset('dash/assets/plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{asset('dash/assets/plugins/counterup/jquery.counterup.min.js')}}"></script>



<script src="{{asset('dash/assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('dash/assets/plugins/raphael/raphael-min.js')}}"></script>

<script src="{{asset('dash/assets/plugins/jquery-knob/jquery.knob.js')}}"></script>

<script src="{{asset('dash/assets/pages/jquery.dashboard.js')}}"></script>

<script src="{{asset('dash/assets/js/jquery.core.js')}}"></script>
<script src="{{asset('dash/assets/js/jquery.app.js')}}"></script>
<script src="{{asset('dash/assets/plugins/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('dash/assets/plugins/summernote/summernote.min.js')}}"></script>




<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(".knob").knob();

    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        if($("#elm1").length > 0){
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height:300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "rtl insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script>





</body>
</html>