@extends('layouts.layout')

@section('title','Edit Language Label Page')

@section('content')
<div class="row">
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title">Edit Language Labels</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Language Code*</label>
                        <input class="form-control" placeholder="Enter Language Code">

                        <label class="col-form-label">Language Title AR</label>
                        <input class="form-control" placeholder="Enter Language Title AR">

                    </div>
                    <div class="col-lg-6">

                        <label class="col-form-label">Language Title EN</label>
                        <input class="form-control" placeholder="Enter Language Title EN">

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