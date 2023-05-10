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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    {{--  BOOTSTRAP CDN END  --}}

    {{--  GOOGLE FONTS START  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Faustina:wght@300;500&family=Oswald:wght@600&family=Questrial&display=swap"
        rel="stylesheet" />
    <link href="{{ URL::asset('assets/Homepages/css/styles.css') }}" rel="stylesheet">
    {{--  GOOGLE FONTS END  --}}

</head>


<body>
    <nav class="navbar navbar-dark navbar-fixed-top navbar_getstarted">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ URL::asset('assets/Homepages/image/Wooper_logo_white.PNG') }}Wooper_logo_white.PNG"
                    alt="" class="logo" />
            </a>
            <div class="mx-5">
                <button class="btn btn-outline-dark rounded-pill btn-sm get_started_signin_btn"
                    type="button">
                    SIGN IN
                </button>
            </div>
        </div>
    </nav>
