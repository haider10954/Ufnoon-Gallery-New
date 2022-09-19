
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'super-admin' ? 'active' : '' }}" href="{{ route('edit_admin')}}">Super Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'change_password' ? 'active' : '' }}" href="{{ route('edit_admin_password')}}">Change Password</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>