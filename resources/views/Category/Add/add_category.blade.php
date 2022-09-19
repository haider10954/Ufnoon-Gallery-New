@extends('layouts.layout')

@section('title','Add Category Page')

@section('content')
<div class="row">
    <div class="card">
        <div class="car-body">
        <h4 class="card-title">Add Category</h4>
            <form>
                <div class="row p-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Category Title* EN</label>
                        <input class="form-control" type="text" placeholder="Enter Category EN">

                        <label class="col-form-label">Select Category Picture</label>
                        <input class="form-control" type="file" placeholder="Image  ">

                        <label class="col-form-label">Show On Home Page</label>
                        <select class="form-control" type="text">
                            <option>Select Option</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="col-lg-6">

                        <label class="col-form-label">Category Title* AR</label>
                        <input class="form-control" type="text" placeholder="Category Title AR">

                        <label class="col-form-label">Status</label>
                        <select class="form-control" type="text">
                            <option>Select Option</option>
                            <option>Active</option>
                            <option>InActive</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="row p-3">
                <div class="col-lg-12">
                    <button class="btn btn-primary">Submit</button>
                    <button class="btn btn-dark">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection