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
                            <a href="{{ route('view_plans') }}" class="nav-link" href="">View Plans</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('create_plans') }}" class="nav-link active" href="">Add Plan</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    {{-- NAV BAR END --}}

    {{-- TABLE START --}}

    <div class="row row-cols-1 justify-content-center align-items-center g-2 my-3 ">
        <div class="col">
            <form action="">
                <div class="mb-3">
                  <label for="" class="form-label">Name</label>
                  <input type="text"
                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Name</label>
                  <input type="text"
                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
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
