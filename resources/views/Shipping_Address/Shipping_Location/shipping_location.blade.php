@extends('layouts.layout')

@section('title','Shipping Location Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">Shipping Location</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shipping Location</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6 mb-3">
                        <h4>Shipping Location List</h4>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3" style="text-align: right;">
                        <a class="btn px-5 btn-primary round-s" href="{{ route('add_shipping_location')}}">
                            <i class="fa fa-plus"></i>Add Shipping Location
                        </a>
                    </div>
                </div>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>Hub</th>
                            <th>Cities</th>
                            <th>Service Days</th>
                            <th>Tire</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>مدينة الرياض</td>
                            <td>Alkharj</td>

                            <td>Sun,Mon,Tues,Wed,Thu</td>
                            <td>Tire 1 </td>
                            <td>2021/07/08 </td>

                            <td class="d-flex gap-1">
                                <a class="btn-sm btn btn-success" href="{{ route('edit_shipping_location')}}"><i class="fas fa-edit"></i></a>
                                <a class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


@endsection