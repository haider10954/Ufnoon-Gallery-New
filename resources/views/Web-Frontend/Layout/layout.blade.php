<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>@yield('title')</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('web-assets/img/favicon.ico') }}" />

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

                <!-- Account -->
                <li class="ws-shop-account">
                    <a href="{{ route('web-login')}}" class="btn btn-sm">My Account </a>
                </li>
                <!-- {{ __('translation.welcome_message') }} -->
            </ul>
        </div>
    </div>

    @include('Web-Frontend.Includes.header')

    @yield('content')

    @include('Web-Frontend.Includes.footer')

    @include('Web-Frontend.Includes.script')
</body>

</html>