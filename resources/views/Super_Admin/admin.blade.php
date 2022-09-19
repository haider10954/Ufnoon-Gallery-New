@extends('layouts.layout')

@section('title','Super Admin Page')
@section('custom-style')
<style>
    @media only screen and (max-width: 767px) {
        h4 {
            text-align: center;
        }
    }
</style>
@endsection

@section('content')

<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </div>
    </div>
</div>

<div class="row p-3">
    <div class="card shadow-lg p-2 mb-5 bg-white roundedshadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 mb-3">
                    <h4>Super Admin</h4>
                </div>
                <div class="col-md-6 col-lg-6 mb-3" style="text-align: right;" id="Add_Admin">
                    <a class="btn px-5 btn-primary round-s" href="{{ route('add_super_admin')}}">
                        <i class="fa fa-plus"></i>Add Super Admin
                    </a>
                </div>
            </div>
            <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date Modified</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                        <td>Farhan</td>
                        <td>farhan@ufnoon.com</td>
                        <td>2222</td>
                        <td>2021/07/08 </td>
                        <td>Active</td>
                        <td class="d-flex gap-1">
                            <a class="btn-sm btn btn-success" href="{{ route('edit_admin')}}"><i class="fas fa-edit"></i></a>
                            <a class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                        <td>Farhan</td>
                        <td>farhan@ufnoon.com</td>
                        <td>2222</td>
                        <td>2021/07/08 </td>
                        <td>Active</td>
                        <td class="d-flex gap-1">
                            <a class="btn-sm btn btn-success"><i class="fas fa-edit"></i></a>
                            <a class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                        <td>Farhan</td>
                        <td>farhan@ufnoon.com</td>
                        <td>2222</td>
                        <td>2021/07/08 </td>
                        <td>Active</td>
                        <td class="d-flex gap-1">
                            <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                            <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                        <td>Farhan</td>
                        <td>farhan@ufnoon.com</td>
                        <td>2222</td>
                        <td>2021/07/08 </td>
                        <td>Active</td>
                        <td class="d-flex gap-1">
                            <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                            <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                        <td>Farhan</td>
                        <td>farhan@ufnoon.com</td>
                        <td>2222</td>
                        <td>2021/07/08 </td>
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
</div>

@endsection