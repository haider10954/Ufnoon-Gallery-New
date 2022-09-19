@extends('layouts.layout')

@section('title','Edit Coupon Page')

@section('content')
<div class="row">
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title">Edit Coupon</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Coupon Title*</label>
                        <input class="form-control" type="text" placeholder="Title">

                        <label class="col-form-label">Coupon Discount (%)</label>
                        <input class="form-control" type="number" placeholder="Coupon Discount">

                        <label class="col-form-label">Status</label>
                        <select class="form-control">
                            <option>Select Status</option>
                            <option>Active</option>
                            <option>InActive</option>
                        </select>


                    </div>
                    <div class="col-lg-6">
                        <label class="col-form-label">Coupon Unique Code*</label>
                        <input class="form-control" type="text" placeholder="Coupon Code">


                        <label class="col-form-label">Expiry Date*</label>
                        <input class="form-control" type="date" placeholder="">


                    </div>
                </div>
            </form>
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-dark" type="submit">Cancel</button>
        </div>
    </div>
</div>
@endsection