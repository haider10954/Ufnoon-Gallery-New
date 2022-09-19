@extends('layouts.layout')

@section('title','Add Medium Page')

@section('content')
@include('Category.Edit.pages.Add-Medium.edit')
<div class="row p-3">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">

                    <label class="col-form-label">Medium Title* EN</label>
                    <input class="form-control" type="text" placeholder="Enter Category EN">

                    <label class="col-form-label">Status</label>
                    <select class="form-control" type="text">
                        <option>Select Option</option>
                        <option>Active</option>
                        <option>InActive</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label class="col-form-label">Medium Title* AR</label>
                    <input class="form-control" type="text" placeholder="Enter Category AR">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <button class="btn btn-primary">Submit</button>
                    <button class="btn btn-dark">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection