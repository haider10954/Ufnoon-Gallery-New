@extends('Web-Frontend.Layout.layout3')

@section('title','Add Exhibition')

@section('content')
<div class="row">
    <h1 class="text-center" style="margin-bottom: 15px;">Add Exhibition</h1>
    <form>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="col-form-label">My Artistic Journey</label>
                <select class="form-control">
                    <option>Select Credentials</option>
                    <option>Prizes</option>
                    <option>Exhibition</option>
                </select>
            </div>

            <div class="form-group">
                <label class="col-form-label"> Exhibition title</label>
                <input class="form-control" type="text" placeholder="Exhibition title">
            </div>

            <div class="form-group">
                <label class="col-form-label"> Exhibition Date</label>
                <input class="form-control" type="date" placeholder="Exhibition Date">
            </div>

            <div class="form-group">
                <label class="col-form-label">Status</label>
                <select class="form-control">
                    <option>Select Status</option>
                    <option>Active</option>
                    <option>InActive</option>
                </select>
            </div>


        </div>

        <div class="col-lg-6">

            <div class="form-group">
                <label class="col-form-label"> Exhibition Address</label>
                <input class="form-control" type="text" placeholder="Exhibition Address">
            </div>

            <div class="form-group">
                <label class="col-form-label"> Exhibition Image</label>
                <input class="form-control" type="file" placeholder="Exhibition Date">
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label class="col-form-label">Description EN</label>
                <textarea class="form-control" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label class="col-form-label">Description AR</label>
                <textarea class="form-control" rows="5"></textarea>
            </div>
        </div>

    </form>
    <div class="col-lg-12">
        <div class="mb-10 mt-10">
            <button class="button button1">Submit</button>
        </div>
    </div>

</div>

@endsection