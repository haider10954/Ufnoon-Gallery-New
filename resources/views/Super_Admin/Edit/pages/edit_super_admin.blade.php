@extends('layouts.layout')

@section('title','Edit Super Admin Page')

@section('content')
@include('Super_Admin.Edit.edit')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Super Admin</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Name</label>
                        <input class="form-control" type="email" placeholder="Name">

                        <label class="col-form-label">Phone Number</label>
                        <input class="form-control" type="text" placeholder="Number">

                        <label class="col-form-label">Image</label>
                        <input class="form-control" type="file" placeholder="Image">

                    </div>
                    <div class="col-lg-6">
                        <label class="col-form-label">Email</label>
                        <input class="form-control" type="email" placeholder="Email">

                        <label class="col-form-label">IP Address</label>
                        <input class="form-control" type="text" placeholder="Your IP">

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