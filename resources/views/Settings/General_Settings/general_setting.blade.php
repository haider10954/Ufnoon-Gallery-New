@extends('layouts.layout')


@section('title','General Setting Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">General Setting</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="car-body">
                <h4 class="card-title">General Settings</h4>
                <form>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="example-text-input" class="col-form-label">Site Control Panel Title </label>

                            <input class="form-control" type="text" placeholder="Ufnoon Admin Control" id="example-text-input">

                        </div>
                        <div class="col-lg-6">
                            <label for="example-search-input" class="col-form-label">
                                Message to be displayed </label>

                            <input class="form-control" type="search" placeholder="Site is User Maintenance " id="example-search-input">

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