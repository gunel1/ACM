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

    <link rel="stylesheet" type="text/css" href="{{asset('admin/lineicons/style.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">


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
        <a href="{{URL::to('/')}}" class="logo"><b>@lang('words.amc')</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">


        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li>
                    <a href="{{ route('logout') }}" class="logout"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        @lang('words.logout')
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>

        <li class="dropdown nav pull-right top-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {{ Config::get('languages')[App::getLocale()] }}
            </a>
            <ul class="dropdown-menu">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                        <li>
                            <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>

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
                    <a href="{{URL::to('/adminpanel/info')}}" >
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>ADMIN INFO</span>
                    </a>

                </li>

                <li class="sub-menu">
                    <a href="{{URL::to('adminpanel/history')}}" >
                        <i class="fa fa-book"></i>
                        <span>@lang('words.history')</span>
                    </a>

                </li>

                <li class="sub-menu">
                    <a href="{{URL::to('adminpanel/achievement')}}" >
                        <i class="fa fa-book"></i>
                        <span>@lang('words.achievement')</span>
                    </a>

                </li>
                <li class="sub-menu">
                    <a href="{{URL::to('adminpanel/expert')}}" >
                        <i class="fa fa-tasks"></i>
                        <span>@lang('words.expert')</span>
                    </a>

                </li>
                <li class="sub-menu">
                    <a href="{{URL::to('adminpanel/team')}}" >
                        <i class="fa fa-th-list"></i>
                        <span>@lang('words.team')</span>
                    </a>

                </li>
                <li class="sub-menu">
                    <a href="{{URL::to('adminpanel/massmedia')}}" >
                        <i class="fa fa-magic"></i>
                        <span>@lang('words.kiv')</span>
                    </a>

                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-th"></i>
                        <span>@lang('words.galery')</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{URL::to('/adminpanel/galery')}}">@lang('words.image')</a></li>
                        <li><a  href="{{URL::to('/adminpanel/video')}}">@lang('words.video')</a></li>

                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="{{URL::to('')}}" >
                        <i class="fa fa-th-list"></i>
                        <span>@lang('words.event')</span>
                    </a>

                </li>

                <li class="sub-menu">
                    <a href="{{URL::to('')}}" >
                        <i class="fa fa-th-list"></i>
                        <span>@lang('words.story')</span>
                    </a>

                </li>

                <li class="sub-menu">
                    <a href="{{URL::to('')}}" >
                        <i class="fa fa-magic"></i>
                        <span>@lang('words.library')</span>
                    </a>

                </li>
                <li class="sub-menu">
                    <a href="{{URL::to('')}}" >
                        <i class="fa fa-magic"></i>
                        <span>@lang('words.blogmum')</span>
                    </a>

                </li>
                <li class="sub-menu">
                    <a href="{{URL::to('')}}" >
                        <i class="fa fa-magic"></i>
                        <span>@lang('words.projects')</span>
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
            2017 - by Coders
            <a href="index.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>

    <!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->

<script src="{{asset('admin/js/jquery.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>



<!--common script for all pages-->
<script src="{{asset('admin/js/common-scripts.js')}}"></script>


<!--script for this page-->





<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
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