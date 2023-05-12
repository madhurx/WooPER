@include('home_pages.header_home_pages')

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
        <div class="col"><img src="client_images/microsoft.png" class="img-fluid rounded-top"
                width="130px" height="60px" alt=""></div>
        <div class="col"><img src="client_images/adobe.png" class="img-fluid rounded-top"
                width="130px" height="60px" alt=""></div>
        <div class="col"><img src="client_images/ibm.png" class="img-fluid rounded-top"
                width="130px" height="50px" alt=""></div>
        <div class="col"><img src="client_images/salesforce.png" class="img-fluid rounded-top"
                width="130px" height="50px" alt=""></div>
        <div class="col"><img src="client_images/sap.png" class="img-fluid rounded-top"
                width="130px" height="50px" alt=""></div>
        <div class="col"><img src="client_images/oracle.png" class="img-fluid rounded-top"
                width="130px" height="60px" alt=""></div>
    </div>
</div>

{{-- CLIENT SECTION END --}}

@include('home_pages.footer_home_pages')
