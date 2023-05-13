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
                                        <label for="" class="form-label">First Name</label>
                                        <input type="text"
                                            class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                            name="" id="" placeholder="">
                                    </div>
                                </td>
                                <td class="ps-2">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Last Name</label>
                                        <input type="text"
                                            class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                            name="" id="" placeholder="">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="pe-2">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Gender</label>
                                        <select
                                            class="form-select form-select-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                            name="" id="">
                                            <option class="bg-black text-white" selected>Male
                                            </option>
                                            <option class="bg-black text-white" value="">
                                                Trans</option>
                                            <option class="bg-black text-white" value="">
                                                Female</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="ps-2">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Country</label>
                                        <select
                                            class="form-select form-select-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                            name="" id="">
                                            <option class="bg-black text-white" selected>India</option>
                                            @foreach ($all_countries as $country)
                                                <option class="bg-black text-white"
                                                    value="{{ $country }}">{{ $country }}
                                                </option>
                                            @endforeach
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
                                        <label for="" class="form-label">Password</label>
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
