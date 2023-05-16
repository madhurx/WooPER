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
                                        <a class="nav-link active" href="#" role="button">
                                            Create Instructor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ url('/admin/instructor/all') }}">All
                                            Instructors</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                {{-- NAV BAR END --}}

                {{-- FORM START --}}

                <div
                    class="row-cols-1 row justify-content-center align-items-center my-3 g-2 bg-white text-dark">
                    <div class="col">
                        <form method="POST" class="px-5" enctype="multipart/form-data"
                            action="{{ url($action_url) }}">
                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">Instructor Name</label>
                                <input type="text" class="form-control" name="instructor_name"
                                    id="" placeholder=""
                                    value="{{ $edit->instructor_name == null ? '' : $edit->instructor_name }}" />
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">FB Profile ID</label>
                                <input type="text" class="form-control"
                                    name="instructor_profile" id="" placeholder=""
                                    value="{{ $edit->instructor_profile == null ? '' : $edit->instructor_profile }}" />
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Profile Picture</label>
                                <input type="file" class="form-control" name="instructor_pfp"
                                    id="" placeholder="" />
                            </div>
                            @if ($edit->instructor_pfp != null)
                                <div class="mb-3">
                                    <p>Uploaded Picture</p>
                                    <img src="{{ URL::asset('uploaded_images/Instructor_PFP/' . $edit->instructor_pfp) }}"
                                        class="img-fluid rounded" alt=""
                                        style="width: 75px; height: 75px; border: solid 1px grey" />
                                </div>
                            @endif

                            <button type="submit" class="btn btn-success">SAVE</button>
                        </form>
                    </div>
                </div>

                {{-- FORM END --}}
            </div>

            {{-- CONTENT COL END --}}
        </div>
    </div>

    {{-- MAIN SECTION END --}}
    @include('admin.footer_admin')

