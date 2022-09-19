@extends('Web-Frontend.Layout.layout2')

@section('title' , 'Term and Condition')

@section('content')
<!-- Breadcrumb -->
<div class="ws-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('web-home') }}">{{ __('translation.Ufnoon Gallery') }}</a></li>
            <li><a class="active" href="#">{{ __('translation.Terms and conditions') }}</a></li>
        </ol>
    </div>
</div>
<!-- End Breadcrumb -->

<div class="container ws-page-container">
    <div class="row">
        <div class="ws-works-title clearfix">
            <div class="col-sm-12">
                <h3>{{ __('translation.Terms')}}</h3>
                <div class="ws-separator"></div>
            </div>
        </div>
    </div>
</div>
@endsection