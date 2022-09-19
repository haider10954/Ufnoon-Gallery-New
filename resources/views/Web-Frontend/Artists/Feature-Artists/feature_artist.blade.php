@extends('Web-Frontend.Layout.layout')

@section('title', 'Feature Artists')

@section('content')

    <!-- Page Parallax Header -->
    <div class="ws-parallax-header parallax-window" data-parallax="scroll"
        data-image-src="{{ asset('web-assets/img/backgrounds/banner.jpg') }}">
        <div class="ws-overlay">
        </div>
    </div>
    <!-- End Page Parallax Header -->

    <!-- About Section Start -->
    <section class="ws-about-section">
        <div class="container">
            <div class="row">

                <!-- Description -->
                <div class="ws-about-content clearfix">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h3>{{ __('translation.Featured-Artist') }}</h3>
                        <div class="ws-separator"></div>
                        <p>{{ __('translation.Feature-Artist-Title') }}</p>
                    </div>
                </div>
                @foreach ($artist as $a)
                {{-- @dd($liked) --}}
                    <div class="col-sm-6 col-md-4 ws-works-item">
                        <a href="#">
                            <div class="ws-item-offer">
                                <!-- Image -->
                                <figure>
                                    <img src="{{ asset('web-assets/img/works/Artists/Feature_Artist/Artist1.jpeg') }}"
                                        alt="Alternative Text" class="img-responsive">
                                </figure>

                                <!-- Sale Caption -->
                                @if (auth()->check())
                                    <div class="ws-item-sale {{ $a->getlikes->count() > 0 ? 'bg-red' : '' }}">
                                        <a class='liked' data-id="{{ $a->iArtistsId }}"><span><i
                                                    class="fa-regular fa-heart " > </i></span></a>
                                    </div>
                                @endif

                            </div>
                            <div class="ws-works-caption text-center">
                                <!-- Title -->
                                <h3 class="ws-item-title">{{ $a->vName }}</h3>
                                <div class="ws-item-separator"></div>
                                <div class="ws-item-category">{{ $a->getCategory->vTitle }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- About Section End -->

@endsection
@section('custom-script')
    <script>
        $('.liked').on('click', function() {
            ajaxCall('{{ route('likeartist') }}', 'Content', {
                    '_token': '{{ csrf_token() }}',
                    'artistId': $(this).attr('data-id')
                }, $('#register_user #submitBtn'),
                function(data) {
                    if (!data.error) {
                        setTimeout(function() {
                            window.location.reload()
                        }, 1000);
                    }
                });
        });
    </script>
@endsection
