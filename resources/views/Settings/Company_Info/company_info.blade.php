@extends('layouts.layout')


@section('title','Company Information Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Company Information</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="car-body">
                <h4 class="card-title">Company Information</h4>
                <form>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label>Company Address</label>
                            <textarea id="textarea" class="form-control" maxlength="500" rows="3" placeholder="This textarea has a limit of 500 chars."></textarea>

                            <label class="col-form-label">Company Email Id</label>
                            <input class="form-control" type="text" placeholder="Company Email">

                            <label class="col-form-label">Company Logo</label>
                            <input class="form-control" type="file">

                            <label class="col-form-label">Company Number </label>
                            <input class="form-control" type="text" placeholder="Company Number ">

                        </div>
                        <div class="col-lg-6">
                            <label>Company Description</label>
                            <textarea id="textarea" class="form-control" maxlength="500" rows="3" placeholder="This textarea has a limit of 500 chars."></textarea>

                            <label class="col-form-label">Company Name</label>
                            <input class="form-control" type="text" placeholder="Name">

                            <label class="col-form-label">Company Favicon</label>
                            <input class="form-control" type="file">

                            <label class="col-form-label">Copyright Text</label>
                            <input class="form-control" type="text" placeholder="@Copyright">
                        </div>  
                    </div>
                </form>
                <button class="btn btn-primary btn-lg">Submit</button>
                <button class="btn btn-dark btn-lg">Save</button>
            </div>
        </div>
    </div>
</div>

@endsection