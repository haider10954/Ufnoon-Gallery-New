@extends('Web-Frontend.Layout.layout')

@section('title' , 'Liked Artists')

@section('content')

<!-- Page Parallax Header -->
<div class="ws-parallax-header parallax-window {{ (\Session::get('direction') == 'rtl' )? 'Sliders' : '' }}" data-parallax="scroll" data-image-src="{{ asset('web-assets/img/backgrounds/banner.jpg') }}">
    <div class="ws-overlay">
        <div class="ws-parallax-caption">
            <div class="ws-parallax-holder">
                <h1>{{ __('translation.Liked1')}}</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Page Parallax Header -->

<!-- Work Collection Start  -->
<section class="ws-works-section">
    <div class="container">
        <div class="row">
            <div class="ws-works-title">
                <div class="col-sm-12">
                    <h3>{{ __('translation.Favorite Artist')}}</h3>
                    <div class="ws-separator"></div>
                </div>
            </div>

            <!-- Item -->
            @foreach ($likedWork as $w)
            {{-- @dd($w)
            @dd($w->getArtist) --}}
            <div class="col-sm-6 col-md-4 ws-works-item" data-sr='wait 0.1s, ease-in 20px'>
                <a href="#">
                    <div class="ws-item-offer">
                        <!-- Image -->
                        <figure>
                            <img src="{{  asset('web-assets/img/frav_artist.jpg')}}" alt="Alternative Text" class="img-responsive" style="height: 500px; width:500px;">
                        </figure>
                        <!-- Sale Caption -->
                        <div class="ws-item-sale">
                            <a href="javascript:void(0)" onclick="setValue('{{$w->iLikedArtistsId}}');" data-toggle="modal" data-target="#myModal" ><span><i class="fa fa-times"></i></span></a>
                        </div>
                    </div>
                    <div class="ws-works-caption text-center">
                        <!-- Item Category -->
                        <div class="ws-item-category">{{ __('translation.Painting') }}</div>

                        <!-- Title -->
                        <h3 class="ws-item-title">{{$w->getArtist->vName}}</h3>

                        <div class="ws-item-separator"></div>

                        <!-- Price -->
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Work Collection End  -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="justify-content: center; display: flex;">
        <div class="modal-content" style="width: 80%;">
            <div class="modal-body text-center" style="padding-top:10px ;">
                <p style="font-size: 16px !important; text-transform: uppercase; letter-spacing: 1px;">Are you sure to delete Selected Item</p>
            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id='' class="deleteLiked btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
@section('custom-script')
<script>
    var selectedVal = null;
    function setValue(id)
    {
        selectedVal = id;
    }
    $('.deleteLiked').on('click',function()
    {
        $('#myModal').hide();
        ajaxCall('{{ route('dislikedartist') }}', 'Content', {
                    '_token': '{{ csrf_token() }}',
                    'artistId': selectedVal
                }, $('#register_user #submitBtn'),
                function(data) {
                    if (!data.error) {
                        $("#register_user").trigger('reset');
                        setTimeout(function() {
                               location.reload();
                        }, 1000);
                    }
                });


    });
</script>
@endsection
