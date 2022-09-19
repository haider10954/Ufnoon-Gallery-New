@extends('layouts.layout')

@@section('title','Artist List Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">Master</a></li>
                <li class="breadcrumb-item active" aria-current="page">Artist List List</li>
            </ol>
        </div>
    </div>
</div>
<div class="row p-3">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 mb-3">
                    <h4>Artist List List</h4>
                </div>
                <div class="col-md-6 col-lg-6 mb-3" style="text-align: right;">
                    <a class="btn px-5 btn-primary round-s" href="{{ route('add_artist_type')}}">
                        <i class="fa fa-plus"></i>Add Artist List
                    </a>
                </div>
            </div>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></th>
                        <th>Title</th>
                        <th>Date Modified</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                        <td>Saleh</td>
                        <td>2021/07/08 </td>
                        <td>Active</td>
                        <td class="d-flex gap-1">
                            <a class="btn-sm btn btn-success" href="{{ route('edit_artist_type')}}"><i class="fas fa-edit"></i></a>
                            <a class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                        <td>الباقة الشاملة</td>
                        <td>2020/07/08 </td>
                        <td>Active</td>
                        <td class="d-flex gap-1">
                            <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                            <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                        <td>Standard</td>
                        <td>2014/07/08 </td>
                        <td>InActive</td>
                        <td class="d-flex gap-1">
                            <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                            <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>





@endsection