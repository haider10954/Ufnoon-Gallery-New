@extends('Web-Frontend.Layout.layout2')

@section('title','Apply Now For Artist')

@section('content')


<div class="container ws-page-container">
    <div class="row">
        <div class="ws-works-title clearfix">
            <div class="col-sm-12">
                <h3>{{ __('translation.Artist-Registration') }}</h3>
                <div class="ws-separator"></div>
                
            </div>
        </div>
        <!-- Login Form -->
        <form class="ws-login-form">
            <div class="col-sm-6 col-lg-6">


                <!-- Email -->
                <div class="form-group">
                    <label class="control-label">{{ __('translation.Email') }} <span>*</span></label>
                    <input type="email" class="form-control">
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label class="control-label">{{ __('translation.Last Name') }} <span>*</span></label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label class="control-label">{{ __('translation.Country') }} <span>*</span></label>
                    <select type="date" class="form-control">
                        <option>Select Country</option>
                        <option>Country 1</option>
                        <option>Country 2</option>
                        <option>Country 3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label">{{ __('translation.District') }} <span>*</span></label>
                    <select type="date" class="form-control">
                        <option>Select District</option>
                        <option>District 1</option>
                        <option>District 2</option>
                        <option>District 3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label">{{ __('translation.Twitter') }}</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label class="control-label">{{ __('translation.Enter Website URL') }}</label>
                    <input type="text" class="form-control">
                </div>


                <div class="form-group">
                    <select type="date" class="form-control">
                        <option>{{ __('translation.Select Medium') }}</option>
                        <option>Medium 1</option>
                        <option>Medium 2</option>
                        <option>Medium 3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="customRange1" class="form-label">{{ __('translation.What’s the average artworks prices?')}}</label>
                    <input type="range" class="form-range" id="customRange1">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <label class="control-label">{{ __('translation.Your Prize') }}</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <label class="control-label">{{ __('translation.Max Prize')}}</label>
                            <input type="number" class="form-control" placeholder="100000">
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="padding-top-x50"></div>
            </div>

            <div class="col-sm-6 col-lg-6">
                <!-- Email -->
                <div class="form-group">
                    <label class="control-label">{{ __('translation.First Name') }} <span>*</span></label>
                    <input type="email" class="form-control">
                </div>


                <div class="form-group">
                    <label class="control-label">{{ __('translation.Birth Day')}}<span>*</span></label>
                    <input type="date" class="form-control">
                </div>


                <div class="form-group">
                    <label class="control-label">{{ __('translation.City') }} <span>*</span></label>
                    <select type="date" class="form-control">
                        <option>Select City</option>
                        <option>City 1</option>
                        <option>City 2</option>
                        <option>City 3</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label class="control-label">{{ __('translation.Postcode/Zip') }} <span>*</span></label>
                        <select type="date" class="form-control">
                            <option>Select Zip Code</option>
                            <option>Zip Code 1</option>
                            <option>Zip Code 2</option>
                            <option>Zip Code 3</option>
                        </select>
                    </div>
                    <div class="col-lg-6 form-group">
                        <label class="control-label">{{ __('translation.Mobile Number') }} <span>*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label">{{ __('translation.Instagram') }} </label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label class="control-label">{{ __('translation.How Long have been Practicing ArtWork?') }}</label>
                    <input type="number" class="form-control">
                </div>

                <div class="form-group">
                    <label class="control-label">{{ __('translation.How Many ArtWorks Are Sold In Last 12 Months?') }}</label>
                    <input type="number" class="form-control">
                </div>
                <div class="clearfix"></div>
                <div class="padding-top-x50"></div>
            </div>
        </form>
        <div class="col-sm-6 col-sm-offset-3">
            <div class="pull-right">
                <div class="ws-forgot-pass" style="margin-bottom: 10px;">
                    <a href="#x">{{ __('translation.Forget Your Password')}}</a>
                </div>
            </div>
            <!-- Button -->
            <a class="btn ws-btn-fullwidth">{{ __('translation.Sign In') }}</a>
            <br><br>
            <!-- Facebook Button -->
            <a class="btn ws-btn-facebook">{{ __('translation.Sign in with Facebook') }}</a>
            <!-- End Login Form -->
            <div class="ws-register-link">
                <a href="{{ route('web-login')}}" data-toggle="">{{ __('translation.Click here to Login your account.') }} </a>
            </div>
        </div>
    </div>
</div>
@endsection