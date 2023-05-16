@include('admin.header_admin')

            {{-- CONTENT COL START --}}

            <div class="col-10">
                <div class="row mt-5">
                    <div class="col my-5 p-5 text-center">
                        <h1 class="display-5 fw-normal">DASHBOARD</h1>
                        <p class="display-6 fs-4 my-5">
                            Manage WOOPER from here
                        </p>

                    </div>
                    <div class="col mx-3 my-5 text-center">
                        <img src="{{ URL::asset('assets/admin/image/dashboard.PNG') }}" class="img-fluid rounded-top" alt="" />
                    </div>
                </div>
            </div>

            {{-- CONTENT COL END --}}

        </div>
    </div>

    {{-- MAIN SECTION END --}}
    
    @include('admin.footer_admin')
  

    
