@extends('layouts.layout')

@section('title','Category')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category</li>
            </ol>
        </div>
    </div>
</div>

<div class="row p-3">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body">

            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 mb-3">
                    <h4>Category List</h4>
                </div>
                <div class="col-md-6 col-lg-6 mb-3" style="text-align: right;">
                    <a class="btn px-5 btn-primary round-s" href="{{ route('add_category')}}">
                        <i class="fa fa-plus"></i>Add Category
                    </a>
                </div>
            </div>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></th>
                        <th>Media</th>
                        <th>Title</th>
                        <th>Views</th>
                        <th>Date Modified</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                        <td><img src="{{asset('assets/images/users/avatar-1.jpg')}}" style="height:50px" class="rounded-circle"></td>
                        <td> Marketing your art</td>
                        <td>No of views- 799</td>
                        <td>2021/07/08 </td>
                        <td>Active</td>
                        <td class="d-flex gap-1">
                            <a class="btn-sm btn btn-success" href="{{ route('edit_category')}}"><i class="fas fa-edit"></i></a>
                            <a class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></a>
                        </td>
                    </tr>

                    
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection