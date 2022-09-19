@extends('layouts.layout')

@section('title','Add How It Works Page')

@section('content')
<div class="row">
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title">Add How Its Work</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Title EN*</label>
                        <input class="form-control" type="text" placeholder="Title">

                        <label class="col-form-label">Image</label>
                        <input class="form-control" type="file" placeholder="Image">

                        <label class="col-form-label">Status</label>
                        <select class="form-control">
                            <option>Select Status</option>
                            <option>Active</option>
                            <option>InActive</option>
                        </select> 
                    </div>
                    <div class="col-lg-6">                    
                        <label class="col-form-label">Title* AR</label>
                        <input class="form-control" type="text" placeholder="Title">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="col-form-label">Description EN </label>
                        <textarea class="form-control" rows="4" placeholder="English Description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label class="col-form-label">Description AR </label>
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