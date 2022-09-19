@extends('layouts.layout')

@section('title','Edit Shipping Location Page')

@section('content')
<div class="row">
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title">Edit Shipping Location</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Hubs*</label>
                        <select class="form-control" type="text" placeholder="Hubs">
                            <option>Select Hub</option>
                            <option>Select Hub 1</option>
                            <option>Select Hub 2</option>
                        </select>

                        <label class="col-form-label">Service Days*</label>
                        <select class="form-control" type="text" placeholder="Days">
                            <option>Select Days</option>
                            <option>Sun</option>
                            <option>Sat</option>
                            <option>Friday</option>
                            <option>Thursday</option>
                            <option>Wednesday</option>
                            <option>Tuesday</option>
                            <option>Monday</option>
                        </select>

                        <label class="col-form-label">Status</label>
                        <select class="form-control">
                            <option>Select Status</option>
                            <option>Active</option>
                            <option>InActive</option>
                        </select>
                    </div>
                    <div class="col-lg-6">

                        <label class="col-form-label">Cities</label>
                        <select class="form-control">
                            <option>Select Cities</option>
                            <option>City 1</option>
                            <option>City 2</option>
                        </select>

                        <label class="col-form-label">Tire</label>
                        <select class="form-control">
                            <option>Select Tire</option>
                            <option>Tire 1</option>
                            <option>Tire 2</option>
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