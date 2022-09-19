@extends('layouts.layout')

@section('title','Liked Artists Page')

@section('content')
@include('Users.User_List.Edit.edit')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Liked Artists Listings</h4>
            <table class="table table-bordered table-striped" id="datatable">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
