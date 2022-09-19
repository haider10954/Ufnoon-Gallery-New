@extends('layouts.layout')


@section('title','Social Info Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Socials</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="car-body">
                <h4 class="card-title">Settings</h4>
                <form>
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label class="col-form-label">Facebook Profile URL </label>
                            <input class="form-control" type="text" placeholder="URLS">

                            <label class="col-form-label">Linked URL</label>
                            <input class="form-control" type="text" placeholder="URLS">

                            <label class="col-form-label">YouTube Url</label>
                            <input class="form-control" type="text" placeholder="URLS">

                        </div>
                        <div class="col-lg-6">

                            <label class="col-form-label">Instagram Url</label>
                            <input class="form-control" type="text" placeholder="URLS">

                            <label class="col-form-label">Twitter Url</label>
                            <input class="form-control" type="text" placeholder="URLS">

                        </div>
                    </div>
                </form>
                <button class="btn btn-primary btn-lg">Submit</button>
                <button class="btn btn-dark btn-lg">Save</button>
            </div>
        </div>
    </div>
</div>

@endsection