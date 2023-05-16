@include('admin.header_admin')


    {{-- MAIN SECTION START --}}

    <div class="container-fluid ps-0 min-vh-100 ">
        <div class="row min-vh-100">

            {{-- SIDEBAR COL START --}}

            <div class="col-2 bg-black">
                <div class="row p-3 w-100">
                    <div class="col py-4 text-white" style="width: 202px; position: fixed; top: 60">
                        {{-- --}}

                        <h1 class="h4 text-center">
                            <i class="fa-solid fa-globe"></i>&nbsp;MENU
                        </h1>
                        <hr class="w-100 text-center" />
                        <ul style="list-style: none">
                            <li class="nav-item my-3">
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa-solid fa-table-columns"></i>
                                    <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item my-3">
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa-solid fa-chart-line"></i>
                                    <span class="ms-1 d-none d-sm-inline">Charts</span>
                                </a>
                            </li>

                            <li class="nav-item my-3">
                                <a class="btn text-white p-0" data-bs-toggle="collapse"
                                    href="#collapseExample" role="button" aria-expanded="false"
                                    aria-controls="collapseExample"><i
                                        class="fa-brands fa-google-wallet"></i>
                                    Portal
                                </a>

                                <div class="collapse" id="collapseExample">
                                    <div class="">
                                        <ul style="list-style: none">
                                            <li class="my-1"><i
                                                    class="fa-solid fa-video"></i>&nbsp;Customers
                                            </li>
                                            <li class="my-1"><i
                                                    class="fa-regular fa-lightbulb"></i>&nbsp;Plans
                                            </li>
                                            <li class="my-1"><i
                                                    class="fa-solid fa-house-user"></i>&nbsp;Homepage
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item my-3">
                                <a class="btn text-white p-0" data-bs-toggle="collapse"
                                    href="#collapseExample2" role="button" aria-expanded="false"
                                    aria-controls="collapseExample2"><i
                                        class="fa-solid fa-money-check-dollar"></i>
                                    Premium
                                </a>

                                <div class="collapse" id="collapseExample2">
                                    <div class="">
                                        <ul style="list-style: none">
                                            <li class="my-1"><i
                                                    class="fa-solid fa-rss"></i>&nbsp;Blog</li>
                                            <li class="my-1"><i
                                                    class="fa-solid fa-file-pdf"></i>&nbsp;Notes
                                            </li>
                                            <li class="my-1"><i
                                                    class="fa-solid fa-file-audio"></i>&nbsp;Podcasts
                                            </li>
                                            <li class="my-1"><i
                                                    class="fa-solid fa-video"></i>&nbsp;Videos</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item my-3">
                                <a href="#" class="nav-link align-middle px-0">
                                    <i class="fa-solid fa-gear"></i>
                                    <span class="ms-1 d-none d-sm-inline">Settings</span>
                                </a>
                            </li>
                        </ul>

                        {{-- --}}
                    </div>
                </div>
            </div>

            {{-- SIDEBAR COL END --}}

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
                                        <a class="nav-link " href="#" role="button">
                                            Create Instructor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active"
                                            href="{{ url('/admin/instructor/all') }}">All
                                            Instructors</a>
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
                        <div class="table-responsive">
                            <table
                                class="table table-striped
                    table-hover	
                    table-borderless
                    table-primary
                    align-middle">
                                <thead class="table-light">
                                    <caption>Instructors</caption>
                                    <tr>
                                        <th>Instructor Name</th>
                                        <th>FB Profile ID</th>
                                        <th class="text-center">Profile Picture</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($instructors as $val)
                                        <tr class="table-primary">
                                            <td>{{ $val->instructor_name }}</td>
                                            <td>{{ $val->instructor_profile }}</td>
                                            <td class="text-center">
                                                <img src="{{ URL::asset('/uploaded_images/Instructor_PFP/' . $val->instructor_pfp) }}"
                                                    class="img-fluid rounded-top" alt="as"
                                                    width="40px" height="40px">
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-secondary"
                                                    href="{{ route('instructor_table_editBtn', [$val->instructor_id]) }}"
                                                    role="button">Edit</a>
                                            </td>
                                            <td>
                                                {{-- Delete Button trigger modal --}}
                                                <button type="button"
                                                    class="btn btn-outline-danger"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $val->instructor_id }}">
                                                    Delete
                                                </button>

                                                {{-- Modal --}}
                                                <div class="modal fade"
                                                    id="deleteModal{{ $val->instructor_id }}"
                                                    tabindex="-1"
                                                    aria-labelledby="deleteModalLabel{{ $val->instructor_id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5"
                                                                    id="deleteModalLabel{{ $val->instructor_id }}">
                                                                    Confirm Delete
                                                                </h1>
                                                                <button type="button"
                                                                    class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure to delete record of
                                                                {{ $val->instructor_name }}?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">NO</button>
                                                                <a class="btn btn-outline-danger"
                                                                    href="{{ route('instructor_table_deleteBtn', [$val->instructor_id]) }}"
                                                                    role="button">Yes</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>


                {{-- TABLE END --}}


            </div>

            {{-- CONTENT COL END --}}

        </div>
    </div>

    {{-- MAIN SECTION END --}}

    @include('admin.footer_admin')

