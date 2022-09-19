@extends('layouts.layout')

@section('title','Change Password Page')

@section('content')
@include('Dashboard.Edit.edit')
<div class="row">
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="example-text-input" class="col-form-label">New Password </label>

                        <input class="form-control" type="password" placeholder="New Password">

                    </div>
                    <div class="col-lg-6">
                        <label for="example-search-input" class="col-form-label">
                            Confirm Password </label>

                        <input class="form-control" type="password" placeholder="Confirm Password">

                    </div>
                </div>
            </form>
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-dark" type="submit">Cancel</button>
        </div>
    </div>
</div>
    


@endsection