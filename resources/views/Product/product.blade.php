@extends('layouts.layout')

@section('title','Product Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Product</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6 mb-3">
                        <h4>Products List</h4>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3" style="text-align: right;">
                        <a class="btn px-5 btn-primary round-s">
                            <i class="fa fa-plus"></i>Add Products
                        </a>
                    </div>
                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Artist</th>
                            <th>Category</th>
                            <th>ArtWorks</th>
                            <th>Modified Date</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                            <td><img src="{{ asset('assets/images/image.jpg')}}" style="height: 50px; width:50px;" /></td>
                            <td>صَمت </td>
                            <td>عهود الحربي</td>
                            <td>Painting</td>
                            <td>
                                Original- Sale
                                Print available l- 0
                                No of views- 1
                            </td>
                            <td>2021-07-03</td>
                            <td>Active</td>
                            <td class="d-flex gap-1">
                                <a class="btn-sm btn btn-success" href="{{ route('edit_products')}}"><i class="fas fa-edit"></i></a>
                                <a class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                            <td><img src="{{ asset('assets/images/image.jpg')}}" style="height: 50px; width:50px;" /></td>
                            <td>صَمت </td>
                            <td>عهود الحربي</td>
                            <td>Painting</td>
                            <td>
                                Original- Sale
                                Print available l- 0
                                No of views- 1
                            </td>
                            <td>2021-07-03</td>
                            <td>Active</td>
                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                            <td><img src="{{ asset('assets/images/image.jpg')}}" style="height: 50px; width:50px;" /></td>
                            <td>صَمت </td>
                            <td>عهود الحربي</td>
                            <td>Painting</td>
                            <td>
                                Original- Sale
                                Print available l- 0
                                No of views- 1
                            </td>
                            <td>2021-07-03</td>
                            <td>Active</td>
                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                            <td><img src="{{ asset('assets/images/image.jpg')}}" style="height: 50px; width:50px;" /></td>
                            <td>صَمت </td>
                            <td>عهود الحربي</td>
                            <td>Painting</td>
                            <td>
                                Original- Sale
                                Print available l- 0
                                No of views- 1
                            </td>
                            <td>2021-07-03</td>
                            <td>Active</td>
                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection