<!DOCTYPE html>
<html lang="en">

<head>

    {{--  BASIC TAGS START  --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TITLEEEEEEEEE</title>
    {{--  BASIC TAGS END  --}}

    {{--  BOOTSTRAP CDN START  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous" />
    {{--  BOOTSTRAP CDN END  --}}

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

    {{--  CSS SCRIPT START  --}}
    <link href="{{ URL::asset('assets/landing_pages/css/styles.css') }}" rel="stylesheet">
    {{--  CSS SCRIPT END  --}}

</head>

<body>

    {{--  NAV START  --}}
    <nav class="navbar navbar-light bg-white sticky-top navbar_getstarted navbar-expand-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="Wooper_logo_black.PNG" alt="" class="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mynavbarr">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mynavbarr">
                <ul class="navbar-nav navbar-nav">
                    <li class="nav-item fw-medium">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item fw-medium">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item fw-medium">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" data-bs-display="static"
                            aria-expanded="false">Resources</a>
                        <ul class="dropdown-menu dropdown-menu-start">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
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
    </nav>
    {{--  NAV END  --}}
