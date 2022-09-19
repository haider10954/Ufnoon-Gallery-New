@extends('Web-Frontend.Layout.layout')

@section('title','Check Out')

@section('content')

<!-- Page Parallax Header -->
<div class="ws-parallax-header parallax-window" data-parallax="scroll" data-image-src="{{ asset('web-assets/img/backgrounds/banner.jpg') }}">
    <div class="ws-overlay">
        <div class="ws-parallax-caption">
            <div class="ws-parallax-holder">
                <h1>-{{ __('translation.Checkout') }}-</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Page Parallax Header -->


<!-- Page Content -->
<div class="container ws-page-container">
    <div class="row">

        <!-- Coupon -->
        <div class="ws-checkout-coupon clearfix">
            <div class="col-sm-12">
                <div class="coupon-info">
                    <p>{{ __('translation.Have A Coupon') }} <a data-toggle="collapse" href="#coupon-collapse"> {{ __('translation.Click') }}</a></p>
                </div>
                <div class="collapse" id="coupon-collapse">
                    <!-- Coupon -->
                    <div class="ws-checkout-coupon-code">
                        <form class="form-inline">
                            <p><input type="text" placeholder="{{ __('translation.Coupon_Used')}}"></p>
                            <br>
                            <!-- Button -->
                            <a class="btn ws-btn-fullwidth">{{ __('translation.Apply Coupon') }}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="ws-checkout-content clearfix">

            <!-- Cart Content -->
            <div class="col-sm-7">

                <!-- Billing Details -->
                <div class="ws-checkout-billing">
                    <h3>{{ __('translation.Billing Date') }}</h3>

                    <!-- Form Inputs -->
                    <form class="form-inline">

                        <!-- Name -->
                        <div class="ws-checkout-first-row">
                            <div class="col-no-p ws-checkout-input col-sm-6">
                                <label>{{ __('translation.First Name') }} <span> * </span></label><br>
                                <input type="text">
                            </div>

                            <div class="col-no-p ws-checkout-input col-sm-6">
                                <label>{{ __('translation.Last Name')}}<span> * </span></label><br>
                                <input type="text">
                            </div>
                        </div>

                        <!-- Company -->
                        <div class="col-no-p ws-checkout-input col-sm-12">
                            <label>{{ __('translation.Company_name')}}<span> * </span></label><br>
                            <input type="text">
                        </div>

                        <!-- Email -->
                        <div class="ws-checkout-first-row">
                            <div class="col-no-p ws-checkout-input col-sm-6">
                                <label>{{ __('translation.Email') }}<span> * </span></label><br>
                                <input type="email" placeholder="yourmail@gmail.com">
                            </div>

                            <div class="col-no-p ws-checkout-input col-sm-6">
                                <label>{{ __('translation.Mobile Number')}}<span> * </span></label><br>
                                <input type="tel">
                            </div>
                        </div>

                        <!-- Country -->
                        <div class="col-no-p ws-checkout-input col-sm-12">
                            <label>{{ __('translation.Country') }} <span> * </span></label><br>
                            <input type="text" placeholder=" {{ __('translation.Country') }} ">
                        </div>

                        <!-- Adress -->
                        <div class="col-no-p ws-checkout-input col-sm-12">
                            <label>{{ __('translation.Address') }} <span> * </span></label><br>
                            <input type="text" placeholder="{{ __('translation.Address') }}">
                        </div>

                        <div class="col-no-p ws-checkout-input col-sm-12">
                            <input type="text" placeholder="Apartment, suite, unit etc.(optional)">
                        </div>

                        <!-- Town -->
                        <div class="col-no-p ws-checkout-input col-sm-12">
                            <label>{{ __('translation.City/Town') }} <span> * </span></label><br>
                            <input type="text" placeholder="{{ __('translation.City/Town') }}">
                        </div>

                        <!-- State -->
                        <div class="ws-checkout-first-row">
                            <div class="col-no-p ws-checkout-input col-sm-6">
                                <label>{{ __('translation.State / Country') }} <span> * </span></label><br>
                                <input type="text">
                            </div>

                            <div class="col-no-p ws-checkout-input col-sm-6">
                                <label>{{ __('translation.Postcode/Zip') }} <span> * </span></label><br>
                                <input type="text" placeholder="{{ __('translation.Postcode/Zip') }}">
                            </div>
                        </div>

                        <!-- Order Notes -->
                        <div class="col-no-p ws-checkout-input col-sm-12">
                            <label>{{ __('translation.Order Notes') }}</label><br>
                            <textarea placeholder="{{ __('translation.Note about Your Order')}}" rows="2" cols="5"></textarea>
                        </div>
                    </form>

                </div>
            </div>

            <!-- Cart Total -->
            <div class="col-sm-5">
                <div class="ws-checkout-order">
                    <h2>{{ __('translation.Your Order')}}</h2>

                    <!-- Order Table -->
                    <table>

                        <!-- Title -->
                        <thead>
                            <tr>
                                <th class="ws-order-product {{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">{{ __('translation.Product') }}</th>
                                <th class="ws-order-total">{{ __('translation.Total') }}</th>
                            </tr>
                        </thead>

                        <!-- Products -->
                        <tbody>
                            <tr>
                                <th class="{{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">1 x {{ __('translation.Name') }} </th>
                                <td><span>64 {{ __('translation.SAR')}}</span></td>
                            </tr>

                            <tr>
                                <th class="{{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">1 x {{ __('translation.Name') }}</th>
                                <td><span>200 {{ __('translation.SAR')}}</span></td>
                            </tr>

                            <tr>
                                <th class="{{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">1 x {{ __('translation.Name') }}</th>
                                <td><span>200 {{ __('translation.SAR')}}</span></td>
                            </tr>
                            <tr>
                                <th class="{{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">1 x {{ __('translation.Name') }}</th>
                                <td><span>100 {{ __('translation.SAR')}}</span></td>
                            </tr>
                        </tbody>

                        <!-- Shipping -->
                        <tfoot class="ws-checkout-shipping">
                            <tr>
                                <th class="{{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">{{ __('translation.Shipping') }}</th>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <input class="{{ (\Session::get('direction') == 'rtl' )? 'radio_btn' : '' }}" type="radio" name="optradio"><span>{{ __('translation.International Courier') }}</span> <span>350 {{ __('translation.SAR')}}</span>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <input class="{{ (\Session::get('direction') == 'rtl' )? 'radio_btn' : '' }}" type="radio" name="optradio">{{ __('translation.International Express') }} <span>228 {{ __('translation.SAR') }} </span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="ws-shipping-total">
                                <th class="{{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">{{ __('translation.Total') }}</th>
                                <td><span>139 {{ __('translation.SAR')}}</span></td>
                            </tr>
                        </tfoot>
                    </table>

                    <!-- Payment Metod -->
                    <div class="ws-shipping-payment">
                        <div class="d-flex align-items-center">
                            <input class="{{ (\Session::get('direction') == 'rtl' )? 'radio_btn' : '' }}" type="radio" name="optradio" checked>Paypal
                            <img src="{{ asset('web-assets/img/paypal.png') }}" class="img-responsive" alt="PayPal Acceptance Mark">
                        </div>
                        <p>{{ __('translation.Paypal')}}</p>
                    </div>
                    <a class="btn ws-btn-fullwidth">{{ __('translation.Proceed to Paypal') }}</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Page Content -->

@endsection