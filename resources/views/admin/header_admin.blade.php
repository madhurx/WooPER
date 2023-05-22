<!DOCTYPE html>
<html lang="en">

<head>
    {{-- BASIC TAGS START --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @if (isset($title))
        <title>{{ $title }}</title>
    @else
        <title>WOOPER</title>
    @endif
    {{-- BASIC TAGS END --}}

    {{-- BOOTSTRAP CDN START --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous" />
    {{-- BOOTSTRAP CDN END --}}

    {{-- FONT AWESOME CDN END --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    {{-- FONT AWESOME CDN END --}}

    {{-- GOOGLE FONTS START --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Faustina:wght@300;500&family=Oswald:wght@600&family=Questrial&display=swap"
        rel="stylesheet" />
    <link
        href=" https://fonts.googleapis.com/css2?family=Anton&family=Cookie&family=Crimson+Text&family=Poppins:wght@500&display=swap"
        rel="stylesheet" />
    {{-- GOOGLE FONTS END --}}

    {{-- CSS SCRIPT START --}}
    <link href="{{ URL::asset('assets/admin/css/styles.css') }}" rel="stylesheet" />
    {{-- CSS SCRIPT END --}}
</head>

<body>
    {{-- NAV START --}}
    <nav class="navbar navbar-light bg-white sticky-top navbar_getstarted navbar-expand-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ URL::asset('assets/admin/image/Wooper_logo_black.PNG') }}" alt="" class="logo" />
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
                    {{--  <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" data-bs-display="static"
                            aria-expanded="false">Resources</a>
                        <ul class="dropdown-menu dropdown-menu-start">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>  --}}
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
    {{-- NAV END --}}

    {{-- MAIN SECTION START --}}

    <div class="container-fluid ps-0 min-vh-100 ">
        <div class="row min-vh-100">

            {{-- SIDEBAR COL START --}}

            <div class="col-2 bg-black">
                <div class="row p-3 w-100">
                    <div class="col py-4 text-white" style="width: 202px; position: fixed; top: 60">
                        

                        <h1 class="h4 text-center">
                            <i class="fa-solid fa-globe"></i>&nbsp;MENU
                        </h1>
                        <hr class="w-100 text-center" />
                        <ul style="list-style: none">
                            <li class="nav-item my-3">
                                <a href="{{ url('/admin') }}" class="nav-link align-middle px-0">
                                    <i class="fa-solid fa-table-columns"></i>
                                    <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item my-3">
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa-solid fa-chart-line"></i>
                                    <span class="ms-1 d-none d-sm-inline">Charts</span>
                                </a>
                            </li>

                            <li class="nav-item my-3">
                                <a class="btn text-white p-0" data-bs-toggle="collapse"
                                    href="#collapseExample" role="button" aria-expanded="false"
                                    aria-controls="collapseExample"><i
                                        class="fa-brands fa-google-wallet"></i>
                                    Portal
                                </a>

                                <div class="collapse" id="collapseExample">
                                    <div class="">
                                        <ul style="list-style: none">
                                            <li class="my-1"><i
                                                    class="fa-solid fa-users"></i>&nbsp;
                                                    <a name="" id="" class="text-decoration-none text-white" href="{{ route('customers_view_all') }}" role="button">Customers</a>
                                            </li>
                                            <li class="my-1"><i
                                                    class="fa-regular fa-lightbulb"></i>&nbsp;&nbsp;
                                                    <a name="" id="" class="text-decoration-none text-white" href="{{ route('view_plans') }}" role="button"> Plans</a>
                                            </li>
                                            <li class="my-1"><i
                                                    class="fa-solid fa-house-user"></i>&nbsp;&nbsp;<a name="" id="" class="text-decoration-none text-white" href="{{ route('customers_view_all') }}" role="button">HomePage</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item my-3">
                                <a class="btn text-white p-0" data-bs-toggle="collapse"
                                    href="#collapseExample2" role="button" aria-expanded="false"
                                    aria-controls="collapseExample2"><i
                                        class="fa-solid fa-money-check-dollar"></i>
                                    Premium
                                </a>

                                <div class="collapse" id="collapseExample2">
                                    <div class="">
                                        <ul style="list-style: none">
                                            <li class="my-1"><i
                                                    class="fa-solid fa-rss"></i>&nbsp;Blog</li>
                                            <li class="my-1"><i
                                                    class="fa-solid fa-file-pdf"></i>&nbsp;Notes
                                            </li>
                                            <li class="my-1"><i
                                                    class="fa-solid fa-file-audio"></i>&nbsp;Podcasts
                                            </li>
                                            <li class="my-1"><i
                                                    class="fa-solid fa-video"></i>&nbsp;Videos</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item my-3">
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa-solid fa-gear"></i>
                                    <span class="ms-1 d-none d-sm-inline">Settings</span>
                                </a>
                            </li>
                        </ul>

                    
                    </div>
                </div>
            </div>

            {{-- SIDEBAR COL END --}}