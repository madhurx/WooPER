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
                                href="">Add Basic Plan</a>
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
            <form action="{{ url('admin\add-plan') }}" method="post" class="mb-4">
                @csrf
                <div class=" input-group mb-1">
                    <span class="input-group-text">Basic Plan Name</span>
                    <input type="text" class="form-control form-control-sm" name="planname"
                        id="" aria-describedby="helpId1" placeholder="">
                    @error('planname')
                        <small id="helpId1" class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>

                <div class=" input-group mb-1">
                    <span class="input-group-text">Price</span>
                    <input type="text" class="form-control form-control-sm" name="price"
                        aria-describedby="helpId2">
                    @error('price')
                        <small id="helpId2" class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>

                <div class="input-group mb-1">
                    <span class="input-group-text">Plan ID</span>
                    <input type="number" class="form-control form-control-sm" name="plan_id" id=""
                        aria-describedby="helpI3" placeholder="">
                    @error('plan_id')
                        <small id="helpId3" class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>

                <div class="input-group mb-1">
                    <span class="input-group-text">Feature 1*</span>
                    <input type="text" class="form-control form-control-sm"
                        name="required_feature" id="" aria-describedby="helpId3">
                    @error('required_feature')
                        <small id="helpId3" class="form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>

                <div class="input-group mb-1">
                    <span class="input-group-text">Feature 2</span>
                    <input type="text" class="form-control form-control-sm" name="features[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feature 3</span>
                    <input type="text" class="form-control form-control-sm" name="features[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feature 4</span>
                    <input type="text" class="form-control form-control-sm" name="features[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feature 5</span>
                    <input type="text" class="form-control form-control-sm" name="features[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feature 6</span>
                    <input type="text" class="form-control form-control-sm" name="features[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feature 7</span>
                    <input type="text" class="form-control form-control-sm" name="features[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feature 8</span>
                    <input type="text" class="form-control form-control-sm" name="features[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feature 9</span>
                    <input type="text" class="form-control form-control-sm" name="features[]"
                        id="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text">Feature 10</span>
                    <input type="text" class="form-control form-control-sm" name="features[]"
                        id="">
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" name="is_active"
                        id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Active
                    </label>
                </div>
                <button type="submit" class="btn btn-primary my-2">Submit</button>


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
