@extends('layouts.layout')

@section('title','Add Artist Page')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <label class="col-form-label">Choose Artist Type</label>
                <select class="form-control" type="select" placeholder="">
                    <option value="">Select Artist Type</option>
                    <option value="">Artist Type 1</option>
                    <option value="">Artist Type 2</option>
                </select>

                <label class="col-form-label">What are your main mediums?*</label>
                <select class="form-control" type="text">
                    <option value="">Select Medium</option>
                    <option value="">Medium 1</option>
                    <option value="">Medium 2</option>
                </select>

                <label class="col-form-label">Birth Date* </label>
                <input class="form-control" type="date" placeholder="Birthday">

                <label class="col-form-label">Last Name</label>
                <input class="form-control" type="text" placeholder="Last Name">

                <label class="col-form-label">Shop URL (This Is For Your Shop Website)</label>
                <input class="form-control" type="text" placeholder="url">

                <label class="col-form-label">Hub</label>
                <select class="form-control" type="text">
                    <option value="">Select Hub</option>
                    <option value="">Hub 1</option>
                    <option value="">Hub 2</option>
                </select>

                <label class="col-form-label">Zip Code</label>
                <input class="form-control" type="text" placeholder="Zip Code">

                <label class="col-form-label">Status</label>
                <select class="form-control" type="text">
                    <option value="">Select Status</option>
                    <option value="">Active</option>
                    <option value="">In Active</option>
                </select>

                <label class="col-form-label">Artists Photo* (70px X 70px)</label>
                <input class="form-control" type="file" placeholder="">

                <label class="col-form-label">Twitter</label>
                <input class="form-control" type="text" placeholder="Twitter URL">
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <label class="col-form-label"> Unique Address Id</label>
                <input class="form-control" type="select" placeholder="Unique Address">

                <label class="col-form-label">Email</label>
                <input class="form-control" type="text" placeholder="Email">

                <label class="col-form-label">First Name </label>
                <input class="form-control" type="text" placeholder="First Name">

                <label class="col-form-label">Mobile Number</label>
                <input class="form-control" type="number" placeholder="Number">

                <label class="col-form-label">Country</label>
                <select class="form-control" type="text">
                    <option value="">Select Country</option>
                    <option value="">Country 1</option>
                    <option value="">Country 2</option>

                </select>

                <label class="col-form-label">City of Living</label>
                <select class="form-control" type="text">
                    <option value="">Select City Living </option>
                    <option value="">City 1</option>
                    <option value="">City 2</option>
                </select>

                <label class="col-form-label">Address</label>
                <input class="form-control" type="text" placeholder="Zip Code">

                <label class="col-form-label">Email Verified</label>
                <select class="form-control" type="text">
                    <option value="">Select Status</option>
                    <option value="">Yes</option>
                    <option value="">On</option>
                </select>

                <label class="col-form-label">Artist Full Size Photo for Banner* (1920px X 500px)</label>
                <input class="form-control" type="file" placeholder="">

                <label class="col-form-label">Instagram</label>
                <input class="form-control" type="text" placeholder="Instagram URL">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <label class="col-form-label">About Artist EN</label>
                    <textarea class="form-control" rows="3" type="text" placeholder="About Artist EN"></textarea>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <label class="col-form-label">About Artist AR</label>
                    <textarea class="form-control" rows="3" type="text" placeholder="About Artist AR"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-dark" type="submit">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection