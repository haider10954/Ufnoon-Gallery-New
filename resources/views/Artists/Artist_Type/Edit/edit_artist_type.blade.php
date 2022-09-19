@extends('layouts.layout')

@section('title','Edit Artist Type Page')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Artist Type</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="example-text-input" class="col-form-label">Artists Types Name* EN </label>
                        <input class="form-control" type="text" placeholder="English Name">

                        <label class="col-form-label">Status</label>
                        <select class="form-control" type="text">
                            <option value="">Select Status</option>
                            <option value="">Active</option>
                            <option value="">In Active</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="example-search-input" class="col-form-label">Artists Types Name* AR</label>
                        <input class="form-control" type="text" placeholder="Arabic Name">
                    </div>
                </div>
            </form>
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-dark" type="submit">Cancel</button>
        </div>
    </div>
</div>



@endsection