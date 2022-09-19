@extends('layouts.layout')

@section('title','Super Admin Page')

@section('content')

<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Super Admin</li>
            </ol>
        </div>
    </div>
</div>
<div class="row p-3">
    <div class="card shadow-lg p-2 mb-5 bg-white roundedshadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 mb-3">
                    <h4>Add Super Admin</h4>
                </div>
            </div>
            <form method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label class="col-form-label">Name</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label class="col-form-label">Email</label>
                        <input class="form-control" type="text" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label class="col-form-label">Password</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label class="col-form-label">Confirm Password</label>
                        <input class="form-control" type="password" name="confirm_password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label class="col-form-label">Phone</label>
                        <input class="form-control" type="text" name="phone">
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label class="col-form-label">Upload Image</label>
                        <input class="form-control" type="file" name="address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label class="col-form-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
            </form>
            <button class="btn btn-primary">Submit</button>
            <button class="btn btn-dark">Cancel</button>
        </div>
    </div>
</div>


@endsection