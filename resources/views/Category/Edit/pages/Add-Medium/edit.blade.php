
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link {{ !request()->segment(5) ? 'active' : '' }}" href="{{ route('edit_category')}}">Edit Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(5) == 'subcategory' ? 'active' : '' }}" href="{{ route('subcategory')}}">SubCategory List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(5) == 'medium' ? 'active' : '' }}" href="{{ route('medium')}}">Medium List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(5) == 'add-medium' ? 'active' : '' }}" href="{{ route('add_medium')}}">Add Medium</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(4) == 'add-artist' ? 'active' : '' }}" href="{{ route('material')}}">Material</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>