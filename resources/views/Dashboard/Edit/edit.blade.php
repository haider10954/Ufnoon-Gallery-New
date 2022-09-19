
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'edit-artist' ? 'active' : '' }}" href="{{ route('edit_artist_page')}}">Edit Artist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'change_password' ? 'active' : '' }}" href="{{ route('change_pass')}}">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'artworks' ? 'active' : '' }}" href="{{ route('artworks')}}">Artwork</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'exhibitions' ? 'active' : '' }}" href="{{ route('exhibition')}}">Exhibition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'subscription_history' ? 'active' : '' }}" href="{{ route('subs_history')}}">Subscription History</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>