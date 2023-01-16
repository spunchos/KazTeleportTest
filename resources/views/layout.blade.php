<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>Галерея</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- GLOBAL MANDATORY STYLES -->
    <script src="https://kit.fontawesome.com/ff7936ea53.js" crossorigin="anonymous"></script>
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap-grid.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap-grid.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap-grid.rtl.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap-reboot.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('scss/_variables.scss')}}" rel="stylesheet" type="text/scss">
{{--    <link href="{{asset('')}}" rel="stylesheet" type="text/css">--}}
{{--    <link href="{{asset('')}}" rel="stylesheet" type="text/css">--}}
{{--    <link href="{{asset('')}}" rel="stylesheet" type="text/css">--}}
{{--    <link href="{{asset('')}}" rel="stylesheet" type="text/css">--}}




    <!-- PAGE LEVEL PLUGIN STYLES -->
{{--    <link href="{{asset('css/animate.css')}}" rel="stylesheet">--}}
{{--    <link href="{{asset('vendor/swiper/css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>--}}

    <!-- THEME STYLES -->
{{--    <link href="{{asset('css/layout.min.css')}}" rel="stylesheet" type="text/css"/>--}}

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico"/>
    <!--Carules-->
{{--    <link href="{{asset('css/carusel.css')}}" rel="stylesheet" type="text/css"/>--}}


</head>
<!-- END HEAD -->
<!-- BODY -->
<body id="body" data-spy="scroll" data-target=".header">
<!--========== HEADER ==========-->
<header class="site-header sticky-top py-1 bg-dark">
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container js_nav-item">

                <!-- начало логотип левая часть шапки -->
                <div class="logo">
                    <a class="logo-wrap" href="#body">
                        <img class="logo-img" src="{{asset('img/logo.png')}}" alt="Asentus Logo">
                    </a>
                </div>
                <!-- конец логотип левая часть шапки  -->
            </div>

            <!-- начало правой части шапки -->
<div>
    <ul class="nav navbar-nav navbar-nav-right">
        <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="{{ route("favourites") }}" style="color: white"><i class="fa-regular fa-heart"></i>&nbsp;Избранное</a></li>
    </ul>

</div>
            <!-- конец правой части шапки-->
        </div>
    </nav>
</header>

<!--========== END HEADER ==========-->
@yield('main_content')
<!-- Back To Top -->
<!-- Back To Top -->
<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="{{asset('vendor/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS -->
<script src="{{asset('vendor/jquery.easing.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.parallax.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.appear.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/swiper/js/swiper.jquery.min.js')}}" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script src="{{asset('js/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/components/progress-bar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/components/swiper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/components/wow.min.js')}}" type="text/javascript"></script>
</body>
<!-- END BODY -->
