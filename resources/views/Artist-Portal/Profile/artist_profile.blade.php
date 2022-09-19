@extends('Artist-Portal.Layout.layout')

@section('title', 'Artist Profile')


@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">My Profile</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">My Profile</h4>
            </div><!-- end card header -->

            <div class="card-body">

                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="Enter First Name">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Mobile No</label>
                                <input type="text" class="form-control" placeholder="Enter Mobile NO">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Shop URL</label>
                                <input type="email" class="form-control" placeholder="Enter Shop Url">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Country</label>
                                <select class="form-control">
                                    <option>Select Option</option>
                                    <option>Country 1</option>
                                    <option>Country 2</option>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Zip Code</label>
                                <input type="text" class="form-control" placeholder="Enter Zip Code">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Artist Photo</label>
                                <input type="file" class="form-control">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Banner Photo</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="mb-2">
                                <label class="form-label">Birth Date</label>
                                <input type="date" class="form-control">
                            </div>


                            <div class="mb-2">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Interest</label>
                                <select class="form-control">
                                    <option>Select Option</option>
                                    <option>Interest 1</option>
                                    <option>Interest 2</option>
                                </select>
                            </div>


                            <div class="mb-2">
                                <label class="form-label">City</label>
                                <select class="form-control">
                                    <option>Select Option</option>
                                    <option>City 1</option>
                                    <option>City 2</option>
                                </select>
                            </div>



                            <div class="mb-2">
                                <label class="form-label">Shipping Location</label>
                                <select class="form-control">
                                    <option>Select Option</option>
                                    <option>Location 1</option>
                                    <option>Location 2</option>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" placeholder="Enter Address">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Twitter Username</label>
                                <input type="text" class="form-control" placeholder="Enter Twitter Name">
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Instagram Username</label>
                                <input type="text" class="form-control" placeholder="Enter Instagram Name">
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
                            
                            <a class="btn btn-dark">Preview</a>
                            <a class="btn btn-primary">Submit</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection