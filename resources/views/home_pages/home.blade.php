<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous" />
    <link href="styles.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Faustina:wght@300;500&family=Oswald:wght@600&family=Questrial&display=swap"
        rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Faustina:wght@300;500&family=Oswald:wght@600&family=Questrial&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Cookie&family=Crimson+Text&family=Poppins:wght@500&display=swap"
        rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-light bg-white sticky-top navbar_getstarted">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="Wooper_logo_black.PNG" alt="" class="logo" />
            </a>
            <div class="mx-5">
                <button class="btn btn-outline-dark rounded-pill btn-sm get_started_signin_btn"
                    type="button">
                    SIGN OUT
                </button>
            </div>
        </div>
    </nav>

    {{-- MAIN SECTION START --}}

    <div class="container vh-100">
      <div class="row mt-5">

        <div class="col m-3 p-5">
          <h1 class="display-4 fw-semibold">
            WE ENSURE BETTER EDUCATION FOR A BETTER WORLD
          </h1>
          <p class="display-6 fs-3">
            We are team of talented teachers bringing out the change in world.
          </p>
          
        </div>
        <div class="col m-3 text-center">
          <img src="homepage_main_image.PNG" class="img-fluid rounded-top" alt="">
        </div>
        
      </div>
    </div>
    
    {{-- MAIN SECTION END --}}

    {{-- CLIENT SECTION START --}}

    <div class="container-fluid bg-primary-subtle mb-5">
      <div class="row justify-content-center align-items-center text-center bg-secondary-subtle my-2">
        <div class="col">
          <h1 class="display-6">OUR CLIENTS</h1>
        </div>
      </div>
      <div class="row justify-content-center align-items-center text-center py-1 mx-1  ">
        <div class="col"><img src="client_images/microsoft.png" class="img-fluid rounded-top" width="130px" height="60px" alt=""></div>
        <div class="col"><img src="client_images/adobe.png" class="img-fluid rounded-top" width="130px" height="60px" alt=""></div>
        <div class="col"><img src="client_images/ibm.png" class="img-fluid rounded-top" width="130px" height="50px" alt=""></div>
        <div class="col"><img src="client_images/salesforce.png" class="img-fluid rounded-top" width="130px" height="50px" alt=""></div>
        <div class="col"><img src="client_images/sap.png" class="img-fluid rounded-top" width="130px" height="50px" alt=""></div>
        <div class="col"><img src="client_images/oracle.png" class="img-fluid rounded-top" width="130px" height="60px" alt=""></div>
      </div>
    </div>

    {{-- CLIENT SECTION END --}}

    {{-- FOOTER SECTION START --}}

    <div class="container-fluid footer_container pb-2 pt-2">
      <div class="row justify-content-center align-items-center g-2 text-center">
        <div class="col">&copy; 2023 Copyright <strong>Wooper</strong></div>
        <div class="col fw-medium">Designed by Madhur Gupta</div>
        <div class="col">Terms & Privacy Policy</div>
        <div class="col">All Rights Reserved</div>
        <div class="col"><img src="footer.jpg" class="img-fluid rounded-top" width="130px" height="60px" alt=""></div>
        
        <div class="col">
          <i class="fa fa-paypal"></i>
          <i class="fa fa-facebook-official"></i>
          <i class="fa fa-github"></i>
          <i class="fa fa-linkedin"></i>
        </div>
        
      </div>
    </div>

    {{-- FOOTER SECTION END --}}

  </body>
</html>
