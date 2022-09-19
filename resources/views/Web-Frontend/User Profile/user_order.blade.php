@extends('Web-Frontend.Layout.layout')

@section('title' , 'User Orders')

@section('content')
<!-- Page Parallax Header -->
<div class="ws-parallax-header parallax-window {{ (\Session::get('direction') == 'rtl' )? 'Sliders' : '' }}" data-parallax="scroll" data-image-src="{{ asset('web-assets/img/backgrounds/banner.jpg') }}">
    <div class="ws-overlay">
        <div class="ws-parallax-caption">
            <div class="ws-parallax-holder">
                <h1>{{ __('translation.Orders')}}</h1>
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
            <div class="col-lg-12">
                <div class="ws-mycart-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="cart-item-head">{{ __('translation.ArtWork Image')}}</th>
                                <th class="cart-item-head ">{{ __('translation.Item') }}</th>
                                <th class="cart-item-head ">{{ __('translation.Price') }}</th>
                                <th class="cart-item-head ">{{ __('translation.Quantity') }}</th>
                                <th class="cart-item-head ">{{ __('translation.Total') }}</th>
                                <th class="cart-item-head ">{{ __('translation.Actions')}}</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="cart-item">
                                <td class="cart-item-cell cart-item-thumb">
                                    <a href="#">
                                        <img src="{{ asset('web-assets/img/works/paintings/painting2.jpg') }}" class="img-responsive" alt="Alternative Text" style="height: 100px; width: 100px; text-align:center;">
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
                                        <img src="{{ asset('web-assets/img/works/paintings/painting1.jpg') }}" class="img-responsive" alt="Alternative Text" style="height: 100px; width: 100px;">
                                    </a>
                                </td>
                                <td class="cart-item-cell cart-item-title">
                                    <h3><a href="#">{{ __('translation.Name') }}</a></h3>
                                </td>
                                <td class="cart-item-cell cart-item-price">
                                    <span class="amount">250 {{ __('translation.SAR') }}</span>
                                </td>
                                <td class="cart-item-cell cart-item-quantity">
                                    <input type="number" value="1">
                                </td>
                                <td class="cart-item-cell cart-item-subtotal">
                                    <span class="amount">250 {{ __('translation.SAR')}}</span>
                                </td>
                                <td class="cart-item-cell cart-item-remove">
                                    <span><a href="#x"><i class="fa fa-times"></i></a></span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="6">
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
        </div>
    </div>
</div>
<!-- End Page Content -->

@endsection