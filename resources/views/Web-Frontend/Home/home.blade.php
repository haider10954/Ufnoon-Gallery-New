@extends('Web-Frontend.Layout.layout')

@section('title','Ufnoon Gallery')

@section('content')
<!-- Slider FullScreen -->
<div id="ws-fullscreen-slider" class="rev_slider {{ (\Session::get('direction') == 'rtl' )? 'Sliders' : '' }}">
    <ul>
        <!-- Slide -->
        <li data-transition="fade">

            <!-- Background Image -->
            <img src="{{ asset('web-assets/img/backgrounds/banner.jpg') }}" alt="" width="1920" height="1280">
            <!-- Layer -->
            <div class="tp-caption ws-hero-title " data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-72','-72','-72','-48']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 6;">
                <h1 class="{{ (\Session::get('direction') == 'rtl' )? 'banner-content' : '' }}">{{ __('translation.Abstract')}}</h1>
            </div>

            <!-- Layer -->
            <div class="tp-caption ws-hero-description" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 7;">
                <h4>{{ __('translation.Sub Heading Image 1')}}</h4>
            </div>

            <!-- Button -->
            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-start="1000" data-responsive_offset="on" data-responsive="off" style="z-index: 8;"><a class="btn ws-big-btn" href="{{ route('web-shops') }}">{{__('translation.View Collection')}}</a>
            </div>

        </li>

        <!-- Slide -->
        <li data-transition="fade">

            <!-- Background Image -->
            <img src="{{ asset('web-assets/img/backgrounds/Artist.jpg') }}" alt="" width="1920" height="1280">

            <!-- Layer -->
            <div class="tp-caption ws-hero-title" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-72','-72','-72','-48']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 6;">
                <h1>{{ __('translation.Ufnoon Gallery')}}</h1>
            </div>

            <!-- Layer -->
            <div class="tp-caption ws-hero-description" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 7;">
                <h4>{{ __('translation.Sub Heading Image 1')}}</h4>
            </div>


            <!-- Button -->
            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-start="1000" data-responsive_offset="on" data-responsive="off" style="z-index: 8;"><a class="btn ws-big-btn" href="{{ route('web-shops') }}">{{__('translation.View Collection')}}</a>
            </div>

        </li>

        <!-- Slide -->
        <li data-transition="fade">
            <!-- Background Image -->
            <img src="{{ asset('web-assets/img/backgrounds/banner2.png') }}" alt="" width="1920" height="1280">

            <!-- Layer -->
            <div class="tp-caption ws-hero-title" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-72','-72','-72','-48']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 6;">
                <h1>{{ __('translation.Ufnoon Gallery')}}</h1>
            </div>

            <!-- Layer -->
            <div class="tp-caption ws-hero-description" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 7;">
                <h4>{{ __('translation.Sub Heading Image 1')}}</h4>
            </div>


            <!-- Button -->
            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-start="1000" data-responsive_offset="on" data-responsive="off" style="z-index: 8;"><a class="btn ws-big-btn" href="{{ route('web-shops') }}">{{__('translation.View Collection')}}</a>
            </div>
        </li>

        <li data-transition="fade">
            <!-- Background Image -->
            <img src="{{ asset('web-assets/img/backgrounds/banner4.jpg') }}" alt="" width="1920" height="1280">

            <!-- Layer -->
            <div class="tp-caption ws-hero-title" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-72','-72','-72','-48']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 6;">
                <h1> {{__('translation.Ufnoon Gallery')}}</h1>
            </div>

            <!-- Layer -->
            <div class="tp-caption ws-hero-description" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 7;">
                <h4>{{__('translation.Sub Heading Image 2')}}</h4><br />
                <h4 style="text-align:center;">{{ __('translation.Sub Heading')}}</h4>
            </div>


            <!-- Button -->
            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-start="1000" data-responsive_offset="on" data-responsive="off" style="z-index: 8;"><a class="btn ws-big-btn" href="{{ route('web-shops') }}">{{__('translation.View Collection')}}</a>
            </div>

        </li>

    </ul>
</div>
<!-- End Slider FullScreen -->

<div class="container ws-page-container">
    <div class="row">
        <div class="ws-shop-page">
            <!-- Title -->
            <div class="ws-related-title">
                <h3 style="margin-top: 15px;">{{__('translation.Title')}}</h3>
                <br />
            </div>
            <!-- Categories Nav -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">{{ __('translation.All')}}</a></li>
                <li role="presentation"><a href="#painting" aria-controls="painting" role="tab" data-toggle="tab">{{ __('translation.Painting') }}</a></li>
                <li role="presentation"><a href="#Sculpture" aria-controls="Sculpture" role="tab" data-toggle="tab">{{ __('translation.Sculpture') }}</a></li>
                <li role="presentation"><a href="#Photography" aria-controls="Photography" role="tab" data-toggle="tab">{{ __('translation.Photography') }}</a></li>
            </ul>

            <!-- Categories Content -->
            <div class="tab-content">

                <div role="tabpanel" class="tab-pane fade in active" id="all">

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="{{ route('web-artwork')}}">
                            <!-- Image -->
                            <figure>
                                <img src="{{ asset('web-assets/img/works/paintings/painting1.jpg') }}" alt="Alternative Text" class="img-responsive" width="900" height="1000">
                            </figure>
                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Painting')}}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist') }}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(حسين سلمان )</div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <div class="ws-item-offer">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('web-assets/img/works/paintings/painting2.jpg') }}" alt="Alternative Text" class="img-responsive" alt="" width="900" height="1000">
                                </figure>
                            </div>

                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist')}}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(عهود سليمان)</div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <!-- Image -->
                            <figure>
                                <img src="{{ asset('web-assets/img/works/paintings/painting3.jpg') }}" alt="Alternative Text" class="img-responsive" alt="" width="900" height="1000">
                            </figure>
                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist') }}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(عبدالله بن عبدالمحسن)</div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <div class="ws-item-offer">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('web-assets/img/works/paintings/painting4.jpg') }}" alt="Alternative Text" class="img-responsive" alt="" width="900" height="1000">
                                </figure>
                            </div>

                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist')}}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(عبدالله العسكر) </div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <!-- Image -->
                            <figure>
                                <img src="{{ asset('web-assets/img/works/sculptures/sculpture1.png') }}" alt="Alternative Text" class="img-responsive">
                            </figure>
                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Sculpture') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist')}}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(حسين سلمان )</div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <div class="ws-item-offer">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('web-assets/img/works/photography/photography1.jpg') }}" alt="Alternative Text" class="img-responsive">
                                </figure>
                            </div>
                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Photography') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist')}}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(حسين سلمان )</div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <div class="ws-item-offer">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('web-assets/img/works/photography/photography2.jpg') }}" alt="Alternative Text" class="img-responsive">
                                </figure>
                            </div>
                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Photography') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist')}}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(حسين سلمان )</div>
                            </div>
                        </a>
                    </div>


                </div>
                <div role="tabpanel" class="tab-pane fade" id="painting">
                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <!-- Image -->
                            <figure>
                                <img src="{{ asset('web-assets/img/works/paintings/painting1.jpg') }}" alt="Alternative Text" class="img-responsive" width="900" height="1000">
                            </figure>
                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist')}}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(حسين سلمان )</div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <div class="ws-item-offer">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('web-assets/img/works/paintings/painting2.jpg') }}" alt="Alternative Text" class="img-responsive" alt="" width="900" height="1000">
                                </figure>
                            </div>

                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist')}}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(عهود سليمان)</div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <!-- Image -->
                            <figure>
                                <img src="{{ asset('web-assets/img/works/paintings/painting3.jpg') }}" alt="Alternative Text" class="img-responsive" alt="" width="900" height="1000">
                            </figure>
                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist')}}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(عبدالله بن عبدالمحسن)</div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <div class="ws-item-offer">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('web-assets/img/works/paintings/painting4.jpg') }}" alt="Alternative Text" class="img-responsive" alt="" width="900" height="1000">
                                </figure>
                            </div>

                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist')}}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(عبدالله العسكر) </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Sculpture -->
                <div role="tabpanel" class="tab-pane fade" id="Sculpture">

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <!-- Image -->
                            <figure>
                                <img src="{{ asset('web-assets/img/works/sculptures/sculpture1.png') }}" alt="Alternative Text" class="img-responsive">
                            </figure>
                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Sculpture') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist')}}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(حسين سلمان )</div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Photography -->
                <div role="tabpanel" class="tab-pane fade" id="Photography">

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <div class="ws-item-offer">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('web-assets/img/works/photography/photography1.jpg') }}" alt="Alternative Text" class="img-responsive">
                                </figure>
                            </div>
                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Photography') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist')}}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(حسين سلمان )</div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <div class="ws-item-offer">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('web-assets/img/works/photography/photography2.jpg') }}" alt="Alternative Text" class="img-responsive">
                                </figure>
                            </div>
                            <div class="ws-works-caption text-center">
                                <!-- Item Category -->
                                <div class="ws-item-category">{{ __('translation.Photography') }}</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">{{ __('translation.Featured-Artist')}}</h3>

                                <div class="ws-item-separator"></div>

                                <!-- Price -->
                                <div class="ws-item-price">(حسين سلمان )</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Categories Content -->
            <!-- Load More -->
            <div class="ws-more-btn-holder col-sm-12">
                <a href="#x" class="btn ws-more-btn">{{ __('translation.Load More') }}</a>
            </div>
            <!-- End Load More -->
        </div>
    </div>
</div>

<!--Category -->
<div class="ws-related-section">
    <div class="container">

        <!-- Title -->
        <div class="ws-related-title">
            <h3>{{ __('translation.Categories') }}</h3>
        </div>

        <div class="col-sm-4">
            <!-- Item -->
            <div class="ws-works-item">
                <a href="{{ route('web-painting')}}">
                    <!-- Image -->
                    <figure>
                        <img src="{{ asset('web-assets/img/works/category/cat1.png')}}" alt="Alternative Text" class="img-responsive">
                    </figure>
                    <div class="ws-works-caption text-center">

                        <!-- Title -->
                        <h3 class="ws-item-title">{{ __('translation.Painting') }}</h3>

                        <div class="ws-item-separator"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4">
            <!-- Item -->
            <div class="ws-works-item">
                <a href="{{ route('web-sculptures')}}">
                    <!-- Image -->
                    <figure>
                        <img src="{{ asset('web-assets/img/works/category/cat2.png')}}" alt="Alternative Text" class="img-responsive">
                    </figure>
                    <div class="ws-works-caption text-center">
                        <!-- Title -->
                        <h3 class="ws-item-title">{{ __('translation.Sculpture') }}</h3>

                        <div class="ws-item-separator"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4">
            <!-- Item -->
            <div class="ws-works-item">
                <a href="{{ route('web-photography')}}">
                    <!-- Image -->
                    <figure>
                        <img src="{{ asset('web-assets/img/works/category/cat3.png')}}" alt="Alternative Text" class="img-responsive">
                    </figure>
                    <div class="ws-works-caption text-center">
                        <!-- Title -->
                        <h3 class="ws-item-title">{{ __('translation.Photography') }}</h3>

                        <div class="ws-item-separator"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Category -->


<div class="ws-parallax-header parallax-window py bg">
    <div>
        <h1 class="text-center" style="margin-top: 100;">{{ __('translation.Pisces crafted with love') }} <span style="color:#c2a476; ">{{ __('translation.Welcome to your hands') }}</span> </h1>
        <br />
        <h2 class="text-center ART">{{ __('translation.Art Work') }}</h2>
        <br />
        <div class="container">
            <div class="row">
                <div class="ws-shop-page">
                    <div class="col-lg-12" style="justify-content: center;align-items: center;align-content: center;display: flex;">
                        <ul class="nav nav-tabs" role="tablist" style="align-content: center;display: flex;">
                            <li role="presentation" class="active"><a href="#painting_services" aria-controls="painting_services" role="tab" data-toggle="tab">{{ __('translation.Painting') }}</a></li>
                            <li role="presentation"><a href="#Sculpture_services" aria-controls="Sculpture_services" role="tab" data-toggle="tab">{{ __('translation.Sculpture') }}</a></li>
                            <li role="presentation"><a href="#Photography_services" aria-controls="Photography_services" role="tab" data-toggle="tab">{{ __('translation.Photography') }}</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fade in active" id="painting_services">
                            <!-- Item -->
                            <div class="col-sm-6 col-md-4 ws-works-item">
                                <a href="#">
                                    <!-- Image -->
                                    <figure style="border: solid 5px black;">
                                        <img src="{{ asset('web-assets/img/journal/painting1.png') }}" alt="Alternative Text" class="img-responsive">
                                    </figure>
                                    <div class="text-center">
                                        <!-- Item Category -->
                                        <div class="item-category">{{ __('translation.Painting') }}</div>
                                    </div>
                                </a>
                            </div>

                            <!-- Item -->
                            <div class="col-sm-6 col-md-4 ws-works-item">
                                <a href="#">
                                    <!-- Image -->
                                    <figure style="border: solid 5px black;">
                                        <img src="{{ asset('web-assets/img/journal/painting2.jpeg') }}" alt="Alternative Text" class="img-responsive">
                                    </figure>
                                    <div class="text-center">
                                        <!-- Item Category -->
                                        <div class="item-category">{{ __('translation.Painting') }}</div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="Sculpture_services">
                            <!-- Item -->
                            <div class="col-sm-6 col-md-4 ws-works-item">
                                <a href="#">
                                    <!-- Image -->
                                    <figure style="border: solid 5px black;">
                                        <img src="{{ asset('web-assets/img/journal/8.jpg') }}" alt="Alternative Text" class="img-responsive">
                                    </figure>
                                    <div class="ws-works-caption text-center">
                                        <!-- Item Category -->
                                        <div class="item-category">{{ __('translation.Sculpture') }}</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="Photography_services">
                            <!-- Item -->
                            <div class="col-sm-6 col-md-4 ws-works-item">
                                <a href="#">
                                    <!-- Image -->
                                    <figure style="border: solid 5px black;">
                                        <img src="{{ asset('web-assets/img/journal/photography.jpeg') }}" alt="Alternative Text" class="img-responsive">
                                    </figure>
                                    <div class="ws-works-caption text-center">
                                        <!-- Item Category -->
                                        <div class="item-category">{{ __('translation.Photography') }}</div>
                                    </div>
                                </a>
                            </div>

                            <!-- Item -->
                            <div class="col-sm-6 col-md-4 ws-works-item">
                                <a href="#">
                                    <!-- Image -->
                                    <figure style="border: solid 5px black;">
                                        <img src="{{ asset('web-assets/img/journal/photography2.jpeg') }}" alt="Alternative Text" class="img-responsive">
                                    </figure>
                                    <div class="ws-works-caption text-center">
                                        <!-- Item Category -->
                                        <div class="item-category">{{ __('translation.Photography') }}</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- New Arrivals Section -->
<section class="ws-arrivals-section">

    <div class="ws-works-title clearfix">
        <div class="col-sm-12">
            <h3>{{ __('translation.New ArtWork') }}</h3>
            <div class="ws-separator"></div>
        </div>
    </div>

    <div id="ws-items-carousel" class="{{ (\Session::get('direction') == 'rtl' )? 'Sliders' : '' }}">

        <!-- Item -->
        <div class="ws-works-item" data-sr='wait 0.1s, ease-in 20px'>
            <a href="#">
                <div class="ws-item-offer">
                    <!-- Image -->
                    <figure>
                        <img src="{{ asset('web-assets/img/works/new-items/item2.jpeg') }}" class="img-responsive" alt="Alternative Text">
                    </figure>
                </div>

                <div class="ws-works-caption text-center">
                    <!-- Item Category -->
                    <div class="ws-item-category">{{ __('translation.Abstract Print') }}</div>

                    <!-- Title -->
                    <h3 class="ws-item-title">Pinning Moon</h3>

                    <div class="ws-item-separator"></div>

                    <!-- Price -->
                    <div class="ws-item-price"><del>$50.00</del> <ins>$25.00</ins></div>
                </div>
            </a>
        </div>

        <!-- Item -->
        <div class="ws-works-item" data-sr='wait 0.3s, ease-in 20px'>
            <a href="#">
                <!-- Image -->
                <figure>
                    <img src="{{ asset('web-assets/img/works/new-items/item3.jpeg') }}" class="img-responsive" alt="Alternative Text">
                </figure>
                <div class="ws-works-caption text-center">
                    <!-- Item Category -->
                    <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                    <!-- Title -->
                    <h3 class="ws-item-title">Arkose Factor</h3>

                    <div class="ws-item-separator"></div>

                    <!-- Price -->
                    <div class="ws-item-price">$150.00</div>
                </div>
            </a>
        </div>

        <!-- Item -->
        <div class="ws-works-item" data-sr='wait 0.5s, ease-in 20px'>
            <a href="#">
                <!-- Image -->
                <figure>
                    <img src="{{ asset('web-assets/img/works/new-items/item4.jpeg') }}" class="img-responsive" alt="Alternative Text">
                </figure>
                <div class="ws-works-caption text-center">
                    <!-- Item Category -->
                    <div class="ws-item-category">{{ __('translation.Abstract Print') }}</div>

                    <!-- Title -->
                    <h3 class="ws-item-title">Interstellar</h3>

                    <div class="ws-item-separator"></div>

                    <!-- Price -->
                    <div class="ws-item-price">$75.00</div>
                </div>
            </a>
        </div>

        <!-- Item -->
        <div class="ws-works-item" data-sr='wait 0.7s, ease-in 20px'>
            <a href="#">
                <div class="ws-item-offer">
                    <!-- Image -->
                    <figure>
                        <img src="{{ asset('web-assets/img/works/new-items/item1.jpeg') }}" class="img-responsive" alt="Alternative Text">
                    </figure>
                </div>
                <div class="ws-works-caption text-center">
                    <!-- Item Category -->
                    <div class="ws-item-category">{{ __('translation.Sculpture') }}</div>

                    <!-- Title -->
                    <h3 class="ws-item-title">Rubby Hubby</h3>

                    <div class="ws-item-separator"></div>

                    <!-- Price -->
                    <div class="ws-item-price">$53.00</div>
                </div>
            </a>
        </div>

        <!-- Item -->
        <div class="ws-works-item">
            <a href="#">
                <div class="ws-item-offer">
                    <!-- Image -->
                    <figure>
                        <img src="{{ asset('web-assets/img/works/new-items/item1.jpeg') }}" alt="Alternative Text" class="img-responsive">
                    </figure>
                </div>

                <div class="ws-works-caption text-center">
                    <!-- Item Category -->
                    <div class="ws-item-category">{{ __('translation.Abstract Print') }}</div>

                    <!-- Title -->
                    <h3 class="ws-item-title">Pinning Moon</h3>

                    <div class="ws-item-separator"></div>

                    <!-- Price -->
                    <div class="ws-item-price"><del>$50.00</del> <ins>$25.00</ins></div>
                </div>
            </a>
        </div>

        <!-- Item -->
        <div class="ws-works-item">
            <a href="#">
                <div class="ws-item-offer">
                    <!-- Image -->
                    <figure>
                        <img src="{{ asset('web-assets/img/works/new-items/item1.jpeg') }}" alt="Alternative Text" class="img-responsive">
                    </figure>
                </div>

                <div class="ws-works-caption text-center">
                    <!-- Item Category -->
                    <div class="ws-item-category">{{ __('translation.Abstract Print') }}</div>

                    <!-- Title -->
                    <h3 class="ws-item-title">Pinning Moon</h3>

                    <div class="ws-item-separator"></div>

                    <!-- Price -->
                    <div class="ws-item-price"><del>$50.00</del> <ins>$25.00</ins></div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- End New Arrivals Section -->

<!-- Page Content -->
<div class="container ws-page-container" style="padding:0px !important; padding-bottom:20px !important;">
    <div class="row">
        <div class="ws-contact-page">
            <!-- Office Location -->
            <div class="col-sm-12">
                <div class="ws-contact-offices text-center pt-0">

                    <!-- Title -->
                    <h2>{{ __('translation.Why')}}</h2>
                    <div class="ws-separator "></div>
                    <br/>

                    <div class="row">
                        <!-- City -->
                        <div class="col-sm-6 col-sm-3 ws-contact-office-item" data-sr='wait 0.1s, ease-in 20px'>
                            <div class="thumbnail">
                                <img src="{{  asset('web-assets/img/works/Artists/Feature_Artist/service.jpg') }}" alt="Abc" style=" height:200px;">
                                <div class="ws-overlay">
                                    <div class="caption">
                                        <strong style="font-size: 16px !important"> {{ __('translation.Fast Shipping') }}</strong>
                                        <div class="ws-contact-separator"></div>
                                        <address>
                                            {{ __('translation.Fast Shipping') }}
                                            <br>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- City -->
                        <div class="col-sm-6 col-sm-3 ws-contact-office-item" data-sr='wait 0.3s, ease-in 20px'>
                            <div class="thumbnail">
                                <img src="{{  asset('web-assets/img/works/Artists/Feature_Artist/service2.jpg') }}" alt="Alternative Text" style=" height:200px;">
                                <div class="ws-overlay">
                                    <div class="caption">
                                        <strong style="font-size: 16px !important;"> {{ __('translation.Money-Back Guarantee')  }}</strong>
                                        <div class="ws-contact-separator"></div>
                                        <p style="color: #fff; font-size: 12px !important;">
                                            {{ __('translation.Money-Back Guarantee')  }}
                                            <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- City -->
                        <div class="col-sm-6 col-sm-3 ws-contact-office-item" data-sr='wait 0.5s, ease-in 20px'>
                            <div class="thumbnail">
                                <img src="{{  asset('web-assets/img/works/Artists/Feature_Artist/service3.jpg') }}" alt="Alternative Text" style=" height:200px;">
                                <div class="ws-overlay">
                                    <div class="caption">
                                        <strong style="font-size: 16px !important;">{{ __('translation.Marketing your art') }}</strong>
                                        <div class="ws-contact-separator"></div>
                                        <p style="color: #fff; font-size: 12px !important;">
                                            {{ __('translation.SHOW THE WORLD YOUR ART') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- City -->
                        <div class="col-sm-6 col-sm-3 ws-contact-office-item" data-sr='wait 0.5s, ease-in 20px'>
                            <div class="thumbnail">
                                <img src="{{  asset('web-assets/img/works/Artists/Feature_Artist/service4.jpg') }}" alt="Alternative Text" style=" height:200px;">
                                <div class="ws-overlay">
                                    <div class="caption">
                                        <strong style="font-size: 16px !important;">{{ __('translation.Money-Back Guarantee') }}</strong>
                                        <div class="ws-contact-separator"></div>
                                        <p style="color: #fff; font-size: 12px !important;">
                                            {{ __('translation.If An Item Arrived Damaged Or You ve') }}
                                            {{ __('translation.Changed Your Mind, You Can Send It') }}
                                            {{ __('translation.Back For A Full Refund') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Office Location -->
        </div>
    </div>
</div>
<!-- End Page Content -->


<!-- Subscribe Section -->
<section class="ws-subscribe-section" style="background: #cae4db;">
    <div class="container">
        <div class="row">
            <!-- Subscribe Content -->
            <div class="ws-subscribe-content text-center clearfix">
                <div class="col-sm-8 col-sm-offset-2">
                    <h3>{{ __('translation.Subscribe')}}</h3>
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