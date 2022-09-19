@extends('layouts.layout')

@section('title','Edit Support Page')

@section('content')
<div class="row">
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title">Edit Support</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Question EN*</label>
                        <input class="form-control" type="text" placeholder="Title">

                        <label class="col-form-label">Status</label>
                        <select class="form-control">
                            <option>Select Status</option>
                            <option>Active</option>
                            <option>InActive</option>
                        </select> 
                        
                    </div>
                    <div class="col-lg-6">
                        <label class="col-form-label">Question* AR</label>
                        <input class="form-control" type="text" placeholder="Title">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="col-form-label">Answer EN </label>
                        <textarea class="form-control" rows="4" placeholder="English Description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="col-form-label">Answer AR </label>
                        <textarea class="form-control" rows="4" placeholder="Arabic Description"></textarea>
                    </div>
                </div>
            </form>
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-dark" type="submit">Cancel</button>
        </div>
    </div>
</div>
@endsection