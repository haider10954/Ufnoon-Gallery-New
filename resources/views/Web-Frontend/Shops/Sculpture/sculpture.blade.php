@extends('Web-Frontend.Layout.layout2')

@section('title','All Sculptures')

@section('content')

<!-- Breadcrumb -->
<div class="ws-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('web-home')}}">Ufnoon Gallery</a></li>
            <li><a href="{{ route('web-shops')}}">{{ __('translation.Shop') }} (83)</a></li>
            <li class="active">{{ __('translation.Sculpture') }} (0)</li>
        </ol>
    </div>
</div>
<!-- End Breadcrumb -->



<!-- New Arrivals Section -->
<section class="ws-arrivals-section">

    <div class="ws-works-title clearfix">
        <div class="col-sm-12">
            <h3>{{ __('translation.All Sculptures')}}</h3>
            <div class="ws-separator"></div>
        </div>
    </div>

    <div class="container ws-page-container">
        <div class="row">
            <div class="ws-shop-page">
                <!-- Categories Nav -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#artist1" aria-controls="artist1" role="tab" data-toggle="tab">دعاء حفني</a></li>
                    <li role="presentation"><a href="#artist2" aria-controls="artist2" role="tab" data-toggle="tab">العنود بن دهيم</a></li>
                    <li role="presentation"><a href="#artist3" aria-controls="artist3" role="tab" data-toggle="tab">سرور العتيبي</a></li>
                    <li role="presentation"><a href="#artist4" aria-controls="artist4" role="tab" data-toggle="tab">محمد الخرجي</a></li>
                    <li role="presentation"><a href="#artist5" aria-controls="artist5" role="tab" data-toggle="tab">عهود سليمان</a></li>
                    <li role="presentation"><a href="#artist6" aria-controls="artist6" role="tab" data-toggle="tab">Areej Obaid </a></li>
                    <li role="presentation"><a href="#artist7" aria-controls="artist6" role="tab" data-toggle="tab">Ahmed Art </a></li>
                </ul>

                <!-- Categories Content -->
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade in active" id="artist1">
                        <!-- Item -->
                        <div class="col-sm-6 col-md-4 ws-works-item">
                            <a href="#">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('web-assets/img/works/sculptures/sculpture1.png') }}" alt="Alternative Text" class="img-responsive" width="900" height="1000">
                                </figure>
                                <div class="ws-works-caption text-center">
                                    <!-- Item Category -->


                                    <!-- Title -->
                                    <h3 class="ws-item-title">دعاء حفني</h3>

                                    <div class="ws-item-separator"></div>

                                    <!-- Price -->
                                    <div class="ws-item-price">400 SAR</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-4 ws-works-item">
                            <a href="#">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('web-assets/img/works/sculptures/sculpture2.png') }}" alt="Alternative Text" class="img-responsive" width="900" height="1000">
                                </figure>
                                <div class="ws-works-caption text-center">
                                    <!-- Item Category -->


                                    <!-- Title -->
                                    <h3 class="ws-item-title">دعاء حفني</h3>

                                    <div class="ws-item-separator"></div>

                                    <!-- Price -->
                                    <div class="ws-item-price">200 SAR</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Sculpture -->
                    <div role="tabpanel" class="tab-pane fade" id="artist2">

                        <div class="col-sm-6 col-md-4 ws-works-item">
                            <a href="#">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('web-assets/img/works/sculptures/sculpture3.png') }}" alt="Alternative Text" class="img-responsive" width="900" height="1000">
                                </figure>
                                <div class="ws-works-caption text-center">
                                    <!-- Item Category -->


                                    <!-- Title -->
                                    <h3 class="ws-item-title">العنود بن دهيم</h3>

                                    <div class="ws-item-separator"></div>

                                    <!-- Price -->
                                    <div class="ws-item-price">521 SAR</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Photography -->
                    <div role="tabpanel" class="tab-pane fade" id="artist3">

                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="artist4">

                    </div>


                    <div role="tabpanel" class="tab-pane fade" id="artist5">

                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="artist6">

                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="artist7">

                    </div>
                </div>
                <!-- End Categories Content -->
                <!-- Load More -->
                <div class="ws-more-btn-holder col-sm-12">
                    <a href="#x" class="btn ws-more-btn"> {{ __('translation.Load More') }}</a>
                </div>
                <!-- End Load More -->
            </div>
        </div>
    </div>
</section>
<!-- End New Arrivals Section -->


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