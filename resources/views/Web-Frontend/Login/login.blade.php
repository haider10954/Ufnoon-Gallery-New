@extends('Web-Frontend.Layout.layout')

@section('title','Login Page')

@section('content')
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
            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-start="1000" data-responsive_offset="on" data-responsive="off" style="z-index: 8;"><a class="btn ws-big-btn" href="shop.html">View Collention</a>
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
            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-start="1000" data-responsive_offset="on" data-responsive="off" style="z-index: 8;"><a class="btn ws-big-btn" href="shop.html">View Collention</a>
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
            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-start="1000" data-responsive_offset="on" data-responsive="off" style="z-index: 8;"><a class="btn ws-big-btn" href="shop.html">View Collention</a>
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
            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-start="1000" data-responsive_offset="on" data-responsive="off" style="z-index: 8;"><a class="btn ws-big-btn" href="shop.html">View Collention</a>
            </div>

        </li>
    </ul>
</div>

<!-- Page Content -->
<div class="container ws-page-container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            <!-- Login Form -->
            <form class="ws-login-form">
                <!-- Email -->
                <div class="form-group">
                    <label class="control-label">Username or Email Adress <span>*</span></label>
                    <input type="email" class="form-control">
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label class="control-label">Password <span>*</span></label>
                    <input type="password" class="form-control">
                </div>

                <!-- Checkbox -->
                <div class="pull-left">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Stay signed in
                        </label>
                    </div>
                </div>

                <div class="pull-right">
                    <div class="ws-forgot-pass">
                        <a href="#x">Forgot your password ?</a>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="padding-top-x50"></div>

                <!-- Button -->
                <a class="btn ws-btn-fullwidth">Sign in</a>
                <br><br>
                <!-- Facebook Button -->
                <a class="btn ws-btn-facebook">Sign in with Facebook</a>
            </form>
            <!-- End Login Form -->

            <!-- Register Form-->
            <div class="ws-register-form">

                <!-- Link -->
                <div class="ws-register-link">
                    <a href="#ws-register-modal" data-toggle="modal">Click here to sign up for an account. </a>
                </div>

                <!-- Register Modal -->
                <div class="modal fade" id="ws-register-modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <a class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                            </div>

                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">

                                    <div class="modal-body">
                                        <!-- Register Form -->
                                        <form class="ws-register-form">

                                            <h3>Create An Account</h3>
                                            <div class="ws-separator"></div>
                                            <!-- Name -->
                                            <div class="form-group">
                                                <label class="control-label">Name <span>*</span></label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <!-- Email -->
                                            <div class="form-group">
                                                <label class="control-label">Email Adress <span>*</span></label>
                                                <input type="email" class="form-control">
                                            </div>

                                            <!-- Password -->
                                            <div class="form-group">
                                                <label class="control-label">Password <span>*</span></label>
                                                <input type="password" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">I accept the <a href="faq.html">Terms of Service</a>
                                                    </label>
                                                </div>
                                            </div>

                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <!-- Button -->
                                        <a class="btn ws-btn-fullwidth">Create Account</a>
                                        <br><br>
                                        <!-- Facebook Button -->
                                        <a class="btn ws-btn-facebook">Sign in with Facebook</a>
                                        <!-- Link -->
                                        <div class="ws-register-link">
                                            <a href="#ws-register-modal" data-toggle="modal">Already have an account? Sign in here.</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Register Modal -->
            </div>
            <!-- End Register -->

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