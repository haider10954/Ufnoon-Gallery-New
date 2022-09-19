<!-- <div class="app">
    <div id="sidenav">
        <div class="wrapper">
            <div class="logo">
                <a href="#">Main Menu</a>
                <a href="#" class="nav-icon pull-right" id="btn1"><i class="fa-solid fa-bars"></i></a>
            </div>
            <div class="menu">
                <ul>
                    <li class="active"><a href="{{ route('artist-profile')}}"><i class="fa-solid fa-gauge"></i><span class="ml-1"><span class="ml-1">Dashboard</span></span></a></li>
                    <li><a href="{{  route('artist-my-profile')  }}"><i class="fa-solid fa-user"></i><span class="ml-1">My Profile</span></a></li>
                    <li><a href="{{ route('exhibition_artworks')}}"><i class="fa-solid fa-image"></i><span class="ml-1">Exhibition</span></a></li>
                    <li><a href="{{ route('artist-orders')}}"><i class="fa-solid fa-cart-plus"></i><span class="ml-1">Order History</span></a></li>
                    <li><a href="{{ route('artist-subscription-history')}}"><i class="fa-solid fa-money-bill"></i><span class="ml-1">Upgrade Subscription History</span></a></li>
                    <li><a href="{{ route('artist-subscription')}}"><i class="fa-solid fa-shop"></i><span class="ml-1">Subscription History</span></a></li>
                    <li><a href="{{ route('artist-change-password')}}"><i class="fa-solid fa-key"></i><span class="ml-1">Change Password</span></a></li>
                    <li><a href="{{ route('artist-support')}}"><i class="fa-solid fa-phone"></i><span class="ml-1">Support</span></a></li>
                    <li><a href="{{ route('web-guidelines')}}"><i class="fa-solid fa-hand"></i><span class="ml-1">Guidelines</span></a></li>
                    <li><a href="{{ route('web-login')}}" class="logout"><i class="fa-solid fa-right-from-bracket"></i><span class="ml-1">logout</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
 -->

<!-- sidebar-wrapper -->
<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <!-- <div class="sidebar-brand">
            <a href="{{ route('web-home')}}">
                <a href="#" class="nav-icon pull-right" id="btn1"><i class="fa-solid fa-bars"></i></a>
            </a>
        </div> -->

        <ul class="sidebar-menu">
            <li class="active"><a href="{{ route('artist-profile')}}"><i class="fa-solid fa-gauge"></i><span class="ml-1">Dashboard</span></a></li>
            <li><a href="{{  route('artist-my-profile')  }}"><i class="fa-solid fa-user"></i><span class="ml-1">My Profile</span></a></li>
            <li><a href="{{ route('exhibition_artworks')}}"><i class="fa-solid fa-image"></i><span class="ml-1">Exhibition</span></a></li>
            <li><a href="{{ route('artist-orders')}}"><i class="fa-solid fa-cart-plus"></i><span class="ml-1">Order History</span></a></li>
            <li><a href="{{ route('artist-subscription-history')}}"><i class="fa-solid fa-money-bill"></i><span class="ml-1">Upgrade</span></a></li>
            <li><a href="{{ route('artist-subscription')}}"><i class="fa-solid fa-shop"></i><span class="ml-1">Subscription</span></a></li>
            <li><a href="{{ route('artist-change-password')}}"><i class="fa-solid fa-key"></i><span class="ml-1">Change Password</span></a></li>
            <li><a href="{{ route('artist-support')}}"><i class="fa-solid fa-phone"></i><span class="ml-1">Support</span></a></li>
            <li><a href="{{ route('web-guidelines')}}"><i class="fa-solid fa-hand"></i><span class="ml-1">Guidelines</span></a></li>
            <li><a href="{{ route('web-login')}}" class="logout"><i class="fa-solid fa-right-from-bracket"></i><span class="ml-1">logout</span></a></li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
</nav>