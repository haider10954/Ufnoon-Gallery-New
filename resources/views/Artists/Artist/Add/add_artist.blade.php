@extends('layouts.layout')

@section('title','Add ArtWork Page')

@section('content')
@include('Artists.Artist.edit')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="car-body">
                <form>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label class="col-form-label">Product Category</label>
                            <select class="form-control" type="text">
                                <option>Select Category</option>
                                <option>Category 1</option>
                                <option>Category 2</option>
                                <option>Category 3</option>
                                <option>Category 4</option>
                            </select>

                            <label class="col-form-label">Medium</label>
                            <select class="form-control" type="text">
                                <option>Select Medium</option>
                                <option>Medium 1</option>
                                <option>Medium 2</option>
                                <option>Medium 3</option>
                                <option>Medium 4</option>
                            </select>

                            <label class="col-form-label">Dimension (cm)</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input class="form-control" type="number" placeholder="height(cm)">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" type="number" placeholder="width(cm)">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" type="number" placeholder="length(cm)">
                                </div>
                            </div>

                            <label class="col-form-label">Sculpture Weight</label>
                            <input class="form-control" type="text" placeholder="Enter Sculpture Weight">

                            <label class="col-form-label">Product Frame Color</label>
                            <select class="form-control" type="text">
                                <option>Select Color</option>
                                <option>Color 1</option>
                                <option>Color 2</option>
                                <option>Color 3</option>
                                <option>Color 4</option>
                            </select>

                            <label class="col-form-label">Artwork Technique</label>
                            <input class="form-control" type="text" placeholder="Enter Artwork Technique">

                            <label class="col-form-label">Status</label>
                            <select class="form-control">
                                <option>Select Status</option>
                                <option>Active</option>
                                <option>InActive</option>
                            </select>
                        </div>

                        <div class="col-lg-6">

                            <label class="col-form-label">ArtWork Title</label>
                            <input class="form-control" type="text" placeholder="Art Work Title">

                            <label class="col-form-label">Material</label>

                            <select class="form-control">
                                <option>Select Option</option>
                            </select>

                            <label class="col-form-label">Artwork Main Price</label>
                            <input class="form-control" type="text" placeholder="Artwork Main Price">

                            <label class="col-form-label">Artwork with frame or without frame?</label>
                            <select class="form-control" type="text">
                                <option>Select Option</option>
                                <option>With Frame</option>
                                <option>Without Frame</option>
                            </select>

                            <label class="col-form-label"> Certificate Of Authenticity</label>
                            <select class="form-control" type="text">
                                <option>Select Option</option>
                                <option>With Frame</option>
                                <option>Without Frame</option>
                            </select>

                            <label class="col-form-label">Artwork Status?</label>
                            <select class="form-control" type="text">
                                <option>Select Option</option>
                                <option>With Frame</option>
                                <option>Without Frame</option>
                            </select>

                            <label class="col-form-label">Thumbnail Image</label>
                            <input class="form-control" type="file" placeholder="Image">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label class="col-form-label">Artwork Description EN</label>
                            <textarea class="form-control" rows="5" placeholder="Artwork Description EN"></textarea>

                            <label class="col-form-label">Artwork Description AR</label>
                            <textarea class="form-control" rows="5" placeholder="Artwork Description AR"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="mb-5">
                                <div action="#" class="dropzone">
                                    <div class="fallback"></div>
                                    <input name="file" type="file" multiple="multiple">
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="mdi mdi-cloud-upload display-4 text-muted"></i>
                                        </div>

                                        <h4>Drop files here or click to upload.</h4>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </form>
                <button class="btn btn-primary">Submit</button>
                <button class="btn btn-dark">Save</button>
            </div>
        </div>
    </div>
</div>


@endsection