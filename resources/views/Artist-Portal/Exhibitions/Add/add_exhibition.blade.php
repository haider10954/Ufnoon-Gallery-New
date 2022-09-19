@extends('Artist-Portal.Layout.layout')

@section('title', 'Add Exhibitions')


@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Add Exhibitions</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Add Exhibition</h4>
            </div><!-- end card header -->

            <div class="card-body">

                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">My Artistic Journey</label>
                                <select class="form-control">
                                    <option>Select Option</option>
                                    <option>Journey 1</option>
                                    <option>Journey 2</option>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Exhibition Title</label>
                                <input type="text" class="form-control" placeholder="Enter Exhibition Title">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Status</label>
                                <select class="form-control">
                                    <option>Select Option</option>
                                    <option>Status 1</option>
                                    <option>Status 2</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="mb-2">
                                <label class="form-label">Exhibition Address</label>
                                <input type="date" class="form-control" placeholder="Enter Address">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Exhibition Image</label>
                                <input type="file" class="form-control">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Exhibition Date</label>
                                <input type="date" class="form-control">
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="mb-2">
                                <label class="form-label">Artist Description AR</label>
                                <textarea class="form-control" rows="5" placeholder="Artist Description AR"></textarea>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Artist Description EN</label>
                                <textarea class="form-control" rows="5" placeholder="Artist Description EN"></textarea>
                            </div>
                        </div>

                        <div class="mt-2">
                            <a class="btn btn-primary">Submit</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection