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
                        Good to see you again!<br />
                        By logging into Wooper, you agree to our Terms of use and
                        Privacy Policy.<br />
                        Or
                        <span><a href="{{ route('pricing_plans') }}"
                                style="text-decoration: none">click
                                here</a></span>
                        to create your free account.
                    </p>
                </div>
            </div>
        </div>
        {{-- INFO COLUMN END --}}

        {{-- FORM COLUMN START --}}
        <div class="col text-white mx-1 reg_form_col">
            <div class="mx-4">
                <div class="mt-5 mb-4">
                    <p class="text-center reg_form_heading">Welcome Back!</p>
                </div>
                <div class="reg_form_div">
                    <form method="post" action="{{ url('login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text bg-danger-subtle border-2"><i
                                    class="fa fa-user"></i></span>
                            <input type="email" name="username" value="{{ old('username') }}"
                                class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-start-0 border-top-0 border-bottom-0" />
                        </div>

                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text bg-danger-subtle border-2"><i
                                    class="fa fa-lock"></i></span>
                            <input type="password" name="password" value="{{ old('password') }}"
                                class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-start-0 border-top-0 border-bottom-0" />
                        </div>


                        @if (isset($incorrect_msg))
                            <div class="text-danger">
                                {{ $incorrect_msg }}
                            </div>
                        @endif


                        <div class="mb-3 text-start">

                            <input class="form-check-input ms-2 " type="checkbox" value=""
                                id="">
                            <label class="form-check-label text-light fw-medium" for="">
                                Remember Me
                            </label>
                            <a name="" id=""
                                class="text-end float-end text-decoration-none text-light fst-italic fw-medium"
                                href="{{ route('get_reset') }}" role="button">Forgot Password?</a>
                        </div>
                        <div class="text-center my-4">
                            <button type="submit"
                                class="btn btn-outline-danger px-2 py-2 reg_form_submit_button">
                                SIGN IN <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- FORM COLUMN END --}}
    </div>
</div>
{{-- MAIN SECTION END --}}
@include('landing_pages.footer_landing_page')
