@extends('layouts.layout')

@section('title','Add Hub Location Page')

@section('content')
<div class="row">
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title">Add Hub</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Hubs EN*</label>
                        <input class="form-control" placeholder="Hubs EN">

                        <label class="col-form-label">Status</label>
                        <select class="form-control">
                            <option>Select Status</option>
                            <option>Active</option>
                            <option>InActive</option>
                        </select>
                    </div>
                    <div class="col-lg-6">

                        <label class="col-form-label">Hubs AR*</label>
                        <input class="form-control" placeholder="Hubs AR">

                    </div>
                </div>
            </form>
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-dark" type="submit">Cancel</button>
        </div>
    </div>
</div>
@endsection