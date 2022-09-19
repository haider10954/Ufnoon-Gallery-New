@extends('layouts.layout')

@section('title','Order Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order List</li>
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
                        <h4>Orders List</h4>
                    </div>
                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></th>
                            <th>Type</th>
                            <th>Order No</th>
                            <th>Name</th>
                            <th>Billing Email</th>
                            <th>Status</th>
                            <th>Order Date</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                            <td>User</td>
                            <td>Invoice0000000189</td>
                            <td>Mohammed Bin saloom </td>
                            <td>abo-slooom-@hotmail.com</td>
                            <td>Success</td>
                            <td>2022-03-07 </td>
                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                            <td>User</td>
                            <td>Invoice0000000189</td>
                            <td>Mohammed Bin saloom </td>
                            <td>abo-slooom-@hotmail.com</td>
                            <td>Success</td>
                            <td>2022-03-07 </td>
                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                            <td>User</td>
                            <td>Invoice0000000189</td>
                            <td>Mohammed Bin saloom </td>
                            <td>abo-slooom-@hotmail.com</td>
                            <td>Success</td>
                            <td>2022-03-07 </td>
                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                            <td>User</td>
                            <td>Invoice0000000189</td>
                            <td>Mohammed Bin saloom </td>
                            <td>abo-slooom-@hotmail.com</td>
                            <td>Success</td>
                            <td>2022-03-07 </td>
                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                            <td>User</td>
                            <td>Invoice0000000189</td>
                            <td>Mohammed Bin saloom </td>
                            <td>abo-slooom-@hotmail.com</td>
                            <td>Success</td>
                            <td>2022-03-07 </td>
                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn-sm btn btn-success"><i class="fas fa-edit"></i></button>
                                <button class="btn-sm btn btn-dark "><i class="fas fa-trash "></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><input id="selectall" class="css-checkbox" type="checkbox" name="selectall"></td>
                            <td>User</td>
                            <td>Invoice0000000189</td>
                            <td>Mohammed Bin saloom </td>
                            <td>abo-slooom-@hotmail.com</td>
                            <td>Success</td>
                            <td>2022-03-07 </td>
                            <td class="d-flex gap-1">
                                <button class="btn-sm btn btn-primary"><i class="fas fa-eye"></i></button>
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