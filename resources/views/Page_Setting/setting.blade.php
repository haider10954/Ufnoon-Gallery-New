@extends('layouts.layout')


@section('title','Page Setting Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item active" aria-current="page">Page Setting</li>
            </ol>
        </div>
    </div>
</div>
<div class="row p-2">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body">

            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 mb-3">
                    <h4>Page Setting List</h4>
                </div>
                <div class="col-md-6 col-lg-6 mb-3" style="text-align: right;">
                    <a class="btn px-5 btn-primary round-s" href="{{ route('add_page_setting')}}">
                        <i class="fa fa-plus"></i>Add Page Settings
                    </a>
                </div>
            </div>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Show On Footer</th>
                        <th>Date Modified</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Packaging</td>
                        <td>No</td>
                        <td>2021/07/08 </td>
                        <td class="d-flex gap-1">
                            <a class="btn-sm btn btn-success" href="{{ route('edit_page_setting')}}"><i class="fas fa-edit"></i></a>
                            <a class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></a>
                        </td>
                    </tr>                   
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection