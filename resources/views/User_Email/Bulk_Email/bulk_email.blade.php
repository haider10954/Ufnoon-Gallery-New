@extends('layouts.layout')

@section('title','User Bulk Email Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">User Emails</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bulk Email</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-12 mb-3">
                        <h4>Send Bulk Email</h4>
                    </div>
                </div>

                <div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="To">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <form method="post">
                            <textarea class="form-control" name="area"></textarea>
                        </form>
                    </div>

                    <div class="btn-toolbar mb-0">
                        <div class="">
                            <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="far fa-save"></i></button>
                            <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="far fa-trash-alt"></i></button>
                            <button class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fab fa-telegram-plane ms-2"></i> </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


@endsection