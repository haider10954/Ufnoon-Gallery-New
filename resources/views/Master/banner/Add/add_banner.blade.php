@extends('layouts.layout')

@section('title','Add Banner Page')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Banner</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Banner Title EN</label>
                        <input class="form-control" type="email" placeholder="">

                        <label class="col-form-label">Status</label>
                        <select class="form-control" type="text">
                            <option value="">Select Status</option>
                            <option value="">Active</option>
                            <option value="">InActive</option>
                        </select>

                        <label class="col-form-label">Select Banner Image 1* (240 x 332)px</label>
                        <input class="form-control" type="file" placeholder="Image">

                        <label class="col-form-label">Select Banner Image 3* (124 x 146)px</label>
                        <input class="form-control" type="file" placeholder="Image">

                    </div>
                    <div class="col-lg-6">
                        <label class="col-form-label">Banner Title AR</label>
                        <input class="form-control" type="email" placeholder="">

                        <label class="col-form-label">Select Banner Image 2* (192 x 228)px</label>
                        <input class="form-control" type="file" placeholder="Image">

                        <label class="col-form-label">Select Banner Image 4* (270 x 332)px</label>
                        <input class="form-control" type="file" placeholder="Image">

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label">Banner Description EN</label>
                        <textarea class="form-control" rows="5"></textarea>

                        <label class="col-form-label">Banner Description AR</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                </div>
            </form>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-dark" type="submit">Cancel</button>
            </div>
        </div>
    </div>
</div>


@endsection