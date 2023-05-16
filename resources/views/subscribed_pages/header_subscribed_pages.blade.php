<!DOCTYPE html>
<html lang="en">

<head>

    {{--  BASIC TAGS START  --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    {{--  BASIC TAGS END  --}}

    {{--  BOOTSTRAP CDN START  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous" />
    {{--  BOOTSTRAP CDN END  --}}

    {{--  CSS SCRIPT START  --}}
    <link href="{{ URL::asset('assets/subscribed_pages/css/styles.css') }}" rel="stylesheet" />
    {{--  CSS SCRIPT END  --}}

    {{--  FONT AWESOME CDN END  --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    {{--  FONT AWESOME CDN END  --}}

    {{--  GOOGLE FONTS START  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Faustina:wght@300;500&family=Oswald:wght@600&family=Questrial&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Cookie&family=Crimson+Text&family=Poppins:wght@500&display=swap"
        rel="stylesheet" />
    {{--  GOOGLE FONTS END  --}}

</head>

<body>

    {{--  NAV BAR START  --}}
    {{-- <nav class="navbar navbar-default navbar-light bg-white sticky-top navbar_getstarted">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{  URL::asset('assets/subscribed_page/image/Wooper_logo_black.PNG') }}" alt="" class="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mynavbarrr">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mynavbarrr">
                <ul class="navbar-nav navbar-nav">

                    <li class="nav-item fw-medium">
                        <a class="nav-link" href="{{  route('homepage_index')}}">Home</a>
                    </li>
                    <li class="nav-item fw-medium">
                        <a class="nav-link" href="{{  route('about')}}">About</a>
                    </li>
                    <li class="nav-item fw-medium">
                        <a class="nav-link" href="{{  route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" data-bs-display="static"
                            aria-expanded="false">Resources</a>
                        <ul class="dropdown-menu dropdown-menu-start">
                            @if ($plan_id >= 1)
                                <li><a class="dropdown-item" href="#">Blogs</a></li>
                            @endif
                            @if ($plan_id >= 2)
                                <li><a class="dropdown-item" href="#">Notes</a></li>
                            @endif
                            @if ($plan_id >= 3)
                                <li><a class="dropdown-item" href="#">Podcasts</a></li>
                            @endif
                            @if ($plan_id >= 4)
                                <li><a class="dropdown-item" href="#">Videos</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="mx-5">
                <button class="btn btn-outline-dark rounded-pill btn-sm get_started_signin_btn"
                    type="button">
                    SIGN OUT
                </button>
            </div>
        </div>
    </nav> --}}

    <nav class="navbar navbar-light bg-white sticky-top navbar_getstarted navbar-expand-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ URL::asset('assets/home_pages/image/Wooper_logo_black.PNG') }}"
                    alt="" class="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mynavbarr">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mynavbarr">
                <ul class="navbar-nav navbar-nav">

                    <li class="nav-item fw-medium">
                        <a class="nav-link" href="{{ route('homepage_index') }}">Home</a>
                    </li>
                    <li class="nav-item fw-medium">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item fw-medium">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" data-bs-display="static"
                            aria-expanded="false">Resources</a>
                        <ul class="dropdown-menu dropdown-menu-start">
                            @if ($plan_id >= 1)
                                <li><a class="dropdown-item" href="{{ route('blogs') }}">Blogs</a></li>
                            @endif
                            @if ($plan_id >= 2)
                                <li><a class="dropdown-item" href="{{ route('notes') }}">Notes</a></li>
                            @endif
                            @if ($plan_id >= 3)
                                <li><a class="dropdown-item" href="{{ route('podcasts') }}">Podcasts</a></li>
                            @endif
                            @if ($plan_id >= 4)
                                <li><a class="dropdown-item" href="{{ route('videos') }}">Videos</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="mx-5">
                <a href="{{ route('logout') }}" class="btn btn-outline-dark rounded-pill btn-sm get_started_signin_btn"
                    type="button">
                    SIGN OUT
                </a>
            </div>
        </div>
    </nav>

    {{--  NAV BAR END  --}}
