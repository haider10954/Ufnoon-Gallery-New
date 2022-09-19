@extends('layouts.layout')


@section('title','Add Page Settings')

@section('content')
<div class="row">
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title">Add Page Settings</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Page Title: EN</label>
                        <input class="form-control" placeholder="Enter Page Title: EN">

                        <label class="col-form-label">Meta Title: EN</label>
                        <input class="form-control" placeholder="Enter Meta Title: EN">

                        <label class="col-form-label">Meta Keywords: EN</label>
                        <input class="form-control" placeholder="Enter Meta Keywords: EN">
                    </div>
                    <div class="col-lg-6">

                        <label class="col-form-label">Page Title: AR</label>
                        <input class="form-control" placeholder="Enter Page Title: AR">

                        <label class="col-form-label">Meta Title: AR</label>
                        <input class="form-control" placeholder="Enter Meta Title: AR">

                        <label class="col-form-label">Meta Keywords: AR</label>
                        <input class="form-control" placeholder="Enter Meta Keywords: AR">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label class="col-form-label">Meta Description EN</label>
                        <textarea class="form-control" rows="5" placeholder="Meta Description EN"></textarea>

                        <label class="col-form-label">Meta Description AR</label>
                        <textarea class="form-control" rows="5" placeholder="Meta Description AR"></textarea>

                        <label class="col-form-label">Page Short Content: EN</label>
                        <textarea class="form-control" rows="5" placeholder="Page Short Content: EN"></textarea>

                        <label class="col-form-label">Page Short Content: AR</label>
                        <textarea class="form-control" rows="5" placeholder="Page Short Content: AR"></textarea>

                        <label class="col-form-label">Page Long Content: AR</label>
                        <textarea class="form-control" rows="5" placeholder="Page Long Content: AR"></textarea>

                        <label class="col-form-label">Page Long Content: EN</label>
                        <textarea class="form-control" rows="5" placeholder="Artwork Description AR"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label class="col-form-label">Status</label>
                        <select class="form-control">
                            <option>Select Status</option>
                            <option>Active</option>
                            <option>InActive</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <button class="btn btn-dark" type="submit">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection