@extends('Web-Frontend.Layout.layout')

@section('title','Ufnoon Gallery')

@section('content')
<!-- Slider FullScreen -->
<div id="ws-fullscreen-slider" class="rev_slider">
    <ul>

        <!-- Slide -->
        <li data-transition="fade">

            <!-- Background Image -->
            <img src="{{ asset('web-assets/img/backgrounds/banner.jpg') }}" alt="" width="1920" height="1280">

            <!-- Layer -->
            <div class="tp-caption ws-hero-title" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-72','-72','-72','-48']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 6;">
                <h1>Abstract Prints</h1>
            </div>

            <!-- Layer -->
            <div class="tp-caption ws-hero-description" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 7;">
                <h4>Spanning the fields of illustration, lettering &amp; fine art.</h4>
            </div>

            <!-- Button -->
            <div class="tp-caption"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']"                                    
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"             
                    data-start="1000"                      
                    data-responsive_offset="on" 
                    data-responsive="off"
                    style="z-index: 8;"><a class="btn ws-big-btn" href="shop.html">View Collention</a>
            </div>

        </li>

        <!-- Slide -->
        <li data-transition="fade">

            <!-- Background Image -->
            <img src="{{ asset('web-assets/img/backgrounds/Artist.jpg') }}" alt="" width="1920" height="1280">

            <!-- Layer -->
            <div class="tp-caption ws-hero-title" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-72','-72','-72','-48']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 6;">
                <h1> Ufnoon Gallery</h1>
            </div>

            <!-- Layer -->
            <div class="tp-caption ws-hero-description" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 7;">
                <h4>Spanning the fields of illustration, lettering &amp; fine art.</h4>
            </div>

            
            <!-- Button -->
            <div class="tp-caption"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']"                                    
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"             
                    data-start="1000"                      
                    data-responsive_offset="on" 
                    data-responsive="off"
                    style="z-index: 8;"><a class="btn ws-big-btn" href="shop.html">View Collention</a>
            </div>

        </li>

        <!-- Slide -->
        <li data-transition="fade">
            <!-- Background Image -->
            <img src="{{ asset('web-assets/img/backgrounds/banner2.png') }}" alt="" width="1920" height="1280">

            <!-- Layer -->
            <div class="tp-caption ws-hero-title" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-72','-72','-72','-48']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 6;">
                <h1> Ufnoon Gallery</h1>
            </div>

            <!-- Layer -->
            <div class="tp-caption ws-hero-description" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 7;">
                <h4>Spanning the fields of illustration, lettering &amp; fine art.</h4>
            </div>

            
            <!-- Button -->
            <div class="tp-caption"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']"                                    
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"             
                    data-start="1000"                      
                    data-responsive_offset="on" 
                    data-responsive="off"
                    style="z-index: 8;"><a class="btn ws-big-btn" href="shop.html">View Collention</a>
            </div>
        </li>

        <li data-transition="fade">
            <!-- Background Image -->
            <img src="{{ asset('web-assets/img/backgrounds/banner4.jpg') }}" alt="" width="1920" height="1280">

            <!-- Layer -->
            <div class="tp-caption ws-hero-title" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-72','-72','-72','-48']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 6;">
                <h1> Ufnoon Gallery</h1>
            </div>

            <!-- Layer -->
            <div class="tp-caption ws-hero-description" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-responsive_offset="on" style="z-index: 7;">
                <h4> Art connoisseurs gathered in one place !</h4><br />
                <h4 style="text-align:center;"> Discover the world</h4>
            </div>

            
            <!-- Button -->
            <div class="tp-caption"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']"                                    
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"             
                    data-start="1000"                      
                    data-responsive_offset="on" 
                    data-responsive="off"
                    style="z-index: 8;"><a class="btn ws-big-btn" href="shop.html">View Collention</a>
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
                <h3 style="margin-top: 15px;">The artist meets the collectors of unique pieces</h3>
                <br />
            </div>
            <!-- Categories Nav -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
                <li role="presentation"><a href="#painting" aria-controls="painting" role="tab" data-toggle="tab">Painting</a></li>
                <li role="presentation"><a href="#Sculpture" aria-controls="Sculpture" role="tab" data-toggle="tab">Sculpture</a></li>
                <li role="presentation"><a href="#Photography" aria-controls="Photography" role="tab" data-toggle="tab">Photography</a></li>
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
                                <div class="ws-item-category">Paintings</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Paintings</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Paintings</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Paintings</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Sculpture</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Photography</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Photography</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Paintings</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Paintings</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Paintings</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Paintings</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Sculpture</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Photography</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                                <div class="ws-item-category">Photography</div>

                                <!-- Title -->
                                <h3 class="ws-item-title">Featured Artist</h3>

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
                <a href="#x" class="btn ws-more-btn"> Load More</a>
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
            <h3>Categories</h3>
        </div>

        <div class="col-sm-4">
            <!-- Item -->
            <div class="ws-works-item">
                <a href="#">
                    <!-- Image -->
                    <figure>
                        <img src="{{ asset('web-assets/img/works/category/cat1.png')}}" alt="Alternative Text" class="img-responsive">
                    </figure>
                    <div class="ws-works-caption text-center">

                        <!-- Title -->
                        <h3 class="ws-item-title">Painting</h3>

                        <div class="ws-item-separator"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4">
            <!-- Item -->
            <div class="ws-works-item">
                <a href="#">
                    <!-- Image -->
                    <figure>
                        <img src="{{ asset('web-assets/img/works/category/cat2.png')}}" alt="Alternative Text" class="img-responsive">
                    </figure>
                    <div class="ws-works-caption text-center">
                        <!-- Title -->
                        <h3 class="ws-item-title">Sculpture</h3>

                        <div class="ws-item-separator"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4">
            <!-- Item -->
            <div class="ws-works-item">
                <a href="#">
                    <!-- Image -->
                    <figure>
                        <img src="{{ asset('web-assets/img/works/category/cat3.png')}}" alt="Alternative Text" class="img-responsive">
                    </figure>
                    <div class="ws-works-caption text-center">
                        <!-- Title -->
                        <h3 class="ws-item-title">Photography</h3>

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
        <h1 class="text-center" style="margin-top: 100;">Pisces crafted with love <span style="color:#c2a476; ">Welcome to your hands</span> </h1>
        <br />
        <h2 class="text-center ART">ArtWorks</h2>
        <br />
        <div class="container">
            <div class="row">
                <div class="ws-shop-page">
                    <div class="col-lg-12" style="justify-content: center;align-items: center;align-content: center;display: flex;">
                        <ul class="nav nav-tabs" role="tablist" style="align-content: center;display: flex;">
                            <li role="presentation" class="active"><a href="#painting_services" aria-controls="painting_services" role="tab" data-toggle="tab">Painting</a></li>
                            <li role="presentation"><a href="#Sculpture_services" aria-controls="Sculpture_services" role="tab" data-toggle="tab">Sculpture</a></li>
                            <li role="presentation"><a href="#Photography_services" aria-controls="Photography_services" role="tab" data-toggle="tab">Photography</a></li>
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
                                        <div class="item-category">Paintings</div>
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
                                        <div class="item-category">Paintings</div>
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
                                        <div class="item-category">Sculpture</div>
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
                                        <div class="item-category">Photography</div>
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
                                        <div class="item-category">Photography</div>
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

<!-- Product Content -->
<div class="container ws-page-container">
    <div class="row">

        <!-- Product Image Carousel -->
        <div class="col-sm-7">
            <div id="ws-products-carousel" class="owl-carousel">
                <div class="item">
                    <img src="{{ asset('web-assets/img/works/new-items/item2.jpeg') }}" class="img-responsive" alt="Alternative Text">
                </div>
                <div class="item">
                    <img src="{{ asset('web-assets/img/works/new-items/item3.jpeg') }}" class="img-responsive" alt="Alternative Text">
                </div>
                <div class="item">
                    <img src="{{ asset('web-assets/img/works/new-items/item4.jpeg') }}" class="img-responsive" alt="Alternative Text">
                </div>
                <div class="item">
                    <img src="{{ asset('web-assets/img/works/new-items/item1.jpeg') }}" class="img-responsive" alt="Alternative Text">
                </div>
            </div>
        </div>

        <!-- Product Information -->
        <div class="col-sm-5">
            <div class="ws-product-content">
                <header>
                    <!-- Title -->
                    <h3 class="ws-item-title">Whats New</h3>

                    <div class="ws-separator"></div>
                </header>

                <div class="ws-product-details">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <br>
                    <p>Inspirational pieces waiting for you!</p>
                </div>

                <!-- Button -->
                <a class="btn ws-btn-fullwidth">New ArtWorks</a><br><br><br>
            </div>
        </div>
    </div>
</div>
<!-- Product Content -->

<section class="text-center container" style="margin-bottom: 30px;">
    <h2 class="title border-bottom pb-2">Why Ufnoon ?</h2>
    <div class="container p-3">
        <div class="row justify-content-center gap-2">
            <div class="col-sm-6">
                <img src="{{asset('web-assets/img/works/services/service1.png')}}" alt="Ufnoon artowrk Fast Shipping" class="mb-2"><br>
                <h3>Fast Shipping</h3>
                <p class="mt-3"></p>

            </div>
            <div class="col-sm-6">
                <img src="{{asset('web-assets/img/works/services/service2.png')}}" alt="Ufnoon artowrk Easy Payments" class="mb-2"><br>
                <h3>Easy Payments</h3>
                <p>All Payments Are Processed Instantly<br>Over A Secure Payment Protocol.</p>

            </div>
            <div class="col-sm-6">
                <img src="{{asset('web-assets/img/works/services/service3.png')}}" alt="Ufnoon artowrk Marketing your art" class="mb-2"><br>
                <h3>Marketing your art</h3>
                <p class="mt-3"></p>
                <p>SHOW THE WORLD YOUR ART</p>
            </div>
            <div class="col-sm-6">
                <img src="{{asset('web-assets/img/works/services/service3.png')}}" alt="Ufnoon artowrk Money-Back Guarantee" class="mb-2"><br>
                <h3>Money-Back Guarantee</h3>
                <p class="mt-3"></p>
                <p>If An Item Arrived Damaged Or You've<br>Changed Your Mind, You Can Send It<br>Back For A Full Refund.</p>
            </div>

        </div>
    </div>
</section>


<!-- Subscribe Section -->
<section class="ws-subscribe-section" style="background: #cae4db;">
    <div class="container">
        <div class="row">
            <!-- Subscribe Content -->
            <div class="ws-subscribe-content text-center clearfix">
                <div class="col-sm-8 col-sm-offset-2">
                    <h3>Subscribe to the Ufnoon Newsletter to stay updated about it and to inform you about our exclusive offers.</h3>
                    <div class="ws-separator"></div>
                    <!-- Form -->
                    <form class="form-inline">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <!-- Button -->
                        <a class="btn ws-btn-subscribe">Subscribe</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe Section -->



@endsection