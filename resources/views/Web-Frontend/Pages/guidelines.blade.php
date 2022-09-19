@extends('Web-Frontend.Layout.layout2')

@section('title' , 'Guidelines')

@section('content')
<!-- Breadcrumb -->
<div class="ws-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('web-home') }}">{{ __('translation.Ufnoon Gallery') }}</a></li>
            <li class="active"><a href="#">{{ __('translation.Guidelines') }}</a></li>
        </ol>
    </div>
</div>
<!-- End Breadcrumb -->
<div class="container ws-page-container">
    <div class="row">
        <div class="ws-works-title clearfix">
            <div class="col-sm-12">
                <h3>{{ __('translation.Guidelines')}}</h3>
                <div class="ws-separator"></div>
            </div>
        </div>
    </div>
</div>
@endsection