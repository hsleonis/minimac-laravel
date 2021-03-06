<?php
/**
 * MiniMac - Minimal Laravel Blog
 * User: Shahriar
 * Date: 31/10/2016
 * http://themeaxe.com
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MiniMac - Minimal Laravel blog">
    <meta name="author" content="Md. Hasan Shahriar">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titlebar') - MiniMac Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('resource/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ URL::asset('resource/css/clean-blog.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('resource/css/ionicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">@yield('brand')</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ URL::route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ URL::route('about') }}">About</a>
                </li>
                {{--<li>
                    <a href="{{ URL::route('post') }}">Sample Post</a>
                </li>--}}
                <li>
                    <a href="{{ URL::route('contact') }}">Contact</a>
                </li>
                @if (Auth::guest())
                    <li>
                        <a href="{{ URL::route('login') }}">Login</a>
                    </li>
                @else
                    <li>
                        <a href="{{ URL::route('dashboard') }}">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('@yield("header_img")')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>@yield('title')</h1>
                    <hr class="small">
                    <span class="subheading">@yield('subtitle')</span>
                    @section('author')
                    @show
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @section('content')
                <!-- Main content -->
            @show
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    <li>
                        <a href="#">
                                <span class="ion-stack">
                                    <i class="ion-record ion-lg ion-stack-2x"></i>
                                    <i class="ion-social-twitter ion-stack-1x ion-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span class="ion-stack">
                                    <i class="ion-record ion-lg ion-stack-2x"></i>
                                    <i class="ion-social-facebook ion-stack-1x ion-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span class="ion-stack">
                                    <i class="ion-record ion-lg ion-stack-2x"></i>
                                    <i class="ion-social-github ion-stack-1x ion-inverse"></i>
                                </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; ThemeAxe 2016</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="{{ URL::asset('resource/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('resource/js/bootstrap.min.js') }}"></script>

<!-- Contact Form JavaScript -->
<script src="{{ URL::asset('resource/js/jqBootstrapValidation.js') }}"></script>
<script src="{{ URL::asset('resource/js/contact_me.js') }}"></script>

<!-- Theme JavaScript -->
<script src="{{ URL::asset('resource/js/main.js') }}"></script>

<!-- Comment count -->
<script id="dsq-count-scr" src="//minimac-1.disqus.com/count.js" async></script>
</body>

</html>
