@extends('Web-Frontend.Layout.layout2')

@section('title','Login Page')

@section('content')

<!-- Page Content -->
<div class="container ws-page-container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            <!-- Login Form -->
            <form id='page_form' class="ws-login-form" method="POST">
                @csrf
                <!-- Email -->

                <div class="form-group">
                    <label class="control-label">{{ __('translation.Email') }} / {{ __('translation.Name')}}<span>*</span></label>
                    <input type="email" name='email' class="form-control"   data-parsley-pattern="/^([a-zA-Z_.])+\@(([a-zA-Z0-9\-.])+\.)+([a-zA-Z]{2,4})+$/"
                    data-parsley-trigger="keyup" data-parsley-validation-threshold="0"
                    data-parsley-error-message="Please enter a valid email address" required >
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label class="control-label">{{ __('translation.Password')}} <span>*</span></label>
                    <input type="password" name="password" class="form-control"  data-parsley-maxlength="24"
                    data-parsley-minlength="6" data-parsley-pass-check="" data-parsley-trigger="keyup"
                    data-parsley-validation-threshold="0" required>
                </div>

                 <!-- Checkbox -->
                <div class="pull-left">
                    <div>
                        <input type="checkbox"  class="{{ (\Session::get('direction') == 'rtl' )? 'radio_btn' : '' }}"><span style="padding-left:10px;">{{ __('translation.Stay signed in') }}</span>
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
                <button type="submit" id='submitBtn' class="btn ws-btn-fullwidth">{{ __('translation.Sign In') }}</button>
                <br><br>
                <!-- Facebook Button -->
                <a class="btn ws-btn-facebook">{{ __('translation.Sign in with Facebook') }}</a>
            </form>
            <!-- End Login Form -->
            <div class="ws-register-link">
                <a href="{{ route('web-user-register')}}" data-toggle="">{{ __('translation.Click here to sign up for an account.') }} </a>
            </div>
            <div class="ws-register-link">
                <a href="{{ route('artist-register-process')}}" data-toggle="">Artist? Sign Up here </a>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content -->
@endsection
@section('custom-script')
    <script>
       $('#page_form').parsley();

        $('#page_form').submit(function(e){
            // $("#page_form").parsley().on("form:submit", function () {
            e.preventDefault();
            let formData = new FormData($("#page_form")[0]);
            ajaxCall('{{ route('verification') }}', 'File',formData, $('#page_form #submitBtn'),
                function(data) {
                    if (!data.error) {
                        $("#page_form").trigger('reset');
                        setTimeout(function() {
                          window.location.href=" {{route('user-profile')}}"
                        }, 1000);
                    }
                });
        });


    </script>
@endsection
