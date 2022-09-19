@extends('Web-Frontend.Layout.layout2')

@section('title','Artwork Page')

@section('content')
<!-- Breadcrumb -->
<div class="ws-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">{{ __('translation.Shop') }}</a></li>
            <li><a href="{{ route('web-painting') }}">{{ __('translation.Painting') }}</a></li>
            <li class="active">العائلة المسالمة</li>
        </ol>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Product Content -->
<div class="container ws-page-container">
    <div class="row">

        <!-- Product Image Carousel -->
        <div class="col-sm-7">
            <div id="ws-products-carousel" class="owl-carousel {{ (\Session::get('direction') == 'rtl' )? 'Sliders' : '' }}">
                <div class="item">
                    <img src="{{ asset('web-assets/img/works/artworks/artwork1.jpg') }}" class="img-responsive Artwork-Carousel" alt="Alternative Text">
                </div>
                <div class="item">
                    <img src="{{ asset('web-assets/img/works/artworks/artwork2.jpg') }}" class="img-responsive Artwork-Carousel" alt="Alternative Text" >
                </div>
                <div class="item">
                    <img src="{{ asset('web-assets/img/works/artworks/artwork3.jpg') }}" class="img-responsive Artwork-Carousel" alt="Alternative Text">
                </div>
            </div>
        </div>

        <!-- Product Information -->
        <div class="col-sm-5">
            <div class="ws-product-content">
                <header>
                    <!-- Item Category -->
                    <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                    <!-- Title -->
                    <h3 class="ws-item-title">العائلة المسالمة</h3>

                    <div class="ws-separator"></div>

                    <!-- Price -->
                    <div class="ws-single-item-price">800 {{ __('translation.SAR') }}</div>

                    <!-- Quantity -->
                    <div class="ws-product-quantity">
                        <a href="#" class="minus">-</a>
                        <input type="text" value="1" size="4">
                        <a href="#" class="plus">+</a>
                    </div>

                    <!-- Quantity -->
                    <!--<div class="ws-product-quantity">-->
                    <!--    <img src="{{asset('web-assets/img/works/Artists/artist1.jpeg')}}" class="rounded" height="50" width="50">-->
                    <!--</div>-->
                </header>

                <div class="ws-product-details">

                    <!--<br />-->
                    <!--<h3>{{ __('translation.Origin') }}</h3>-->
                    <!--<p>{{ __('translation.Designed, manufactured, and hand-finished by') }} العائلة المسالمة</p>-->
                    <!--<br />-->
                    <!--<h3>{{ __('translation.Certificate of Authenticity') }}</h3>-->
                    <!--<p> {{ __('translation.Excluded')}}</p>-->
                    <!--<br />-->
                    <!--<h3>{{ __('translation.Materials') }}</h3>-->
                    <!--<p> فرشاة .</p>-->
                    <!--<br />-->
                    <!--<h3>{{ __('translation.Dimensions') }}</h3>-->
                    <!--<p>{{ __('translation.Dimensions') }}: 2 x 90 x 120 cm cm.</p>-->
                    <!--<br />-->
                    <!--<h3>{{ __('translation.Shipping') }}</h3>-->
                    <!--<p>Safe shipping will be delivered to you within 5-10 working days</p>-->
                    
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>   
                        <br>                 
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        <br>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam</p>
                </div>

                <!-- Button -->
                <a class="btn ws-btn-fullwidth" href="{{ route('web-cart')}}">{{  __('translation.Add to Cart')  }}</a><br><br><br>
            </div>
        </div>
    </div>
</div>
<!-- Product Content -->


<!-- Related Post -->
<div class="ws-related-section">
    <div class="container">

        <!-- Title -->
        <div class="ws-related-title">
            <h3>{{ __('translation.Related Products') }}</h3>
        </div>

        <div class="col-sm-4">
            <!-- Item -->
            <div class="ws-works-item">
                <a href="#">
                    <!-- Image -->
                    <figure>
                        <img src="{{ asset('web-assets/img/works/artworks/product3.jpg') }}" alt="Alternative Text" class="img-responsive">
                    </figure>
                    <div class="ws-works-caption text-center">
                        <!-- Item Category -->
                        <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                        <!-- Title -->
                        <h3 class="ws-item-title">{{ __('translation.Name') }}</h3>

                        <div class="ws-item-separator"></div>

                        <!-- Price -->
                        <div class="ws-item-price">700 {{ __('translation.SAR') }}</div>
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
                        <img src="{{ asset('web-assets/img/works/artworks/product2.jpg') }}" alt="Alternative Text" class="img-responsive">
                    </figure>
                    <div class="ws-works-caption text-center">
                        <!-- Item Category -->
                        <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                        <!-- Title -->
                        <h3 class="ws-item-title">{{ __('translation.Name') }}</h3>

                        <div class="ws-item-separator"></div>

                        <!-- Price -->
                        <div class="ws-item-price">800 {{ __('translation.SAR') }}</div>
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
                        <img src="{{ asset('web-assets/img/works/artworks/product1.jpg') }}" alt="Alternative Text" class="img-responsive">
                    </figure>
                    <div class="ws-works-caption text-center">
                        <!-- Item Category -->
                        <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                        <!-- Title -->
                        <h3 class="ws-item-title">{{ __('translation.Name') }}</h3>
                        <div class="ws-item-separator"></div>

                        <!-- Price -->
                        <div class="ws-item-price">500 {{ __('translation.SAR') }}</div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>
<!-- End Related Post -->

<!-- Instagram Content -->
<section id="ws-instagram-section">
    <div class="container">
        <div class="row vertical-align">

            <!-- Instagram Information -->
            <div class="col-sm-3">
                <div class="ws-instagram-header">
                    <h3>Instagram</h3>
                    <br>
                    <a href="https://www.instagram.com/" target="_blank" class="ws-instagram-link"> @ {{ __('translation.Ufnoon Gallery')}}</a>
                    <p></p>
                </div>
            </div>

            <!-- Instagram Item -->
            <div class="col-sm-3 ws-instagram-item" data-sr='wait 0.1s, ease-in 20px'>
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="{{ asset('web-assets/img/works/artworks/product1.jpg') }}" alt="Alternative Text" class="img-responsive" style="height:400px">
                </a>
            </div>

            <!-- Instagram Item -->
            <div class="col-sm-3 ws-instagram-item" data-sr='wait 0.3s, ease-in 20px'>
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="{{ asset('web-assets/img/works/artworks/artwork3.jpg') }}" alt="Alternative Text" class="img-responsive" style="height:400px">
                </a>
            </div>

            <!-- Instagram Item -->
            <div class="col-sm-3 ws-instagram-item" data-sr='wait 0.5s, ease-in 20px'>
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="{{ asset('web-assets/img/works/artworks/artwork3.jpg') }}" alt="Alternative Text" class="img-responsive" style="height:400px">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Instagram Content -->

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