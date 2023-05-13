@include('home_pages.header_home_pages')

{{-- MAIN SECTION START --}}

<div class="container vh-100">
    <div class="row mt-5 justify-content-center align-content-center mb-5">
        <div class="col mx-3 my-3 p-1">
            <div class="card border-0"
                style="width: 22rem; box-shadow: rgba(0, 0, 0, 0.16) 0px 4px 8px, rgba(0, 0, 0, 0.23) 0px 4px 8px;">
                <div style="width: 100%; border-bottom: 3px solid red; border-radius: 2px;">
                    <iframe width="100%" height="300" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="{{ url('https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=%20164,%20A%20Block,%20Sector%2063,%20Noida,%20Uttar%20Pradesh%20201301+(Mawai%20Infotech)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                            href="https://www.gps.ie/sport-gps/') }}">fitness tracker</a></iframe>
                </div>
                <div class="card-body mt-3">
                    <div class="card-text">
                        <h1 class="h5 font-monospace fw-bold text-center">
                            CONTACT US
                        </h1>
                        <hr class="bg-black border-1 border-black text-center w-auto mb-5 mt-4">
                        <div class="row my-2">
                            <div class="col-2 "><i class="fa fa-location-arrow"></i></div>
                            <div class="col">
                                <h6 class="fw-lighter fs-6 ">
                                    164, A Block, Sector 63, Noida 201301
                                </h6>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-2"><i class="fa fa-phone"></i></div>
                            <div class="col">
                                <h6 class="fw-lighter fs-6">
                                    9004455666
                                </h6>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-2"><i class="fa fa-envelope-open"></i></div>
                            <div class="col">
                                <h6 class="fw-lighter fs-6">
                                    contact@wooper.com
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mx-3 my-5 p-5 text-center">
            <img src="contactus_image.png" class="img-fluid rounded-top" alt="" />
        </div>
    </div>
</div>

{{-- MAIN SECTION END --}}

@include('home_pages.footer_home_pages')
