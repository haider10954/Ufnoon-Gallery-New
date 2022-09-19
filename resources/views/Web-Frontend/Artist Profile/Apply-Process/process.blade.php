@extends('Web-Frontend.Layout.layout2')


@section('title','Apply Details')

@section('content')

<section class="section" style="font-family: 'Lato' , sans-serif ; ">
    <div class="container">
        <div class="row align-items-center">
            <div class="ws-related-title">
                <div class="process-step-cont mb-4">
                    <div class="process-step-top">
                        <p style="margin-left: 5px;">4 {{ __('translation.Steps') }}</p>
                    </div>
                    <div class="ws-related-title process-label">
                        <h3>{{ __('translation.To get you closer to your first sale') }}</h3>
                        <div class="ws-item-separator"></div>
                    </div>
                </div>
                <div class="col-md-3 col-12 mt-4 pt-2">
                    <div class="card pricing pricing-primary business-rate box-shadow bg-light rounded text-center border-0">
                        <div class="card-body py-5">
                            <div class="process-step-cont">
                                <div class="process-step">1</div>
                                <div class="ws-related-title process-label">
                                <h5 style="font-weight: bold;">{{ __('translation.Apply to join Ufnoon')}}</h5>
                            </div>
                            </div>
                            <div class="mt-4 text-justify  ">
                                <p>{{ __('translation.p1') }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-3 col-12 mt-4 pt-2">
                <div class="card pricing pricing-primary business-rate box-shadow bg-light rounded text-center border-0">
                    <div class="card-body py-5">
                        <div class="process-step-cont">
                            <div class="process-step">2</div>
                            <div class="ws-related-title process-label">
                                <h5 style="font-weight: bold;">{{ __('translation.Create your profile')}}</h5>
                            </div>
                        </div>
                        <div class="mt-4 text-justify ">
                            <p>{{ __('translation.p2 line 1') }}
                            </p> <br>
                            <p>
                                {{ __('translation.p2 line 2') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-3 col-12 mt-4 pt-2">
                <div class="card pricing pricing-primary business-rate box-shadow bg-light rounded text-center border-0">
                    <div class="card-body py-5">
                        <div class="process-step-cont">
                            <div class="process-step ">3</div>
                            <div class="ws-related-title process-label">
                                <h5 style="font-weight: bold;">{{ __('translation.Expand your collector')}}</h5>
                            </div>
                            
                        </div>
                        <div class="mt-4 text-justify ">
                            <p>{{ __('translation.p3')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-3 col-12 mt-4 pt-2">
                <div class="card pricing pricing-primary business-rate box-shadow bg-light rounded text-center border-0">
                    <div class="card-body py-5">
                        <div class="process-step-cont">
                            <div class="process-step ">4</div>
                            <div class="ws-related-title process-label">
                                <h5 style="font-weight: bold;">{{ __('translation.Start selling')}}</h5>
                            </div>
                        </div>
                        <div class="mt-4 text-justify ">
                            <p>{{ __('translation.p4')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</section>


<section class="section" style="background: #CCFFE5;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Title -->
            <div class="ws-related-title">
                <h3>{{ __('translation.Our Plans')}}</h3>
                <div class="ws-item-separator"></div>
            </div>
            <div class="col-md-4 col-12 mt-4 pt-2">
                <div class="card pricing pricing-primary business-rate box-shadow bg-light rounded border-0">
                    <div class="card-body py-5">
                        <h6 class="title name fw-bold text-uppercase mb-4 text-center">{{ __('translation.Free')}}</h6>
                        <div class="d-flex justify-content-center mb-4">
                            <span class="h4 mb-0 mt-2">{{__('translation.SAR')}}</span>
                            <span class="price h1 mb-0">0</span>
                            <span class="h4 align-self-end mb-1">{{ __('translation.mo/')}}</span>
                        </div>

                        <ul class="list-unstyled mb-0 ps-0">
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.Free') }} - {{ __('translation.Monthly Charge') }} </li>
                            <li class="text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.Number of uploaded artworks for sale') }} </li>
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.Ability to Print Limited Editions') }} </li>
                            <li class="  text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.no') }} - {{ __('translation.Page Analytics') }}</li>
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.no') }} - {{ __('translation.Who’s viewed/loved your arts work')}}</li>
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.no') }} - {{ __('translation.See platform sale trends')}}</li>
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>-{{ __('translation.Name') }}</li>
                        </ul>
                        <div class="mt-4 text-center">

                            <a href="{{ route('web-artist-register')}}" class="ws-small-btn mt-4">{{ __('translation.Apply now')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 col-12 mt-4 pt-2">
                <div class="card pricing pricing-primary business-rate box-shadow bg-light rounded border-0">
                    <div class="card-body py-5">
                        <h6 class="title name fw-bold text-uppercase mb-4 text-center">{{ __('translation.Standard')}}</h6>
                        <div class="d-flex justify-content-center mb-4">
                            <span class="h4 mb-0 mt-2">{{__('translation.SAR')}}</span>
                            <span class="price h1 mb-0">500</span>
                            <span class="h4 align-self-end mb-1">{{ __('translation.mo/')}}</span>
                        </div>

                        <h6 class="title name fw-bold text-uppercase mb-4 text-center">12 month</h6>
                        <ul class="list-unstyled mb-0 ps-0">
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.Free') }} - {{ __('translation.Monthly Charge') }} </li>
                            <li class="text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.Number of uploaded artworks for sale') }} </li>
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.Ability to Print Limited Editions') }} </li>
                            <li class="  text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.no') }} - {{ __('translation.Page Analytics') }}</li>
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.no') }} - {{ __('translation.Who’s viewed/loved your arts work')}}</li>
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.no') }} - {{ __('translation.See platform sale trends')}}</li>
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>-{{ __('translation.Name') }}</li>
                        </ul>
                        <div class="mt-4 text-center">

                            <a href="{{ route('web-artist-register')}}" class="ws-small-btn mt-4">{{ __('translation.Apply now')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 col-12 mt-4 pt-2">
                <div class="card pricing pricing-primary business-rate box-shadow bg-light rounded border-0">
                    <div class="card-body py-5">
                        <h6 class="title name fw-bold text-uppercase mb-4 text-center">{{ __('translation.Premium')}}</h6>
                        <div class="d-flex justify-content-center mb-4">
                            <span class="h4 mb-0 mt-2">{{__('translation.SAR')}}</span>
                            <span class="price h1 mb-0">350</span>
                            <span class="h4 align-self-end mb-1">{{ __('translation.mo/')}}</span>
                        </div>

                        <ul class="list-unstyled mb-0 ps-0">
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.Free') }} - {{ __('translation.Monthly Charge') }} </li>
                            <li class="text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.Number of uploaded artworks for sale') }} </li>
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.Ability to Print Limited Editions') }} </li>
                            <li class="  text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.no') }} - {{ __('translation.Page Analytics') }}</li>
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.no') }} - {{ __('translation.Who’s viewed/loved your arts work')}}</li>
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>{{ __('translation.no') }} - {{ __('translation.See platform sale trends')}}</li>
                            <li class=" text-muted mb-0  p-5"><span class="icon h5 me-2 {{ (\Session::get('direction') == 'rtl' )? 'ml-1' : '' }}"><i class="fa fa-check"></i></span>-{{ __('translation.Name') }}</li>
                        </ul>
                        <div class="mt-4 text-center">

                            <a href="{{ route('web-artist-register')}}" class="ws-small-btn mt-4">{{ __('translation.Apply now')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</section>


@endsection