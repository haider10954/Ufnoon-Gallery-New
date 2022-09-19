
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
                        <a class="nav-link {{ request()->segment(5) == 'material' ? 'active' : '' }}" href="{{ route('material')}}">Material List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(5) == 'add-material' ? 'active' : '' }}" href="{{ route('add_material')}}">Add Material</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>