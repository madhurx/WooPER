<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Wooper Registration Mail</title>


    </head>

    <body>
        <p style="font-family:'Times New Roman', Times, serif; font-size: 20px ">
            Dear {{ $details['name'] }}, <br><span
                style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 25px ">
                WOOPER welcomes you. Your username to login Wooper account is {{
                $details['username'] }}</span>
        </p>
    </body>

</html>