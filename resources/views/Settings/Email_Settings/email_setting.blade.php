@extends('layouts.layout')

@section('title','Email Setting Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Email Setting</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Email Settings</h4>
                <form>
                    <div class="row">
                        <div class="col-lg-6">


                            <label class="form-label">Administrator Email Address </label>
                            <input class="form-control input-mask" placeholder="no-reply@ufnoongallery.com">


                            <label class="form-label">SMTP Server Host</label>
                            <input class="form-control input-mask" placeholder="c94217.sgvps.net">


                            <label class="form-label">SMTP Server Port </label>
                            <input class="form-control input-mask" placeholder="465">


                            <label class="form-label" for="input-currency">Support Email Address </label>
                            <input class="form-control input-mask text-start" placeholder="contact@ufnoongallery.com">

                        </div>

                        <div class="col-lg-6">

                            <label class="form-label" for="input-repeat">Email Protocol </label>
                            <input class="form-control input-mask" placeholder="richa.isync@gmail.com">
                            
                            <label class="form-label" for="input-mask">SMTP Server Password </label>
                            <input  class="form-control input-mask" placeholder="Smtp@95959">

                            <label class="form-label" for="input-ip">SMTP Server User name </label>
                            <input class="form-control input-mask" placeholder="no-reply@ufnoongallery.com">

                        </div>
                    </div>
                </form>

                <div class="row mt-2">
                    <div class="col-lg-12">

                        <button class="btn btn-primary btn-lg">Submit</button>
                        <button class="btn btn-dark btn-lg">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection