        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">

                <!-- Light Logo-->
                <a href="index.html" class="logo">

                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/index.png') }}" alt="" height="22">
                    </span>

                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" height="40">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('artist-portal-dashboard') }}">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('artist-portal-profile')}}">
                                <i class="ri-map-pin-user-line "></i> <span data-key="t-dashboards">My Profile</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('artist-portal-artwork')}}">
                                <i class=" ri-image-line "></i> <span data-key="t-dashboards">Artwork</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('artist-portal-exhibitions')}}">
                                <i class="ri-landscape-fill"></i> <span data-key="t-dashboards">Exhibition</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('artist-portal-order')}}">
                                <i class=" ri-shopping-cart-line "></i> <span data-key="t-dashboards">Order History</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('artist-portal-upgrade')}}">
                                <i class=" ri-text-wrap"></i> <span data-key="t-dashboards">Upgrade Subscription Plan</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('artist-portal-Subscription-History')}}">
                                <i class=" ri-book-fill "></i> <span data-key="t-dashboards">Subscription History</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('artist-portal-change-password') }}">
                                <i class=" ri-lock-password-line "></i> <span data-key="t-dashboards">Change Password</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('artist-portal-support')}}">
                                <i class="ri-mic-line"></i> <span data-key="t-dashboards">Support</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="ri-logout-box-line"></i> <span data-key="t-dashboards">Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->