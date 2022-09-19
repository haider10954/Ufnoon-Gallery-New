@extends('layouts.layout')

@section('title','Add Color Page')

@section('content')
<div class="row">
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title">Add Colors</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Title</label>
                        <input class="form-control" type="text" placeholder="Title">

                        <label class="col-form-label">Color</label>
                        <input class="form-control" type="color" style="height: 50px;">

                    </div>
                </div>
            </form>
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-dark" type="submit">Cancel</button>
        </div>
    </div>
</div>
@endsection