@extends('Web-Frontend.Layout.layout2')

@section('title','Single Artist Page')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <!-- Item -->
        <div class="col-lg-6 ws-works-item text-center">
            <a href="{{ route('web-artwork')}}">
                <!-- Image -->
                <figure style="justify-content: center; display:flex;">
                    <img src="{{ asset('web-assets/img/works/Artists/artist1.jpeg') }}" alt="Alternative Text" class="img-responsive" width="250" height="250">
                </figure>
                <div class="ws-works-caption text-center">
                    <!-- Title -->
                    <h3 class="ws-item-title">{{ __('translation.Featured-Artist') }}</h3>

                    <div class="ws-item-separator"></div>

                    <!-- Price -->
                    <div class="ws-item-price">العنود بن دهيم</div>
                </div>
            </a>
        </div>

        <div class="col-lg-6 ws-works-item">
            <div class="ws-product-details {{ (\Session::get('direction') == 'rtl' )? 'Artist-Description' : '' }}">
                <br />
                <h3>{{ __('translation.Location') }}</h3>
                <p>{{ __('translation.City') }} </p>
                <br />
                <h3>{{ __('translation.Contact') }}</h3>
                <p>anoud1999@hotmail.com</p>
                <br />
                <h3>{{ __('translation.Socials') }}</h3>
                 <div style="padding-top:10px; display: flex; gap: 10px;">
                    <a style=" font-size: 20px;"><i class="fa-brands fa-instagram"></i></a>
                    <a style=" font-size: 20px;"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div style="padding: 20px 0 20px 0;">
                <a class="btn ws-btn-fullwidth">{{ __('translation.Follow')}}</a> <br />
            </div>
        </div>
    </div>
</div>

<!-- About Section Start -->
<section class="ws-about-section">
    <div class="container">
        <div class="row">

            <!-- Description -->
            <div class="ws-about-content clearfix">
                <div class="col-sm-8 col-sm-offset-2">
                    <h3>{{ __('translation.All artwork by the Artist') }}</h3>
                    <div class="ws-separator"></div>
                </div>
            </div>

            <!-- Featured Collections -->
            <div class="ws-featured-collections clearfix">
                <!-- Item -->
                <div class="col-sm-4 featured-collections-item">
                    <a href="#x">
                        <div class="thumbnail">
                            <img src="{{ asset('web-assets/img/works/Artists/Artist1/product1.jpeg') }}" alt="Alternative Text">
                            <div class="ws-overlay">
                                <div class="caption">
                                    <h3>{{ __('translation.Abstract-Art') }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col-sm-4 featured-collections-item">
                    <a href="#x">
                        <div class="thumbnail">
                            <img src="{{ asset('web-assets/img/works/Artists/Artist1/product2.jpeg') }}" alt="Alternative Text">
                            <div class="ws-overlay">
                                <div class="caption">
                                    <h3>Loin Paintings</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col-sm-4 featured-collections-item">
                    <a href="#x">
                        <div class="thumbnail">
                            <img src="{{ asset('web-assets/img/works/Artists/Artist1/product3.jpeg') }}" alt="Alternative Text">
                            <div class="ws-overlay">
                                <div class="caption">
                                    <h3>Illustrated Arts</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Subscribe Section -->
<section class="ws-subscribe-section" style="background: #cae4db;">
    <div class="container">
        <div class="row">
            <!-- Subscribe Content -->
            <div class="ws-subscribe-content text-center clearfix">
                <div class="col-sm-8 col-sm-offset-2">
                    <h3>{{ __('translation.Subscribe') }}</h3>
                    <div class="ws-separator"></div>
                    <!-- Form -->
                    <form class="form-inline">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <!-- Button -->
                        <a class="btn ws-btn-subscribe">{{ __('translation.sub Btn') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe Section -->


@endsection