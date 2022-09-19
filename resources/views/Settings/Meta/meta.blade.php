@extends('layouts.layout')


@section('title','Meta Page')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Ufnoon Gallery</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Meta</li>
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
                            <label>Meta Description </label>
                            <textarea id="textarea" class="form-control" maxlength="500" rows="3" placeholder="This textarea has a limit of 500 chars."></textarea>

                            <label>Meta Title</label>
                            <textarea id="textarea" class="form-control" maxlength="500" rows="3" placeholder="This textarea has a limit of 500 chars."></textarea>

                            

                        </div>
                        <div class="col-lg-6">
                            <label>Meta Keyword</label>
                            <textarea id="textarea" class="form-control" maxlength="500" rows="3" placeholder="This textarea has a limit of 500 chars."></textarea>
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