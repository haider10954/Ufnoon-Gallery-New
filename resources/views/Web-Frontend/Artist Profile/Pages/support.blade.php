@extends('Web-Frontend\Layout\layout3')

@section('title','Artist Support')


@section('content')
<div class="container ws-page-container">
    <div class="row">
        <div class="ws-faq-page">
            <div class="col-md-8 col-md-offset-2">

                <!-- Tab Navabar -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active" role="presentation"><a href="#Artist" aria-controls="Artist" role="tab" data-toggle="tab">{{ __('translation.Artist')}}</a></li>
                </ul>

                <!-- Tab Panes -->
                <div class="tab-content">

                    <!-- Artist Panel -->
                    <div role="tabpanel" class="tab-pane fade in active ws-faq-pane-holder" id="Artist">

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
                                            Why do We Use It?
                                        </a>
                                    </div>

                                    <div id="collapseFive" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">

                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseSix">
                                            What is Lorem Ipsum
                                        </a>
                                    </div>

                                    <div id="collapseSix" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>Long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">

                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseSeven">
                                            Where does it come from
                                        </a>
                                    </div>

                                    <div id="collapseSeven" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">

                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseEight">
                                            Where can I get some
                                        </a>
                                    </div>

                                    <div id="collapseEight" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                
                                <!-- Group -->
                                <div class="accordion-group">

                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseEight">
                                        تجربة
                                        </a>
                                    </div>

                                    <div id="collapseEight" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>تجربة
                                            </p>
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


@endsection