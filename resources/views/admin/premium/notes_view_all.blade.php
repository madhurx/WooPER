<!DOCTYPE html>
<html lang="en">

<head>
    {{-- BASIC TAGS START --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TITLEEEEEEEEE</title>
    {{-- BASIC TAGS END --}}

    {{-- BOOTSTRAP CDN START --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous" />
    {{-- BOOTSTRAP CDN END --}}

    {{-- FONT AWESOME CDN END --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    {{-- FONT AWESOME CDN END --}}

    {{-- GOOGLE FONTS START --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Faustina:wght@300;500&family=Oswald:wght@600&family=Questrial&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Cookie&family=Crimson+Text&family=Poppins:wght@500&display=swap"
        rel="stylesheet" />
    {{-- GOOGLE FONTS END --}}

    {{-- CSS SCRIPT START --}}
    <link href="styles.css" rel="stylesheet" />
    {{-- CSS SCRIPT END --}}
</head>

<body>
    {{-- NAV START --}}
    <nav class="navbar navbar-light bg-white sticky-top navbar_getstarted navbar-expand-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="Wooper_logo_black.PNG" alt="" class="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mynavbarr">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mynavbarr">
                <ul class="navbar-nav navbar-nav">
                    <li class="nav-item fw-medium">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item fw-medium">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item fw-medium">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" data-bs-display="static"
                            aria-expanded="false">Resources</a>
                        <ul class="dropdown-menu dropdown-menu-start">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="mx-5">
                <button class="btn btn-outline-dark rounded-pill btn-sm get_started_signin_btn"
                    type="button">
                    SIGN OUT
                </button>
            </div>
        </div>
    </nav>
    {{-- NAV END --}}

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

    {{-- FOOTER SECTION START --}}

    <div class="container-fluid footer_container pb-2 pt-2">
        <div class="row justify-content-center align-items-center g-2 text-center">
            <div class="col">&copy; 2023 Copyright <strong>Wooper</strong></div>
            <div class="col fw-medium">Designed by Madhur Gupta</div>
            <div class="col">Terms & Privacy Policy</div>
            <div class="col">All Rights Reserved</div>
            <div class="col">
                <img src="footer.jpg" class="img-fluid rounded-top" width="130px"
                    height="60px" alt="" />
            </div>

            <div class="col">
                <i class="fa fa-paypal"></i>
                <i class="fa fa-facebook-official"></i>
                <i class="fa fa-github"></i>
                <i class="fa fa-linkedin"></i>
            </div>
        </div>
    </div>

    {{-- FOOTER SECTION END --}}

    {{-- FONT AWESOME START --}}
    <script src="https://kit.fontawesome.com/3d0e7e114f.js" crossorigin="anonymous"></script>
    {{-- FONT AWESOME END --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
