
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'edit-artist' ? 'active' : '' }}" href="{{ route('edit_artist_page')}}">Edit Artist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'artworks' ? 'active' : '' }}" href="{{ route('artworks')}}">Artwork</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'exhibitions' ? 'active' : '' }}" href="{{ route('exhibition')}}">Exhibition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'add_exhibitions' ? 'active' : '' }}" href="{{ route('edit_exhibition')}}">Edit Exhibition</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>