{{--  <!DOCTYPE html>
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
    <nav class="navbar navbar-dark navbar-fixed-top navbar_getstarted">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="Wooper_logo_white.PNG" alt="" class="logo" />
            </a>
            <div class="mx-5">
                <button class="btn btn-outline-dark rounded-pill btn-sm get_started_signin_btn"
                    type="button">
                    SIGN IN
                </button>
            </div>
        </div>
    </nav>  --}}
@include('landing_pages.header_landing_page')


    {{-- MAIN SECTION START --}}
    <div class="container">
        <div class="row justify-content-center my-5">
            {{-- INFO COLUMN START --}}
            <div class="col-7 mx-1">
                <div class="my-5 text-white">
                    <div class="h1 fw-bolder fa-3x">
                        Learn New Everyday Without Limits
                    </div>
                    <div>
                        <p class="fw-bold text-white my-5">
                            We are a nonprofit with the mission to provide a free,<br>world-class
                            education for anyone, anywhere.<br>
                            We empower teachers to support their entire classroom.<br>Learn
                            the technical skills needed to build an audience, <br>create a
                            brand, and drive sales.
                        </p>
                    </div>
                    <div class="my-5">
                        Become lifelong learners with India's best teachers,<br />engaging
                        video lessons and personalised learning journeys.<br />
                        Wooper helps him stay ahead of your peers. Wooper BYJU'S has
                        made<br />learning stress-free and effective. Videos and
                        supportive teachers<br />give the confidence to ace the exams.
                        Master the numbers behind <br />the data in a flexible learning
                        structure. Design more intelligent, <br />beautiful web flows in a
                        flexible learning structure. Lead teams towards<br />a unified end
                        goal using all the current software and methodologies.
                    </div>
                </div>
            </div>
            {{-- INFO COLUMN END --}}

            {{-- FORM COLUMN START --}}
            <div class="col text-white mx-1 reg_form_col">
                <div class="mx-4">
                    <div class="mt-5 mb-4">
                        <p class="text-center reg_form_heading">
                            Welcome to Family!
                        </p>
                    </div>
                    <div class="reg_form_div">
                        <form method="post">
                            <table>
                                <tr>
                                    <td class="pe-2">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Name</label>
                                            <input type="text"
                                                class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                                name="" id="" placeholder="">
                                        </div>
                                    </td>
                                    <td class="ps-2">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Name</label>
                                            <input type="text"
                                                class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                                name="" id="" placeholder="">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pe-2">
                                        <div class="mb-3">
                                            <label for="" class="form-label">City</label>
                                            <select
                                                class="form-select form-select-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                                name="" id="">
                                                <option class="bg-black text-white" selected>Select
                                                    one</option>
                                                <option class="bg-black text-white" value="">
                                                    New Delhi</option>
                                                <option class="bg-black text-white" value="">
                                                    Istanbul</option>
                                                <option class="bg-black text-white" value="">
                                                    Jakarta</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td class="ps-2">
                                        <div class="mb-3">
                                            <label for="" class="form-label">City</label>
                                            <select
                                                class="form-select form-select-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                                name="" id="">
                                                <option class="bg-black text-white" selected>Select
                                                    one</option>
                                                <option class="bg-black text-white" value="">
                                                    New Delhi</option>
                                                <option class="bg-black text-white" value="">
                                                    Istanbul</option>
                                                <option class="bg-black text-white" value="">
                                                    Jakarta</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Email</label>
                                            <input type="email"
                                                class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0 "
                                                name="" id="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="mb-3">
                                            <label for=""
                                                class="form-label">Password</label>
                                            <input type="password"
                                                class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                                name="" id="" placeholder="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="text-center m-1">
                                            {{-- <a style="background-color: rgb(248, 125, 125); color: rgb(0, 0, 0); text-decoration: none;" class="px-4 py-3 reg_form_submit_button fw-bolder fs-5" href="index.html" role="submit">SIGN UP
                      </a> --}}

                                            <button
                                                class="btn btn-primary px-4 py-3 reg_form_submit_button"
                                                type="submit">SIGN UP</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            {{-- FORM COLUMN END --}}
        </div>
    </div>
    {{-- MAIN SECTION END --}}
    @include('landing_pages.footer_landing_page')

