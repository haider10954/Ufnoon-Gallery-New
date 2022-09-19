@extends('Web-Frontend.Layout.layout2')

@section('title' , 'Values and Services')

@section('content')
<!-- Breadcrumb -->
<div class="ws-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('web-home') }}">{{ __('translation.Ufnoon Gallery') }}</a></li>
            <li class="active"><a href="#">{{ __('translation.Values') }}</a></li>
        </ol>
    </div>
</div>
<!-- End Breadcrumb -->

<div class="container ws-page-container">
    <div class="row">
        <div class="ws-works-title clearfix">
            <div class="col-sm-12">
                <h3>{{ __('translation.Values')}}</h3>
                <div class="ws-separator"></div>
            </div>
        </div>
    </div>
</div>
@endsection