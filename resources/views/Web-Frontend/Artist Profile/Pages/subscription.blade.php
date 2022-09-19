@extends('Web-Frontend.Layout.layout3')

@section('title','Subscription')

@section('content')
<div class="row">
    <h2 class="text-center" style="margin-bottom: 15px;">Current Subscription Plan is- الباقة الشاملة </h2> <br>
    <h4 class="text-center"> Your Plan will expire after +361 days, Expiry Date- 2023-09-01</h4> <br />
    <h4 class="text-center">{{ __('translation.SAR')}}</h4>
    <div class="col-lg-12">
        <div class="columns">
            <ul class="price">
                <li class="header">0 {{ __('translation.SAR')}}</li>
                <li></li>
                <li>Monthly Charge: 0</li>
                <li>Number of uploaded artworks for sale- 0</li>
                <li>Ability to Print Limited Editions- Open Editions-Only</li>
                <li>Commission- 25 %</li>
                <li>Page Analytics- No </li>
                <li>Who’s viewed/loved your arts work- No </li>
                <li>See platform sale trends- No </li>
                <li class="grey"><a href="#" class="button button1">You have used Free Trail</a></li>
            </ul>
        </div>
    </div>
</div>


@endsection