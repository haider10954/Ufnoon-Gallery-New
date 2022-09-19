@extends('layouts.layout')

@section('title','Dashboard Page')

@section('content')

<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stats shadow-lg">
            <div class="p-3 mini-stats-content">
                <div class="mb-4">
                    <i class=" fas fa-user fa-3x text-white"></i>
                </div>
            </div>
            <div class="mx-3">
                <div class="card mb-0 border p-3 mini-stats-desc shadow-lg">
                    <div class="d-flex">
                        <h6 class="mt-0 mb-3">All Artist</h6>
                        <h5 class="ms-auto mt-0">60</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stats shadow-lg ">
            <div class="p-3 mini-stats-content ">
                <div class="mb-4">
                    <i class="fas fa-hospital-user  fa-3x text-white"></i>
                </div>
            </div>
            <div class="mx-3">
                <div class="card mb-0 border p-3 mini-stats-desc shadow-lg">
                    <div class="d-flex">
                        <h6 class="mt-0 mb-3">All Customers</h6>
                        <h5 class="ms-auto mt-0">35</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stats shadow-lg ">
            <div class="p-3 mini-stats-content">
                <div class="mb-4">
                    <i class="fab fa-product-hunt fa-3x text-white"></i>
                </div>
            </div>
            <div class="mx-3">
                <div class="card mb-0 border p-3 mini-stats-desc">
                    <div class="d-flex">
                        <h6 class="mt-0 mb-3">All Products</h6>
                        <h5 class="ms-auto mt-0">133</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stats shadow-lg ">
            <div class="p-3 mini-stats-content">
                <div class="mb-4">
                    <i class="fas fa-border-all fa-3x text-white"></i>
                </div>
            </div>
            <div class="mx-3">
                <div class="card mb-0 border p-3 mini-stats-desc">
                    <div class="d-flex">
                        <h6 class="mt-0 mb-3">All Orders</h6>
                        <h5 class="ms-auto mt-0">19</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card shadow-lg ">
            <div class="card-body">
                <h4 class="header-title">Latest Artists</h4>
                <div class="table-responsive">

                    <table class="table mb-0">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>

                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Regional Director</td>
                                <td class="d-flex gap-1">
                                    <a class="btn-sm btn btn-success" href="{{ route('edit_artist_page')}}"><i class="fas fa-edit"></i></a>
                                    <a class="btn-sm btn btn-dark" id="sa-warning" type="button"><i class="fas fa-trash "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Systems Administrator</td>
                                <td class="d-flex gap-1">
                                    <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Developer</td>
                                <td class="d-flex gap-1">
                                    <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Regional Director</td>
                                <td class="d-flex gap-1">
                                    <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Javascript Developer</td>
                                <td class="d-flex gap-1">
                                    <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Customer Support</td>
                                <td class="d-flex gap-1">
                                    <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end First col -->

    <div class="col-lg-6">
        <div class="card shadow-lg ">
            <div class="card-body">
                <h4 class="header-title">Latest Customers</h4>
                <div class="table-responsive">

                    <table class="table mb-0">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>

                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Regional Director</td>
                                <td class="d-flex gap-1">
                                    <a class="btn-sm btn btn-success" href="{{ route('edit_user')}}"><i class="fas fa-edit"></i></a>
                                    <a class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Systems Administrator</td>
                                <td class="d-flex gap-1">
                                    <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Developer</td>
                                <td class="d-flex gap-1">
                                    <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Regional Director</td>
                                <td class="d-flex gap-1">
                                    <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Javascript Developer</td>
                                <td class="d-flex gap-1">
                                    <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Customer Support</td>
                                <td class="d-flex gap-1">
                                    <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end First col -->
</div> <!-- end row -->
<div class="row">
    <div class="col-lg-6">
        <div class="card shadow-lg">
            <div class="card-body">

                <h4 class="card-title mb-4">Line Chart</h4>

                <div class="row text-center mt-4">
                    <div class="col-4">
                        <h5 class="mb-0 font-size-18">25610</h5>
                        <p class="text-muted text-truncate">Activated</p>
                    </div>
                    <div class="col-4">
                        <h5 class="mb-0 font-size-18">56210</h5>
                        <p class="text-muted text-truncate">Pending</p>
                    </div>
                    <div class="col-4">
                        <h5 class="mb-0 font-size-18">12485</h5>
                        <p class="text-muted text-truncate">Deactivated</p>
                    </div>
                </div>

                <div id="morris-line-example" class="morris-charts morris-chart-height" dir="ltr"></div>

            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card shadow-lg">
            <div class="card-body">

                <h4 class="card-title mb-4">Bar Chart</h4>

                <div class="row text-center mt-4">
                    <div class="col-6">
                        <h5 class="mb-0 font-size-18">6,95,412</h5>
                        <p class="text-muted text-truncate">Activated</p>
                    </div>
                    <div class="col-6">
                        <h5 class="mb-0 font-size-18">1,63,542</h5>
                        <p class="text-muted text-truncate">Pending</p>
                    </div>
                </div>

                <div id="morris-bar-example" class="morris-charts morris-chart-height" dir="ltr"></div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow-lg ">
            <div class="card-body">
                <h1 class="mt-0 header-title mb-5">Monthly Earning</h1>
                <div id="morris-bar-stacked" class="morris-chart-height morris-charts"></div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection