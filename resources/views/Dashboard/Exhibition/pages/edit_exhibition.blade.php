@extends('layouts.layout')

@section('title','Edit Exhibition Page')

@section('content')
@include('Dashboard.Exhibition.edit')
<div class="row">
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="example-text-input" class="col-form-label">Credentials </label>
                        <select class="form-control">
                            <option>Select Option</option>
                            <option>Prize</option>
                            <option>Solo Exhibition</option>
                        </select>
                        <label for="example-search-input" class="col-form-label">
                            Exhibition Address</label>
                        <input class="form-control" type="text">
                        <label for="example-search-input" class="col-form-label">
                            Image</label>
                        <input class="form-control" type="file">
                    </div>

                    <div class="col-lg-6">
                        <label for="example-search-input" class="col-form-label">
                            Exhibition Title</label>

                        <input class="form-control" type="text">

                        <label for="example-search-input" class="col-form-label">
                            Exhibition Data</label>

                        <input class="form-control" type="date">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="col-form-label">Description EN </label>
                        <textarea class="form-control" rows="4" placeholder="English Description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="col-form-label">Description AR </label>
                        <textarea class="form-control" rows="4" placeholder="Arabic Description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Status</label>
                        <select class="form-control">
                            <option>Select Status</option>
                            <option>Active</option>
                            <option>InActive</option>
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