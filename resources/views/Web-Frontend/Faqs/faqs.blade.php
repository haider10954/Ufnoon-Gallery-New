@extends('Web-Frontend.Layout.layout')

@section('title','FAQS Page')

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
        <div class="ws-faq-page">
            <div class="col-md-8 col-md-offset-2">

                <!-- Tab Navabar -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Customers" aria-controls="Customers" role="tab" data-toggle="tab">{{ __('translation.Customers')}}</a></li>
                    <li role="presentation"><a href="#Artist" aria-controls="Artist" role="tab" data-toggle="tab">{{ __('translation.Artist')}}</a></li>

                </ul>

                <!-- Tab Panes -->
                <div class="tab-content">

                    <!-- Customer Panel -->
                    <div role="tabpanel" class="tab-pane fade in active ws-faq-pane-holder" id="Customers">

                        <div class="text-center">
                            <h3>{{ __('translation.Customers')}}</h3>
                            <div class="ws-separator"></div>
                        </div>

                        <!-- Accordion Panel -->
                        <div class="ws-accordion">

                            <!-- Group -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle active" data-toggle="collapse" href="#collapseOne">
                                        {{ __('translation.If I want to purchase a work of art but it is no longer available on the site, can I request the implementation of similar work?') }}
                                    </a>
                                </div>

                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p>{{ __('translation.Answer1')}}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Group -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapseTwo">
                                        {{ __('translation.Question2') }}
                                    </a>
                                </div>

                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>{{ __('translation.Answer2')}}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Group -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapseThree">
                                        {{ __('translation.Question3') }}
                                    </a>
                                </div>

                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>{{__('translation.Answer3')}}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Group -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapseFour">
                                        {{ __('translation.Question4') }}
                                    </a>
                                </div>

                                <div id="collapseFour" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>{{ __('translation.Answer4 line 1') }} <br />
                                            {{ __('translation.Answer4 line 2') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Accordion Panel -->
                    </div>
                    <!-- End Customer Panel -->

                    <!-- Artist Panel -->
                    <div role="tabpanel" class="tab-pane fade ws-faq-pane-holder" id="Artist">

                        <div class="text-center">
                            <h3>{{ __('translation.Artist')}}</h3>
                            <div class="ws-separator"></div>
                        </div>

                        <!-- Accordion Panel -->
                        <div role="tablist" aria-multiselectable="true" class="ws-accordion">
                            <div class="accordion">

                                <!-- Group -->
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseFive">
                                                {{ __('translation.Question1 Artist') }}
                                        </a>
                                    </div>

                                    <div id="collapseFive" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <p>{{ __('translation.Answer1 Artist')}}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">

                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseSix">
                                            {{ __('translation.Question2 Artist') }}
                                        </a>
                                    </div>

                                    <div id="collapseSix" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>{{ __('translation.Answer2 line 1 Artist') }} <br>

                                                {{ __('translation.Answer2 line 2 Artist')}}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">

                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseSeven">
                                            {{ __('translation.Question3 Artist') }}
                                        </a>
                                    </div>

                                    <div id="collapseSeven" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>{{__('translation.Answer3 Artist')}}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">

                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseEight">
                                            {{ __('translation.Question4 Artist') }}
                                        </a>
                                    </div>

                                    <div id="collapseEight" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p> {{ __('translation.Answer4 line1 Artist') }} <br>
                                                {{__('translation.Answer4 line2 Artist')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Accordion Panel -->
                    </div>
                    <!-- Account Panel -->
                </div>
                <!-- End Tab Panes -->
            </div>
        </div>
    </div>
</div>
<!-- End Page Content -->

<!-- Subscribe Section -->
<section class="ws-subscribe-section subscribe">
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
                        <a class="btn ws-btn-subscribe">{{ __('translation.sub Btn')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe Section -->


@endsection