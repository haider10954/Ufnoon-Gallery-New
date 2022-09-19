@extends('layouts.layout')

@section('title','Medium Page')

@section('content')
@include('Category.Edit.edit')
<div class="row p-3">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body">

            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 mb-3">
                    <h4>Medium List</h4>
                </div>
                <div class="col-md-6 col-lg-6 mb-3" style="text-align: right;">
                    <a class="btn px-5 btn-primary round-s" href="{{ route('add_medium')}}">
                        <i class="fa fa-plus"></i>Add Medium
                    </a>
                </div>
            </div>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></th>
                        <th>Title</th>
                        <th>Updated Date</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                        <td>Portrait</td>
                        <td>2021/07/08 </td>
                        <td>Active</td>
                        <td class="d-flex gap-1">
                            <a class="btn-sm btn btn-success" href="{{ route('edit_banner')}}"><i class="fas fa-edit"></i></a>
                            <a class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection