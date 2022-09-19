@extends('layouts.layout')

@section('title','Exhibition Page')

@section('content')
@include('Dashboard.Edit.edit')
<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 mb-3">
                    <h4>Exhibition List</h4>
                </div>
                <div class="col-md-6 col-lg-6 mb-3" style="text-align: right;">
                    <a class="btn px-5 btn-primary round-s" href="{{ route('edit_exhibition')}}">
                        <i class="fa fa-plus"></i>Add Exhibition
                    </a>
                </div>
            </div>
            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></th>
                        <th>Image</th>
                        <th>Credentials</th>
                        <th>Title</th>
                        <th>Address</th>
                        <th>Exhibition Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    @endsection