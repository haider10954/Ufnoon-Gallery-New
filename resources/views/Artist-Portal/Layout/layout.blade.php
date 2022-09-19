<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon2.ico') }}">



    @include('Artist-Portal.Includes.styles')

</head>

<body>
    <div id="layout-wrapper">
        @include('Artist-Portal.Includes.header')

        <!-- ========== App Menu ========== -->
        @include('Artist-Portal.Includes.sidebar')
        <!-- Left Sidebar End -->

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            @include('Artist-Portal.Includes.footer')
        </div>
    </div>

    @include('Artist-Portal.Includes.script')
</body>

</html>