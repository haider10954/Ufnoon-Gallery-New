@extends('Web-Frontend.Layout.layout')

@section('title','Add Cart')

@section('content')

<!-- Page Parallax Header -->
<div class="ws-parallax-header parallax-window {{ (\Session::get('direction') == 'rtl' )? 'Sliders' : '' }}" data-parallax="scroll" data-image-src="{{ asset('web-assets/img/backgrounds/banner.jpg') }}">
    <div class="ws-overlay">
        <div class="ws-parallax-caption">
            <div class="ws-parallax-holder">
                <h1>{{ __('translation.Cart')}}</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Page Parallax Header -->

<!-- Page Content -->
<div class="container ws-page-container">
    <div class="row">

        <!-- Cart Content -->
        <div class="ws-cart-page">
            <div class="col-sm-8">
                <div class="ws-mycart-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="cart-item-head">&nbsp;</th>
                                <th class="cart-item-head {{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">{{ __('translation.Item') }}</th>
                                <th class="cart-item-head {{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">{{ __('translation.Price') }}</th>
                                <th class="cart-item-head {{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">{{ __('translation.Quantity') }}</th>
                                <th class="cart-item-head {{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">{{ __('translation.Total') }}</th>
                                <th class="cart-item-head {{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="cart-item">
                                <td class="cart-item-cell cart-item-thumb">
                                    <a href="#">
                                        <img src="{{ asset('web-assets/img/works/paintings/painting2.jpg') }}" class="img-responsive" alt="Alternative Text">
                                    </a>
                                </td>
                                <td class="cart-item-cell cart-item-title">
                                    <h3><a href="#">{{ __('translation.Name') }}</a></h3>
                                </td>
                                <td class="cart-item-cell cart-item-price">
                                    <span class="amount">390 SAR</span>
                                </td>
                                <td class="cart-item-cell cart-item-quantity">
                                    <input type="number" value="1">
                                </td>
                                <td class="cart-item-cell cart-item-subtotal">
                                    <span class="amount">390 SAR</span>
                                </td>
                                <td class="cart-item-cell cart-item-remove">
                                    <span><a href="#x"><i class="fa fa-times"></i></a></span>
                                </td>
                            </tr>

                            <tr class="cart-item">
                                <td class="cart-item-cell cart-item-thumb">
                                    <a href="#">
                                        <img src="{{ asset('web-assets/img/works/paintings/painting1.jpg') }}" class="img-responsive" alt="Alternative Text">
                                    </a>
                                </td>
                                <td class="cart-item-cell cart-item-title">
                                    <h3><a href="#">{{ __('translation.Name') }}</a></h3>
                                </td>
                                <td class="cart-item-cell cart-item-price">
                                    <span class="amount">250 SAR</span>
                                </td>
                                <td class="cart-item-cell cart-item-quantity">
                                    <input type="number" value="1">
                                </td>
                                <td class="cart-item-cell cart-item-subtotal">
                                    <span class="amount">250 SAR</span>
                                </td>
                                <td class="cart-item-cell cart-item-remove">
                                    <span><a href="#x"><i class="fa fa-times"></i></a></span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="6">
                                    <!-- Coupon -->
                                    <div class="ws-coupon-code">
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <input type="text" placeholder="{{ __('translation.Coupon_Used') }}">
                                            </div>
                                            <!-- Button -->
                                            <a class="btn ws-small-btn-black">{{ __('translation.Apply Coupon') }}</a>
                                        </form>
                                    </div>

                                    <!-- Update Cart -->
                                    <div class="ws-update-cart">
                                        <a class="btn ws-small-btn-black">{{ __('translation.Update Cart') }}</a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Cart Total -->
            <div class="col-sm-4">
                <div class="ws-mycart-total">
                    <h2>{{ __('translation.Cart Total') }}</h2>
                    <table>
                        <tbody>
                            <tr class="cart-subtotal">
                                <th class="{{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">{{ __('translation.Subtotal') }}</th>
                                <td><span class="amount">350 {{ __('translation.SAR') }}</span></td>
                            </tr>

                            <tr class="shipping">
                                <th class="{{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">{{ __('translation.Shipping') }}</th>
                                <td><span class="amount">250 {{ __('translation.SAR') }}</span></td>
                            </tr>

                            <tr class="order-total">
                                <th class="{{ (\Session::get('direction') == 'rtl' )? 'text_right' : '' }}">{{ __('translation.Total') }}</th>
                                <td><strong><span class="amount">600 {{ __('translation.SAR') }}</span></strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn ws-btn-fullwidth" href="{{ route('web-cart-checkout')}}">{{ __('translation.Checkout') }}</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Page Content -->


@endsection