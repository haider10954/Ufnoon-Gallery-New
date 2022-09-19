    <!-- Footer Start -->
    <footer class="ws-footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-sm-6 ws-footer-col">
                    <h3>{{ __('translation.About Us') }}</h3>
                    <div class="ws-footer-separator"></div>
                    <div class="ws-footer-about {{ (\Session::get('direction') == 'rtl' )? 'footer-rtl' : '' }}">
                        <p>
                            {{ __('translation.The ultimate destination for artists to meet unique collectors') }}
                        </p>
                    </div>
                </div>

                <!-- Support Links -->
                <div class="col-sm-2 ws-footer-col">
                    <h3>{{ __('translation.Company') }}</h3>
                    <div class="ws-footer-separator"></div>
                    <ul class="{{ (\Session::get('direction') == 'rtl' )? 'footer-rtl' : '' }}">
                        <li><a href="{{ route('web-terms_and_condition') }}">{{ __('translation.Terms and conditions') }}</a></li>
                        <li><a href="{{ route('web-our_story') }}">{{ __('translation.Our Story') }}</a></li>
                        <li><a href="{{ route('web-values') }}">{{ __('translation.Values and services') }}</a></li>
                        <li><a href="{{ route('web-faqs')}}">{{ __('translation.Faqs')}}</a></li>
                        <li><a href="{{ route('web-contact-us')}}">{{ __('translation.Contact') }}</a></li>
                    </ul>
                </div>

                <!-- Social Links -->
                <div class="col-sm-2 ws-footer-col">
                    <h3>{{ __('translation.Artist') }}</h3>
                    <div class="ws-footer-separator"></div>
                    <ul class="ws-footer-social {{ (\Session::get('direction') == 'rtl' )? 'footer-rtl' : '' }}">
                        <li>
                            <a href="{{ route('web-artist-register')}}" >{{ __('translation.Artist Join') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('web-guidelines') }}">{{ __('translation.Guidelines') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('web-advantages') }}">{{ __('translation.Advantages') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Footer Bar Start -->
    <div class="ws-footer-bar">
        <div class="container">
            <!-- Copyright -->
            <div class="pull-left">
                <p>&copy; {{ __('translation.Copyright') }}.</p>
            </div>

            <!-- Payments -->
            <div class="pull-right">
                <ul class="ws-footer-payments">
                    <li><i class="fa fa-cc-visa fa-lg"></i></li>
                    <li><i class="fa fa-cc-paypal fa-lg"></i></li>
                    <li><i class="fa fa-cc-mastercard fa-lg"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer Bar End -->