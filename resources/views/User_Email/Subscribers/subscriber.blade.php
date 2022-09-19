@extends('layouts.layout')

@section('title', 'Subscribers Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">User Emails</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Subscribers</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-12 mb-3">
                        <h4>All Subscribers List</h4>
                    </div>
                </div>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th> Email</th>
                            <th>Date Added</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>no-replycrivics@gmail.com</td>
                            <td>Active</td>
                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>no-replycrivics@gmail.com</td>
                            <td>Active</td>
                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>no-replycrivics@gmail.com</td>
                            <td>Active</td>
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