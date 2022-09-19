@extends('layouts.layout')

@section('title','Edit Subscription Page')

@section('content')
<div class="row">
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title">Edit Subscription</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Package Name/Features*</label>
                        <input class="form-control" type="email" placeholder="Name">

                        <label class="col-form-label">Period</label>
                        <input class="form-control" type="number" placeholder="Period">

                        <label class="col-form-label">Number of uploaded artworks for sale* (If data is 0 then Number of uploaded artworks will be unlimited)</label>
                        <input class="form-control" type="number" placeholder="55">

                        <label class="col-form-label">Commission* (This is in %)</label>
                        <input class="form-control" type="number" placeholder="Commission">

                        <label class="col-form-label">Who’s viewed/loved your arts work</label>
                        <select class="form-control">
                            <option>Select Yes or No</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>

                        <label class="col-form-label">Status</label>
                        <select class="form-control">
                            <option>Select Status</option>
                            <option>Active</option>
                            <option>InActive</option>
                        </select>


                    </div>
                    <div class="col-lg-6">
                        <label class="col-form-label">Prize</label>
                        <input class="form-control" type="number" placeholder="Prize">


                        <label class="col-form-label">Monthly Charge</label>
                        <input class="form-control" type="text" placeholder="Monthly Charge">

                        <label class="col-form-label">Ability to Print Limited Editions*</label>
                        <input class="form-control" type="text" placeholder="">

                        <label class="col-form-label">Page Analytics</label>
                        <select class="form-control">
                            <option>Select Yes or No</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>

                        <label class="col-form-label"> See platform sale trends</label>
                        <select class="form-control">
                            <option>Select Yes or No</option>
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