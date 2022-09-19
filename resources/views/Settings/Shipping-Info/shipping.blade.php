@extends('layouts.layout')


@section('title','Payment Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shipping</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="car-body">
                <h4 class="card-title">Settings</h4>
                <form>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label class="col-form-label">More than 5kg</label>
                            <input class="form-control" type="text">

                            <label class="col-form-label">Tire 1 Amount</label>
                            <input class="form-control" type="text">

                            <label class="col-form-label">Tire 3 Amount </label>
                            <input class="form-control" type="text">


                        </div>

                        <div class="col-lg-6">

                            <label class="col-form-label">Print Order Generate Shipping Id </label>
                            <input class="form-control" type="text">

                            <label class="col-form-label">Tire 2 Amount </label>
                            <input class="form-control" type="text">

                            <label class="col-form-label">Tire 4 Amount</label>
                            <input class="form-control" type="text">

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