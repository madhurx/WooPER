<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap"
            rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous">
        <link href="{{ URL::asset('assets/Homepages/css/styles.css') }}" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-dark">
            <div class="container-fluid py-2">
                <a class="navbar-brand" href="{{ route('get_started')  }}">
                    <p class="logo">WooPER</p>
                </a>
                <div class="mx-5">
                    <button class="btn btn-primary btn-lg" type="button">Search</button>
                </div>
            </div>

        </nav>

    </body>

</html>
