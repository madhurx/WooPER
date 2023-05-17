@include('admin.header_admin')


{{-- CONTENT COL START --}}

<div class="col-10 px-3">

    {{-- NAV BAR START --}}

    <div
        class="row-cols-1 row justify-content-center align-items-center text-white py-4 content_navbar">
        <div class="col">
            <nav class="navbar navbar-expand-sm bg-black navbar-light">
                <div class="container-fluid">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="{{ route('view_plans') }}" class="nav-link" href="">View
                                Plans</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('create_plans') }}" class="nav-link active"
                                href="">Add Plan</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    {{-- NAV BAR END --}}

    {{-- TABLE START --}}

    <div class="row row-cols-1 justify-content-center align-items-center g-2 my-3 px-5">
        <div class="col px-5">
            <form action="">
                <div class=" input-group mb-1">
                    <span class="input-group-text">Plan Name</span>
                    <input type="text" class="form-control form-control-sm" name="plan_name" id=""
                        aria-describedby="helpId" placeholder="">
                </div>

                <div class=" input-group mb-1">
                    <span class="input-group-text">Price</span>
                    <input type="text" class="form-control form-control-sm" name="price">

                </div>

                <div class="input-group mb-1">
                    <span class="input-group-text">Feautures 1*</span>
                    <input type="text" class="form-control form-control-sm" name="feautures_req"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feautures 2</span>
                    <input type="text" class="form-control form-control-sm" name="feautures[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feautures 3</span>
                    <input type="text" class="form-control form-control-sm" name="feautures[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feautures 4</span>
                    <input type="text" class="form-control form-control-sm" name="feautures[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feautures 5</span>
                    <input type="text" class="form-control form-control-sm" name="feautures[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feautures 6</span>
                    <input type="text" class="form-control form-control-sm" name="feautures[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feautures 7</span>
                    <input type="text" class="form-control form-control-sm" name="feautures[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feautures 8</span>
                    <input type="text" class="form-control form-control-sm" name="feautures[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feautures 9</span>
                    <input type="text" class="form-control form-control-sm" name="feautures[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feautures 10</span>
                    <input type="text" class="form-control form-control-sm" name="feautures[]"
                        id="">
                </div>




            </form>

        </div>
    </div>


    {{-- TABLE END --}}


</div>

{{-- CONTENT COL END --}}

</div>
</div>

{{-- MAIN SECTION END --}}

@include('admin.footer_admin')