@include('landing_pages.header_landing_page')


{{-- MAIN SECTION START --}}
<div class="container">
    <div class="row justify-content-center my-5">
        {{-- INFO COLUMN START --}}
        <div class="col-7 mx-1">
            <div class="my-5 text-white">
                <div class="h1 fw-bolder fa-3x">
                    Do not Worry, We got your back!!
                </div>
                <div>
                    <p class="fw-bold text-white my-5">
                        Good to see you again!<br />
                        By logging into Wooper, you agree to our Terms of useand Privacy Policy. <br/>
                        Or
                        <span><a href="{{route('pricing_plans')}}" style="text-decoration: none">click
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
                    <p class="text-center reg_form_heading">Reset Password!</p>
                </div>
                <div class="reg_form_div">
                    <form method="post" action="{{ url('/') }}/reset">
                        @csrf
                        <div class="input-group input-group-lg mb-2">
                            <span class="input-group-text bg-danger-subtle border-2"><i
                                    class="fa fa-user"></i></span>
                            <input type="email" name="username" value="{{ old('username') }}"
                                class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-start-0 border-top-0 border-bottom-0" />
                                
                        </div>
                        <small class="form-text text-warning fw-medium">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </small>

                        <div class="text-center mb-2">
                            <button type="submit" formaction="{{ url('/') }}/reset/otp"
                                class="btn btn-outline-danger px-1 py-0 reg_form_submit_button">
                                GET OTP <i class="fa-solid fa-arrow-trend-up"></i>
                            </button>
                        </div>

                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text bg-danger-subtle border-2"><i class="fa-solid fa-key"></i></span>
                            <input type="otp" name="otp" 
                                class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-start-0 border-top-0 border-bottom-0" />
                                
                        </div>
                        <small class="form-text text-warning fw-medium">
                            @error('otp')
                                {{ $message }}
                            @enderror
                        </small>


                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text bg-danger-subtle border-2"><i
                                    class="fa fa-lock"></i></span>
                            <input type="password" name="password"
                                class="form-control form-control-lg bg-secondary bg-opacity-10 text-white border-start-0 border-top-0 border-bottom-0" />
                        </div>
                        <small class="form-text text-warning fw-medium">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </small>

                       
                            {{--  @if(isset($incorrect_msg))  --}}
                            <div class="text-warning">
                                {{  old('incorrect_msg') }}
                            </div>
                            {{--  @endif  --}}
                        

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
