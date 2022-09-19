@extends('layouts.layout')

@section('title','Color Page')

@section('custom-style')
<style>
    .table td{
        vertical-align: middle !important;
    }
</style>
@endsection

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">Master</a></li>
                <li class="breadcrumb-item active" aria-current="page">Color</li>
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
                        <h4>Color List</h4>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3" style="text-align: right;">
                        <a class="btn px-5 btn-primary round-s" href="{{route('add_color')}}">
                            <i class="fa fa-plus"></i>Add Color
                        </a>
                    </div>
                </div>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Color</th>
                            <th>Modifies Date</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Violet</td>
                            <td>
                                <div style="height: 50px;width:50px;background-color:#EE82EE;"></div>
                            </td>

                            <td>2021-07-03</td>
                            <td>Active </td>

                            <td class="d-flex gap-1">
                                <a class="btn-sm btn btn-success" ><i class="fas fa-edit"></i></a>
                                <a class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Blacky</td>
                            <td>
                                <div style="height: 50px;width:50px;background-color:#000000;"></div>
                            </td>

                            <td>2021-07-03</td>
                            <td>InActive </td>

                            <td class="d-flex gap-1">
                                <a class="btn-sm btn btn-success" href="{{ route('edit_color')}}"><i class="fas fa-edit"></i></a>
                                <a class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Red</td>
                            <td>
                                <div style="height: 50px;width:50px;background-color:#FF0000;"></div>
                            </td>

                            <td>2021-07-03</td>
                            <td>InActive </td>

                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Green</td>
                            <td>
                                <div style="height: 50px;width:50px;background-color:#008000;"></div>
                            </td>

                            <td>2021-07-03</td>
                            <td>Active </td>

                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


@endsection