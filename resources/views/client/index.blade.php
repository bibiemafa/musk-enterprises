<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <title>{{ config('app.name', 'MoHCC') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .carousel-item {
            height: 65vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        video {
            width: 100%;
            height: auto;
        }

        .Splash {
            position: relative;
            width: 100%;
            margin: 0 auto;
            height: 80vh;
            background: #000;
            overflow: hidden;
            background: #fff;

        }

        .video-container {
            position: relative;

            bottom: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .video-container img {
            /* Make video to at least 100% wide and tall */
            width: auto;
            height: auto;
        }

        .mtt-5 {
            position: absolute;
            top: 20%;
            left: 50%;
            z-index: 10;
            width: 50%;
        }

        .mtt-5 .card {
            background-color: transparent;
            border: none;
        }

        .mtt-5 .card-header {
            color: #0d6efd;
            font-size: 40px;
            text-align: left;
            font-weight: bolder;
        }

        .mtt-5 .card-body h3 {
            padding: 5px;
            font-weight: bolder;
            margin-top: 10px;
            color: #324057;
            text-align: center;
        }

        ul li a {
            color: #fff;
        }
    </style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm mb-4">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}" style="font-weight: bolder;">
                    Musk Enterprises
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('login') }}" style="font-weight: bold;">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('register') }}" style="font-weight: bold;">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('client.create') }}" style="font-weight: bold;">{{ __('Register Service') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <body>
            <section class="Splash container-fluid" style="margin-top : -30px !important">
                <div class="video-container client">
                    <img src="img/2.png" alt="" srcset="" style="width: 50%; height : 80vh">
                </div>
                <div class="row mtt-5">
                    <div class="card">
                        <div class="card-header">MUSK ENTERPRISES</div>
                        <div class="card-body">
                            <h3>OUR CLIENTS, OUR PRIORITIES, OUR RESPONSIBILITIES</h3>
                        </div>
                    </div>
                </div>
            </section>

            <div class="card-body bg-white">
                @if (session('status'))
                <div class="alert alert-success bg-danger text-light" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success bg-success text-light" role="alert">
                    {{ session('success') }}
                </div>
                @endif
            </div>
            <div class="container">
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">WHAT DO WE DO</div>
                            <div class="card-body">
                                <p class="p-2 ">
                                    This is the home of quality services. With us , you are never disappointed. Cash back is guaranteed if you are not satisfied!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-primary mt-5">
                <div class="row p-2  ">
                    <div class="col-md-12 text-center text-white">
                        <h5>Copyright © 2022, <span class="text-light">Musk Enterprises</span> , <i>Inspectors</i>, All rights reserved.</h5>
                    </div>
                </div>
            </div>
    </div>
</body>