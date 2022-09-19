<!-- Header Start -->
<header class="ws-header ws-header-transparent">
    <!-- Navbar -->
    <nav class="navbar ws-navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Logo -->
            <div class="ws-logo ws-center" style="padding-right:45px;">
                <a href="{{ route('web-home') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Alternative Text" class="img-responsive" />
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="{{ route('web-shops') }}">{{ __('translation.OUR-ARTWORK') }}</a>
                    </li>

                    <li class="dropdown"><a href="#x" class="dropdown-toggle" data-toggle="dropdown"
                            data-hover="dropdown" data-animations="fadeIn">{{ __('translation.Artist') }}<span
                                class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('web-feature-artist') }}">{{ __('translation.Featured-Artist') }}</a>
                            </li>
                            <li><a>دعاء حفني </a></li>
                            <li><a href="{{ route('single-artist') }}">لعنود بن دهيم </a></li>
                            <li><a>عهود سليمان </a></li>
                            <li><a>Areej Obaib</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('web-painting') }} " class="dropdown-toggle" data-toggle="dropdown"
                            data-hover="dropdown" data-animations="fadeIn"> {{ __('translation.Painting') }} <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('web-painting') }}">{{ __('translation.Abstract') }}</a></li>
                            <li><a>{{ __('translation.Realistic') }}</a></li>
                            <li><a>{{ __('translation.Impression') }}</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#x" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                            data-animations="fadeIn">{{ __('translation.Sculpture') }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('web-sculptures') }} ">{{ __('translation.Category') }}</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#x" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                            data-animations="fadeIn">{{ __('translation.Photography') }} <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('web-photography') }}">{{ __('translation.Sub Category') }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#x" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                            data-animations="fadeIn">{{ __('translation.Language') }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('set_language', ['en', 'ltr']) }}">{{ __('translation.English') }}</a>
                            </li>
                            <li><a href="{{ route('set_language', ['ar', 'rtl']) }}">{{ __('translation.Arabic') }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown" style="padding-left: 0px; padding-right: 0px;">
                        <a href="#x" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                            data-animations="fadeIn"><i class="fa-regular fa-user"
                                style="font-size: 20px !important;"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('user-profile') }}">{{ __('translation.User Profile') }}</a></li>
                            <li><a href="{{ route('user-liked-artwork') }}">{{ __('translation.Liked ArtWork') }}</a>
                            </li>
                            <li><a href="{{ route('user-liked-artist') }} ">{{ __('translation.Favorite Artist') }}
                                </a></li>
                            <li><a href="{{ route('user-orders') }}">{{ __('translation.Orders') }}</a></li>
                            @if (auth()->check())
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            @endif
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
</header>
