@extends('Web-Frontend.Layout.layout2')

@section('title', 'User Register')

@section('content')


    <div class="container ws-page-container">
        <div class="row">
            <div class="ws-works-title clearfix">
                <div class="col-sm-12">
                    <h3>{{ __('translation.User Reg') }}</h3>
                    <div class="ws-separator"></div>
                    <h4 style="text-align: center;">
                        {{ __('translation.Welcome to Ufnoon, the artists meeting point with collectors') }}</h4>
                    <div class="ws-separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <!-- Login Form -->
                <form id='register_user' class="ws-login-form">
                    @csrf
                    <!-- Email -->
                    <div class="form-group">
                        <label class="control-label">{{ __('translation.First Name') }}<span>*</span></label>
                        <input type="text" class="form-control" name='first_name' data-parsley-pattern="^[a-z A-Z_]*$"
                            data-parsley-trigger="keyup" data-parsley-validation-threshold="0"
                            data-parsley-error-message="Please enter a valid name" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">{{ __('translation.Last Name') }} <span>*</span></label>
                        <input type="text" class="form-control" name='last_name' data-parsley-pattern="^[a-z A-Z_]*$"
                            data-parsley-trigger="keyup" data-parsley-validation-threshold="0"
                            data-parsley-error-message="Please enter a valid name" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">{{ __('translation.Email') }} <span>*</span></label>
                        <input type="email" class="form-control" name='email'
                            data-parsley-pattern="/^([a-zA-Z_.])+\@(([a-zA-Z0-9\-.])+\.)+([a-zA-Z]{2,4})+$/"
                            data-parsley-trigger="keyup" data-parsley-validation-threshold="0"
                            data-parsley-error-message="Please enter a valid email address" required>
                    </div>


                    <div class="form-group">
                        <label class="control-label">{{ __('translation.Password') }} <span>*</span></label>
                        <input type="password" class="form-control" name='password' data-parsley-maxlength="24"
                            data-parsley-minlength="6" data-parsley-pass-check="" data-parsley-trigger="keyup"
                            data-parsley-validation-threshold="0" required>
                    </div>

                    <!-- Checkbox -->
                    <div class="pull-left">
                        <div>
                            <input type="checkbox"
                                class="{{ \Session::get('direction') == 'rtl' ? 'radio_btn' : '' }}">{{ __('translation.Stay signed in') }}
                        </div>
                    </div>

                    <div class="pull-right">
                        <div class="ws-forgot-pass">
                            <a href="#x">{{ __('translation.Forget Your Password') }}</a>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="padding-top-x50"></div>

                    <!-- Button -->
                    <button type="submit" class="btn ws-btn-fullwidth">{{ __('translation.Sign In') }}</button>
                    <br><br>
                    <!-- Facebook Button -->
                    <a class="btn ws-btn-facebook">{{ __('translation.Sign in with Facebook') }}</a>
                </form>
                <!-- End Login Form -->
                <div class="ws-register-link">
                    <a href="{{ route('web-user-register') }}"
                        data-toggle="">{{ __('translation.Click here to sign up for an account.') }} </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script>

  $('#register_user').parsley();
        $('#register_user').submit(function(e) {
            // $("#page_form").parsley().on("form:submit", function () {
            e.preventDefault();
            let formData = new FormData($("#register_user")[0]);
            ajaxCall('{{ route('registaration') }}', 'File', formData, $('#register_user #submitBtn'),
                function(data) {
                    if (!data.error) {
                        $("#register_user").trigger('reset');
                        setTimeout(function() {
                            //   window.location.href=""
                        }, 1000);
                    }
                });
        });
    </script>
@endsection
