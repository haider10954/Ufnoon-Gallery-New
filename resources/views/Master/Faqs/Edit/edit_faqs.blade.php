@extends('layouts.layout')

@section('title','Edit FAQS Page')

@section('content')
<div class="row">
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title">Edit FAQS</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Position*</label>
                        <input class="form-control" type="text" placeholder="Title">

                        <label class="col-form-label">Faq Title* EN*</label>
                        <input class="form-control" type="text" placeholder="Title">
                    </div>
                    <div class="col-lg-6">

                        <label class="col-form-label">Status</label>
                        <select class="form-control">
                            <option>Select Status</option>
                            <option>Active</option>
                            <option>InActive</option>
                        </select> 
                        
                        <label class="col-form-label">Faq Title* AR</label>
                        <input class="form-control" type="text" placeholder="Title">

                    </div>
                </div>

                <div class=" row mb-3">
                    <div class="col-lg-12">
                        <label class="col-form-label">Description* EN </label>
                        <textarea class="form-control" type="text" rows="4" placeholder="English Description"></textarea>
                    </div>
                </div>

                <div class=" row mb-3">
                    <div class="col-lg-12">
                        <label class="col-form-label">Description* AR </label>
                        <textarea class="form-control" type="text" rows="4" placeholder="Arabic Description"></textarea>
                    </div>
                </div>
            </form>
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-dark" type="submit">Cancel</button>
        </div>
    </div>
</div>
@endsection