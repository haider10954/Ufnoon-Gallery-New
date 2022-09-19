@extends('Web-Frontend.Layout.layout2')

@section('title','Contact Us')


@section('content')

<!-- Page Content -->
<div class="container ws-page-container">
    <div class="row">
        <div class="ws-contact-page">
            <!-- Contact Form -->
            <div class="col-sm-12">
                <form class="form-horizontal ws-contact-form " style="width: 50%;margin: auto;">
                    <!-- Name -->
                    <div class="form-group">
                        <label class="control-label">{{ __('translation.Name') }} <span>*</span></label>
                        <input type="text" class="form-control">
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label class="control-label">{{ __('translation.Email') }} <span>*</span></label>
                        <input type="email" class="form-control">
                    </div>

                    <!-- Number -->
                    <div class="form-group">
                        <label class="control-label">{{ __('translation.Mobile Number') }}<span>*</span></label>
                        <input type="text" class="form-control">
                    </div>

                    <!-- Subject -->
                    <div class="form-group">
                        <label class="control-label">{{ __('translation.Subject')}}<span>*</span></label>
                        <input type="text" class="form-control">
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                        <label class="control-label">{{ __('translation.Message') }} <span>*</span></label>
                        <textarea class="form-control" rows="7"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <a href="#x" class="btn ws-big-btn">{{ __('translation.Submit') }}</a>
                    </div>
                </form>
            </div>

            <!-- Office Location -->
            <div class="col-sm-12">
                <div class="ws-contact-offices">

                    <!-- Title -->
                    <h2>{{ __('translation.Office-Location')}}</h2>
                    <div class="ws-separator"></div>

                    <div class="row">

                        <!-- City -->
                        <div class="col-sm-12 text-center">
                            <h3>{{ __('translation.location')}}</h3>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Office Location -->

        </div>
    </div>
</div>
<!-- End Page Content -->


@endsection