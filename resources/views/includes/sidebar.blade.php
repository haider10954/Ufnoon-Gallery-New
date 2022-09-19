<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a class="waves-effect" href="{{ route('dashboard')}}">
                        <i class="dripicons-meter"></i>
                        <span> Dashboard </span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('admins')}}">
                        <i class="dripicons-message"></i>
                        <span> Admin </span>
                    </a>
                </li>

                <li class="">
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                        <i class="dripicons-monitor"></i>
                        <span>Master</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('banner')}}">Banner</a>
                        </li>
                        <li>
                            <a href="{{ route('subscription')}}">Subscription Pack</a>
                        </li>
                        <li>
                            <a href="{{ route('coupon')}}">Coupon</a>
                        </li>
                        <li>
                            <a href="{{ route('faqs')}} ">FAQS</a>
                        </li>
                        <li>
                            <a href="{{ route('support' )}}">Support</a>
                        </li>
                        <li>
                            <a href="{{route('work')}}">How it Work</a>
                        </li>
                        <li>
                            <a href="{{ route('color')}}">Color</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-briefcase"></i>
                        <span>User</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('user_list')}}">User List</a></li>
                        <li><a href="{{ route('guest_user_list')}}">Guest User List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-broadcast"></i>
                        <span>Artist</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('artist')}}">Artists</a></li>
                        <li><a href="{{ route('artist_type')}}">Artist Types</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('all_products')}}">
                        <i class="dripicons-to-do"></i>
                        <span>All Products</span>
                    </a>
                </li>

                <li>
                    <a class="has-arrow waves-effect">
                        <i class="dripicons-graph-bar"></i>
                        <span>Orders</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('orders')}}">All Orders</a></li>
                        <li><a href="{{ route('coupon_used')}}">Coupon Used</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('category')}}">
                        <i class="dripicons-view-thumb"></i>
                        <span>Category</span>
                    </a>
                </li>

                <!--<li>-->
                <!--    <a  class="has-arrow">-->
                <!--        <i class="dripicons-map"></i>-->
                <!--        <span>Shipping Location</span>-->
                <!--    </a>-->
                <!--    <ul class="sub-menu" aria-expanded="false">-->
                <!--        <li><a href="{{ route('shipping_location')}}">Shipping location</a></li>-->
                <!--        <li><a href="{{ route('shipping_hub')}}">Hub</a></li>-->
                <!--        <li><a href="{{ route('shipping_city')}}">Cities</a></li>-->
                <!--    </ul>-->
                <!--</li>-->

                <!--<li>-->
                <!--    <a  class="has-arrow waves-effect">-->
                <!--        <i class="dripicons-archive"></i>-->
                <!--        <span>User Email</span>-->
                <!--    </a>-->
                <!--    <ul class="sub-menu" aria-expanded="false">-->
                <!--        <li><a href="{{ route('bulk_emails')}}">Bulk Email</a></li>-->
                <!--        <li><a href="{{ route('all-contacts')}}">Contact Us</a></li>-->
                <!--        <li><a href="{{ route('subscribers')}}">Subscribers</a></li>-->
                <!--    </ul>-->
                <!--</li>-->


                <li>
                    <a href="{{ route('language-label')}}"  >
                        <i class="dripicons-box"></i>
                        <span>Language Label</span>
                    </a>
                </li>

                <li>
                    <a class="has-arrow waves-effect">
                        <i class="dripicons-duplicate"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('system_email')}}">System Email</a></li>
                        <li><a href="{{ route('notification_master')}}">Notification Master</a></li>
                    </ul>
                </li>
            
                <!--<li>-->
                <!--    <a href="{{ route('page_setting')}}">-->
                <!--        <i class="dripicons-network-1"></i>-->
                <!--        <span>Page Setting</span>-->
                <!--    </a>-->
                <!--</li>-->
                
            
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="dripicons-network-1"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('general_setting')}}">General Setting</a></li>
                        <li><a href="{{ route('email_setting')}}">Email Setting</a></li>
                        <li><a href="{{ route('company_information')}}">Company Info</a></li>
                        <li><a href="{{ route('meta')}}">Meta Info</a></li>
                        <li><a href="{{ route('social')}}">Social Info</a></li>
                        <li><a href="{{ route('payment')}}">Payment Info</a></li>
                        <li><a href="{{ route('shipping_info')}}">Shipping Info</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('login') }}">
                        <i class="ion ion-md-arrow-round-back "></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->