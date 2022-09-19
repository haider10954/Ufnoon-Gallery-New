
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link {{ !request()->segment(5) ? 'active' : '' }}" href="{{ route('edit_category')}}">Edit Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(5) == 'subcategory' ? 'active' : '' }}" href="{{ route('subcategory')}}">Sub Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(5) == 'add' ? 'active' : '' }}" href="{{ route('add_subcategory')}}">Add SubCategory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(6) == 'medium' ? 'active' : '' }}" href="{{ route('medium')}}">Medium</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'add-artist' ? 'active' : '' }}" href="{{ route('add-artist')}}">Material</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>