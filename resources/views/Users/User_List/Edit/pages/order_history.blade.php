@extends('layouts.layout')

@section('title','Order Listing Page')

@section('content')
@include('Users.User_List.Edit.edit')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Orders Listings</h4>
            <table class="table table-bordered table-striped" id="datatable">
                <thead>
                    <tr>
                        <th>Order No</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Ordered Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
