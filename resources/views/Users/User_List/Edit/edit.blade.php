
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'edit-user' ? 'active' : '' }}" href="{{ route('edit_user')}}">Edit User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'change-user-pass' ? 'active' : '' }}" href="{{ route('change_user_password')}}">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'liked-artworks' ? 'active' : '' }}" href="{{ route('liked_artworks')}}">Liked Artworks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'liked-artists' ? 'active' : '' }}" href="{{ route('liked_artists')}}">Liked Artists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'order-listings' ? 'active' : '' }}" href="{{ route('order-history')}}">Order History</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>