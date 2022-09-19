@extends('layouts.layout')

@section('title','Edit Product Page')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="car-body">
                <form>
                    <div class="row p-3">
                        <div class="col-lg-6">
                            <label class="col-form-label">Product's Artist*</label>
                            <input class="form-control" type="text" placeholder="Product Artist">

                            <label class="col-form-label">Product Category</label>
                            <select class="form-control" type="text">
                                <option>Select Category</option>
                                <option>Category 1</option>
                                <option>Category 2</option>
                                <option>Category 3</option>
                                <option>Category 4</option>
                            </select>

                            <label class="col-form-label">Artwork Title*</label>
                            <input class="form-control" type="text" placeholder="Artwork Title">

                            <label class="col-form-label">Material</label>
                            <select class="form-control" type="text">
                                <option>Select Material</option>
                                <option>Material 1</option>
                                <option>Material 2</option>
                                <option>Material 3</option>
                                <option>Material 4</option>
                            </select>

                            <label class="col-form-label">Artwork Main Price*</label>
                            <input class="form-control" type="number" placeholder="Prize">

                            <label class="col-form-label">Sculpture Weight</label>
                            <input class="form-control" type="text" placeholder="Enter Sculpture Weight">

                            <label class="col-form-label">Product Frame Color</label>
                            <select class="form-control" type="text">
                                <option>Select Product Frame Color</option>
                                <option>Product Frame Color 1</option>
                                <option>Product Frame Color 2</option>
                                <option>Product Frame Color 3</option>
                                <option>Product Frame Color 4</option>
                            </select>

                            <label class="col-form-label">Prints Price of Artist</label>
                            <input class="form-control" type="text" placeholder="Prints Price of Artist">

                            <label class="col-form-label">Artwork Technique</label>
                            <input class="form-control" type="text" placeholder="Enter Artwork Technique">

                            

                            <label class="col-form-label">Status</label>
                            <select class="form-control" type="text">
                                <option>Select Status</option>
                                <option>Active</option>
                                <option>InActive</option>
                            </select>
                        </div>

                        <div class="col-lg-6">

                            <label class="col-form-label">Edit Sub Category</label>
                            <select class="form-control" type="text">
                                <option>Select Status</option>
                                <option>Abstract</option>
                                <option>Pop Art</option>
                            </select>

                            <label class="col-form-label">Medium</label>

                            <select class="form-control">
                                <option>Select Option</option>
                                <option>Arcylic</option>
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


                            <label class="col-form-label">Artwork Price Of Artist</label>
                            <input class="form-control" type="text" placeholder="Artwork Price of Artist">

                            <label class="col-form-label">Artwork with frame or without frame?</label>
                            <select class="form-control" type="text">
                                <option>Select Option</option>
                                <option>With Frame</option>
                                <option>Without Frame</option>
                            </select>

                            <label class="col-form-label">  Can be printed or not?</label>
                            <input class="form-control" type="text" placeholder="No">

                            <label class="col-form-label">Certificate Of Authenticity</label>
                            <select class="form-control" type="text">
                                <option>Select Option</option>
                                <option>Included</option>
                                <option>Excluded</option>
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

                    <div class="row p-3">
                        <div class="col-lg-12">
                            <label class="col-form-label">Artwork Description EN</label>
                            <textarea class="form-control" rows="5" placeholder="Artwork Description EN"></textarea>

                            <label class="col-form-label">Artwork Description AR</label>
                            <textarea class="form-control" rows="5" placeholder="Artwork Description AR"></textarea>
                        </div>
                    </div>

                    <div class="row p-3">
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