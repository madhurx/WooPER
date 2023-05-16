@include('landing_pages.header_landing_page')

{{--  Checking if plan is selected start --}}
@if (!isset($plan_id))
    <script>
        window.location = "{{ route('pricing_plans') }}";
    </script>
    echo("AASs");
@endif
{{--  Checking if plan is selected end --}}

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
                    <form method="post" action="{{ url('/register') }}" class=" d-flex justify-content-center">
                        @csrf
                        <table class="m-0">
                            <tr class="align-top text-start">
                                <td class="pe-2">
                                    <div class="mb-3">
                                        <label for="" class="form-label">First Name</label>
                                        <input type="text"
                                            class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                            name="first_name" id="" placeholder="">
                                        <small class="form-text text-warning fw-medium">
                                            @error('first_name')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </td>
                                <td class="ps-2">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Last Name</label>
                                        <input type="text"
                                            class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                            name="last_name" id="" placeholder="">
                                        <small class="form-text text-warning fw-medium">
                                            @error('last_name')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </td>
                            </tr>

                            <tr class="text-start">
                                <td class="pe-2">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Gender</label>
                                        <select
                                            class="form-select form-select-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                            name="gender" id="">
                                            <option class="bg-black text-white" value="Male"
                                                selected>Male
                                            </option>
                                            <option class="bg-black text-white" value="Trans">
                                                Trans</option>
                                            <option class="bg-black text-white" value="Female">
                                                Female</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="ps-2">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Country</label>
                                        <select
                                            class="form-select form-select-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                            name="country" id="">
                                            <option class="bg-black text-white" selected value="India">India
                                            </option>
                                            @foreach ($all_countries as $country)
                                                <option class="bg-black text-white"
                                                    value="{{ $country }}">{{ $country }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr  class="text-start">
                                <td colspan="2">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input type="email"
                                            class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0 "
                                            name="username" id="">
                                        <small class="form-text text-warning fw-medium">
                                            @error('username')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </td>
                            </tr>
                            <tr  class="text-start">
                                <td colspan="2">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password</label>
                                        <input type="password"
                                            class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-top-0 border-start-0 border-end-0"
                                            name="password" id="" placeholder="">
                                        <small class="form-text text-warning fw-medium">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </td>
                            </tr>
                            <input type="hidden" name="plan_id" value="{{ $plan_id }}">
                            <tr>
                                <td colspan="2">
                                    <div class="text-center m-1 mb-3">
                                        {{-- <a style="background-color: rgb(248, 125, 125); color: rgb(0, 0, 0); text-decoration: none;" class="px-4 py-3 reg_form_submit_button fw-bolder fs-5" href="index.html" role="submit">SIGN UP
                                            </a> --}}
                                        <button
                                            class="btn btn-outline-danger px-2 py-2 reg_form_submit_button"
                                            type="submit">SIGN UP
                                        </button>
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
