@extends('layouts.layout')

@section('title','Add Notification')

@section('content')
<div class="row">
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title">Add Notification</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Notification Code*</label>
                        <input class="form-control" placeholder="Enter Notification Code">
                    </div>
                    <div class="col-lg-6">

                            <label class="col-form-label">Email</label>
                        <select class="form-control">
                            <option>Please Select</option>
                            <option>Yes</option>
                            <option>No</option>
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