<!DOCTYPE html>
<html class="no-js" lang="" dir="{{ \Session::get('direction') }}">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>@yield('title')</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon2.ico') }}">

    @include('Web-Frontend.Includes.styles')
    @include('Web-Frontend.Includes.head')
</head>

<body>
    <!-- Loader Start -->
    <div id="preloader">
        <div class="preloader-container">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>
    <!-- End Loader Start -->

    <!-- Top Bar Start -->
    <div class="ws-topbar">
        <div class="pull-right">

            <!-- Shop Menu -->
            <ul class="ws-shop-menu">

                <!-- Cart -->
                <li class="ws-shop-cart">
                    <a href="{{ route('web-login') }} " class="btn btn-sm">{{ __('translation.ACCOUNT')  }} </a>



                </li>

                <!-- Cart -->
                <li class="ws-shop-cart">
                    <a href="#x" class="btn btn-sm">{{ __('translation.Cart')}} (2)</a>

                    <!-- Cart Popover -->
                    <div class="ws-shop-minicart">
                        <div class="minicart-content ">

                            <!-- Added Items -->
                            <ul class="minicart-content-items clearfix">
                                <!-- Item -->
                                <li class="media">
                                    <div class="media-left ">
                                        <!-- Image -->
                                        <a href="#">
                                            <img src="{{ asset('web-assets/img/works/artworks/product1.jpg') }}" alt="Alternative Text" style="height: 100px; width:100px; object-fit:contain;">
                                        </a>
                                    </div>

                                    <div class="minicart-content-details media-body">

                                        <!-- Title -->
                                        <h3 class="{{ (\Session::get('direction') == 'rtl' )? 'mini-content' : '' }}"><a href="#">{{ __('translation.Name')}}</a></h3>

                                        <!-- Price -->
                                        <span class="minicart-content-price {{ (\Session::get('direction') == 'rtl' )? 'mini-content' : '' }}">250 {{ __('translation.SAR')}}</span>
                                    </div>

                                    <!-- Remove -->
                                    <span class="minicart-content-remove"><a href="#"><i class="fa fa-times"></i></a></span>
                                </li>

                                <!-- Item -->
                                <li class="media">
                                    <div class="media-left">
                                        <!-- Image -->
                                        <a href="#">
                                            <img src="{{ asset('web-assets/img/works/artworks/product4.jpg') }}" class="media-object" alt="Alternative Text" style="height: 100px; width:100px; object-fit:contain;">
                                        </a>
                                    </div>

                                    <div class="minicart-content-details media-body">
                                        <!-- Title -->
                                        <h3 class="{{ (\Session::get('direction') == 'rtl' )? 'mini-content' : '' }}"><a href="#">{{ __('translation.Name')}}</a></h3>

                                        <!-- Price -->
                                        <span class="minicart-content-price {{ (\Session::get('direction') == 'rtl' )? 'mini-content' : '' }}">250 {{ __('translation.SAR')}}</span>
                                    </div>

                                    <!-- Remove -->
                                    <span class="minicart-content-remove"><a href="#"><i class="fa fa-times"></i></a></span>
                                </li>
                            </ul>

                            <!-- Subtotal -->
                            <div class="minicart-content-total">
                                <h3> 500 {{ __('translation.SAR')}} : {{ __('translation.Sub Total') }} </h3>
                            </div>

                            <!-- Checkout -->
                            <div class="ws-shop-menu-checkout">
                                <div class="ws-shop-viewcart pull-left">
                                    <a href="{{ route('web-cart')}}" class="btn btn-sm">{{ __('translation.View Cart') }}</a>
                                </div>
                                <div class="ws-shop-checkout pull-right">
                                    <a href="{{ route('web-cart-checkout')}}" class="btn btn-sm">{{ __('translation.Checkout')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Cart Popover -->

                </li>
            </ul>
        </div>
    </div>

    @include('Web-Frontend.Includes.header2')

    @yield('content')

    @include('Web-Frontend.Includes.footer')

    @include('Web-Frontend.Includes.script')

    @yield('custom-script')




</body>

</html>
