<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/js/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/lineicons/style.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{asset('admin/js/chart-master/Chart.js')}}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="{{URL::to('/')}}" class="logo"><b>Active MOMS  CLUB AMIN PANEL</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">


        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li>
                    <a href="{{ route('logout') }}" class="logout"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="{{URL::to('/')}}"><img src="{{asset('/image/ico/amclog.png')}}" class="img-circle" width="60"></a></p>
                <h5 class="centered"></h5>



                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-cogs"></i>
                        <span>Galery</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{URL::to('/adminpanel/galery')}}">Image</a></li>
                        <li><a  href="gallery.html">Video</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-book"></i>
                        <span>Extra Pages</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="blank.html">Blank Page</a></li>
                        <li><a  href="login.html">Login</a></li>
                        <li><a  href="lock_screen.html">Lock Screen</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-tasks"></i>
                        <span>Forms</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="form_component.html">Form Components</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="basic_table.html">Basic Table</a></li>
                        <li><a  href="responsive_table.html">Responsive Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="{{URL::to('/adminpanel/info')}}" >
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>ADMIN INFO</span>
                    </a>

                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
     @yield('content')



    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2014 - Alvarez.is
            <a href="index.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>

    <!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('admin/js/jquery.js')}}"></script>
<script src="{{asset('admin/js/jquery-1.8.3.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/jquery.sparkline.js')}}"></script>


<!--common script for all pages-->
<script src="{{asset('admin/js/common-scripts.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/js/gritter/js/jquery.gritter.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/gritter-conf.js')}}"></script>

<!--script for this page-->
<script src="{{asset('admin/js/sparkline-chart.js')}}"></script>
<script src="{{asset('admin/js/zabuto_calendar.js')}}"></script>



<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>


</body>
</html>