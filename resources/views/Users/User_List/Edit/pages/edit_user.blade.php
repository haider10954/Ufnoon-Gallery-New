@extends('layouts.layout')

@section('title','Edit User Page')

@section('content')
@include('Users.User_List.Edit.edit')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit User</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">First Name</label>
                        <input class="form-control" type="email" placeholder="First Name">

                        <label class="col-form-label">Email</label>
                        <input class="form-control" type="email" placeholder="Email">

                        

                        <label class="col-form-label">Email Verified</label>
                        <select class="form-control">
                            <option>Yes</option>
                            <option>No</option>
                        </select>

                    </div>
                    <div class="col-lg-6">
                        <label class="col-form-label">Last Name</label>
                        <input class="form-control" type="text" placeholder="Last Name">

                        <label class="col-form-label">Phone Number</label>
                        <input class="form-control" type="text" placeholder="Number">

                        <label class="col-form-label">Status</label>
                        <select class="form-control" type="text">
                            <option value="">Select Status</option>
                            <option value="">Active</option>
                            <option value="">InActive</option>
                        </select>
                    </div>
                </div>
            </form>
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-dark" type="submit">Cancel</button>
        </div>
    </div>
</div>


@endsection