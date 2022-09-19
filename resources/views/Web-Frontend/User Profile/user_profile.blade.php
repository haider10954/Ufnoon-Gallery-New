@extends('Web-Frontend.Layout.layout')

@section('title', 'User Profile')


@section('content')

    <!-- Page Parallax Header -->
    <div class="ws-parallax-header parallax-window {{ \Session::get('direction') == 'rtl' ? 'Sliders' : '' }}"
        data-parallax="scroll" data-image-src="{{ asset('web-assets/img/backgrounds/banner.jpg') }}">
        <div class="ws-overlay">
            <div class="ws-parallax-caption">
                <div class="ws-parallax-holder">
                    <h1>{{ __('translation.User Profile') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Parallax Header -->

    <!-- Page Content -->
    <div class="container ws-page-container">
        <div class="row">


            <div class="ws-checkout-content clearfix">

                <!-- Cart Content -->
                <div class="col-sm-7">

                    <!-- Billing Details -->
                    <div class="ws-checkout-billing">
                        <h3>{{ __('translation.My Contact Details') }}</h3>
                        <!-- Form Inputs -->

                        <form id='update_data' class="form-inline" method="POST">
                            @csrf

                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <label>{{ __('translation.Name') }} <span> * </span></label><br>
                                <input type="text" name='name' value='{{ auth()->user()->vFirstName }}'
                                    data-parsley-pattern="^[a-z A-Z_]*$" data-parsley-trigger="keyup"
                                    data-parsley-validation-threshold="0"
                                    data-parsley-error-message="Please enter a valid name" required>
                            </div>


                            <!-- Company -->
                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <label>Image<span>*</span></label>
                                <input type="file" accept=".jpg,.jpeg,.png,.gif" name='image' required>
                            </div>

                            <!-- Email -->

                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <label>{{ __('translation.Email') }} <span> * </span></label><br>
                                <input type="email" value="{{ auth()->user()->email }}" name='email'
                                    data-parsley-pattern="/^([a-zA-Z0-9_.])+\@(([a-zA-Z0-9\-.])+\.)+([a-zA-Z]{2,4})+$/"
                                    data-parsley-trigger="keyup" data-parsley-validation-threshold="0"
                                    data-parsley-error-message="Please enter a valid email address" required>
                            </div>

                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <label>Phone <span> * </span></label><br>
                                <input type="number" id='getnumber' value='{{ auth()->user()->vMobile }}' name='phone'
                                data-parsley-trigger="keyup" data-parsley-maxlength="12" data-parsley-minlength="4"  data-parsley-pattern="^[0-9]*$" required>
                            </div>


                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <label>Gender <span> * </span></label>
                                <div class="form-check form-check-inline gender-Input">
                                    <input name="gender" class="form-check-input radio_button" type="radio"
                                        name="inlineRadioOptions" id="inlineRadio1" value="male"
                                        {{ auth()->user()->eGender == 'Male' ? 'checked="checked"' : '' }}>
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline gender-Input">
                                    <input name="gender" class="form-check-input radio_button" type="radio"
                                        name="inlineRadioOptions" id="inlineRadio2" value="female"
                                        {{ auth()->user()->eGender == 'Female' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>

                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <button id="submitBtn" type="submit"
                                    class="btn ws-btn-fullwidth">{{ __('translation.update') }}</button>
                            </div>
                        </form>



                        <h3>{{ __('translation.Account Setting') }}</h3>

                        <div class="ws-checkout-coupon clearfix">


                            <a class="btn ws-btn-fullwidth " style="color: #fff; margin-bottom: 5px;" data-toggle="collapse"
                                href="#coupon-collapse">{{ __('translation.Account Setting') }}</a>
                            <form id='update_password'>
                                @csrf
                                <div class="collapse" id="coupon-collapse">

                                    <div class="ws-checkout-first-row">
                                        <div class="col-no-p ws-checkout-input col-sm-6">
                                            <input class="form-control" name='prevpass' type="password"
                                                placeholder="Enter Current Password" required>
                                        </div>

                                        <div class="col-no-p ws-checkout-input col-sm-6">
                                            <input class="form-control" type="password" id='newpass'
                                                placeholder="Enter New Password" name='newpass' data-parsley-maxlength="24"
                                                data-parsley-minlength="6" data-parsley-trigger="keyup"
                                                data-parsley-validation-threshold="0" required>
                                        </div>
                                    </div>

                                    <div class="ws-checkout-first-row">
                                        <div class="col-no-p ws-checkout-input col-sm-6">
                                            <input class="form-control" type="password" placeholder="Confirm New Password"
                                                data-parsley-equalto="#newpass" data-parsley-trigger="keyup"
                                                data-parsley-error-message="Password Mismatch" required>
                                        </div>

                                        <div class="col-no-p ws-checkout-input col-sm-6">
                                            <button type="submit" id='updatePass'
                                                class="btn ws-btn-fullwidth">{{ __('translation.update') }}</button>
                                        </div>
                                    </div>


                                </div>

                            </form>


                        </div>

                    </div>
                </div>

                <div class="col-sm-5" style="background: #f5f5f5; padding:20px;">
                    <div class="ws-checkout-billing">
                        <h3>{{ __('translation.My Active Delivery Address') }}</h3>

                        <!-- Form Inputs -->
                        <!-- Form Inputs -->
                        <form id='delivery_address' class="form-inline" method='post'>
                            @csrf

                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <label>{{ __('translation.First Name') }} <span> * </span></label><br>
                                <input type="text" name="first_name" value='{{ auth()->user()->vFirstName }}'
                                    data-parsley-pattern="^[a-z A-Z_]*$" data-parsley-trigger="keyup"
                                    data-parsley-validation-threshold="0"
                                    data-parsley-error-message="Please enter a valid name" required>
                            </div>


                            <!-- Company -->
                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <label>{{ __('translation.Last Name') }}<span>*</span></label>
                                <input type="text" name='last_name' value='{{ auth()->user()->vLastName }}'
                                    data-parsley-pattern="^[a-z A-Z_]*$" data-parsley-trigger="keyup"
                                    data-parsley-validation-threshold="0"
                                    data-parsley-error-message="Please enter a valid name" required>
                            </div>

                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <label>Adress <span> * </span></label><br>
                                <input type="text" name='adress'value='{{ auth()->user()->vAddress }}'
                                    data-parsley-pattern="^[a-z A-Z0-9.,#_]*$" data-parsley-trigger="keyup"
                                    data-parsley-validation-threshold="0"
                                    data-parsley-error-message="Please enter a Address" required>
                            </div>

                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <input type="text" name='address2' placeholder="Apartment, suite, unit etc.(optional)"
                                    value='{{ auth()->user()->vAddress2 }}' data-parsley-pattern="^[a-z A-Z0-9.,#_]*$"
                                    data-parsley-trigger="keyup" data-parsley-validation-threshold="0"
                                    data-parsley-error-message="Please enter a valid Address">
                            </div>

                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <label>{{ __('translation.Country') }} <span> * </span></label><br>
                                <select name='country' class="form-control" style="width: 100%">
                                    <option name='country' value="{{ auth()->user()->vCountry }}">{{ auth()->user()->vCountry }}
                                    </option>
                                    @foreach ($count as $c)
                                        <option name='country' value='{{ $c->vCountry }}'>{{ $c->vCountry }}</option>
                                    @endforeach


                                </select>
                            </div>

                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <label>{{ __('translation.City') }} <span> * </span></label><br>
                                <select  name='city' class="form-control" style="width: 100%">
                                    <option name='city' value="{{ auth()->user()->vCity }}">{{ auth()->user()->vCity }}
                                    </option>
                                    @foreach ($city as $c)
                                        <option value='{{ $c->getName() }}'>{{ $c->getName() }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <label>{{ __('translation.State / Country') }} <span> * </span></label><br>
                                <input type="text" name="state" value='{{ auth()->user()->vState }}'
                                    data-parsley-pattern="^[a-z A-Z]*$" data-parsley-trigger="keyup"
                                    data-parsley-validation-threshold="0"
                                    data-parsley-error-message="Please enter a valid State" required>


                            </div>

                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <label>{{ __('translation.Postcode/Zip') }}<span> * </span></label><br>
                                <input type="text" name='zip' value='{{ auth()->user()->vZipCode }}'
                                    data-parsley-pattern="^[0-9]*$" data-parsley-trigger="keyup"
                                    data-parsley-validation-threshold="0"
                                    data-parsley-error-message="Please enter a valid Zip">
                            </div>


                            <div class="col-no-p ws-checkout-input col-sm-12">
                                <button type="submit" id='delivery'
                                    class="btn ws-btn-fullwidth">{{ __('translation.update') }}</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Page Content -->


@endsection
@section('custom-script')
    <script>
        $('#update_data').parsley();
        $('#delivery_address').parsley();
        $('#update_password').parsley();
        $('#update_data').submit(function(e) {
            // $("#page_form").parsley().on("form:submit", function () {
            e.preventDefault();
            let formData = new FormData($("#update_data")[0]);
            ajaxCall('{{ route('update') }}', 'File', formData, $('#update_data #submitBtn'),
                function(data) {
                    if (!data.error) {
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }
                });
        });
        $('#update_password').submit(function(e) {
            // $("#page_form").parsley().on("form:submit", function () {
            e.preventDefault();
            let formData = new FormData($("#update_password")[0]);
            ajaxCall('{{ route('update_password') }}', 'File', formData, $('#update_password #updatePass'),
                function(data) {
                    if (!data.error) {
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }
                });
        });
        $('#delivery_address').submit(function(e) {
            // $("#page_form").parsley().on("form:submit", function () {
            e.preventDefault();
            let formData = new FormData($("#delivery_address")[0]);
            ajaxCall('{{ route('update_delivery') }}', 'File', formData, $('#delivery_address #delivery'),
                function(data) {
                    if (!data.error) {
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }
                });
        });
    </script>


@endsection
