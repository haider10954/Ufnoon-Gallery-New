@extends('layouts.layout')

@section('title','Subscription History Page')

@section('content')
@include('Dashboard.Edit.edit')
<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 mb-3">
                    <h4>Subscription History List</h4>
                </div>

            </div>
            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>Subscription Plan Name</th>
                        <th>Transaction Id</th>
                        <th>Bill URL</th>
                        <th>Date</th>
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    @endsection