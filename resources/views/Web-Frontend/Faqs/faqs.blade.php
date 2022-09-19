@extends('Web-Frontend.Layout.layout')

@section('title','FAQS Page')

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
<!-- End Slider FullScreen -->

<div class="container ws-page-container">
    <div class="row">
        <div class="ws-faq-page">
            <div class="col-md-8 col-md-offset-2">

                <!-- Tab Navabar -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Customers" aria-controls="Customers" role="tab" data-toggle="tab">Customers</a></li>
                    <li role="presentation"><a href="#Artist" aria-controls="Artist" role="tab" data-toggle="tab">Artist</a></li>

                </ul>

                <!-- Tab Panes -->
                <div class="tab-content">

                    <!-- Customer Panel -->
                    <div role="tabpanel" class="tab-pane fade in active ws-faq-pane-holder" id="Customers">

                        <div class="text-center">
                            <h3>Customers</h3>
                            <div class="ws-separator"></div>
                        </div>

                        <!-- Accordion Panel -->
                        <div class="ws-accordion">

                            <!-- Group -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle active" data-toggle="collapse" href="#collapseOne">
                                        If I want to purchase a work of art but it is no longer available on the site, can I request the implementation of similar work?
                                    </a>
                                </div>

                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p>Yes, sometimes we can, in the event that you want to implement a work that is not available, the Ufnoon team can communicate with the artist directly to see the possibility of implementing an artwork on demand, and you will be answered about that as soon as possible.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Group -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapseTwo">
                                        Does Ufnoon have appropriate frames for the original or printed artwork?
                                    </a>
                                </div>

                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>Yes, we have a wide choice of frames to suit all printed artwork and in sizes that suit the artwork. However, as far as original works are concerned, it must be taken into account that some artworks are designed and framed by the artist.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Group -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapseThree">
                                        How is the tire cost calculated?
                                    </a>
                                </div>

                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>When the work is designed with a frame by the artist, the price of the artwork is inclusive of the frame, but if the work is without a frame, the frame is charged at an additional cost</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Group -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapseFour">
                                        What are the acceptable payment methods in Ufnoon?
                                    </a>
                                </div>

                                <div id="collapseFour" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>Once payment is confirmed, the artwork is reserved for you! <br />

                                            You will then receive an invoice for the work and the expected date of delivery. Delivery takes about (7-10) days.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Accordion Panel -->
                    </div>
                    <!-- End Customer Panel -->

                    <!-- Artist Panel -->
                    <div role="tabpanel" class="tab-pane fade ws-faq-pane-holder" id="Artist">

                        <div class="text-center">
                            <h3>Artist</h3>
                            <div class="ws-separator"></div>
                        </div>

                        <!-- Accordion Panel -->
                        <div role="tablist" aria-multiselectable="true" class="ws-accordion">
                            <div class="accordion">

                                <!-- Group -->
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseFive">
                                            How can I put my artwork up for sale in Ufnoon?
                                        </a>
                                    </div>

                                    <div id="collapseFive" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <p>All artists participating in the Ufnoon Gallery platform can display their works for sale to a large segment of customers through our website, which guarantees you a wider spread of your name and business.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">

                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseSix">
                                            How can I subscribe to the Ufnoon platform?
                                        </a>
                                    </div>

                                    <div id="collapseSix" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>You can view the benefits of a subscription and how it works in Ufnoon via the following link. <br>

                                                https://ufnoongallery.com/apply-now.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">

                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseSeven">
                                            Are artwork available as prints?
                                        </a>
                                    </div>

                                    <div id="collapseSeven" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>The printing service is available to work upon the artist's desire, with specifying the desired number of copies to be printed, and all works displayed on Ufnoon.com are 100% original works, and are not reproduced or published in other editions.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">

                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseEight">
                                            What is meant by (edition / edition) in the artwork?
                                        </a>
                                    </div>

                                    <div id="collapseEight" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>It is found edition in works containing several copies as well as in photography. <br>
                                                edition represents the specified number of copies made by the artist prior to the first sale, and this number will not change.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Accordion Panel -->
                    </div>
                    <!-- Account Panel -->

                    <!-- Buying Panel -->
                    <div role="tabpanel" class="tab-pane fade ws-faq-pane-holder" id="buying">

                        <div class="text-center">
                            <h3>Buying</h3>
                            <div class="ws-separator"></div>
                            <p>Welcome to Artday. Browsing on Artday is free and does not require an account.</p>
                        </div>

                        <!-- Accordion Panel -->
                        <div role="tablist" aria-multiselectable="true" class="ws-accordion">
                            <div class="accordion">

                                <!-- Group -->
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseNine">
                                            What forms of payment does Artday accept?
                                        </a>
                                    </div>

                                    <div id="collapseNine" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <p>We are accepting payment with Visa, Mastercard &amp; American Express. All credit cards used for payment must have a valid billing address.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseTen">
                                            Are my payments secure?
                                        </a>
                                    </div>

                                    <div id="collapseTen" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>All orders are encrypted with Secure Sockets Layer (SSL) technology on both your end and ours. SSL encrypts all of your personal information including credit card number, name, and address, so that it cannot be read as the information travels over the Internet. In order for SSL to work, you must use an SSL-enabled browser.<br><br>

                                                For your own safety we do not save any payment information. Payments are made directly through Stripe—certified to PCI Service Provider Level 1, the most stringent level of certification, so we can guarantee that important information stays confidential and private.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseEleven">
                                            Buying on Artday
                                        </a>
                                    </div>

                                    <div id="collapseEleven" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>When you buy something on Artday, the money goes into a neutral escrow account so the Seller does not get paid until you have received your product and had time to review it.<br><br>

                                                The funds are not released until 48 hours after Artday has gotten confirmation that you have received your item. So you can be confident that you will get what you bought and know that it is what it is advertised to be.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseTwelve">
                                            How do I check the status of an order?
                                        </a>
                                    </div>

                                    <div id="collapseTwelve" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>In “My orders” you can see the progress of all of them. Once delivered, you will receive more information on how to track the package and when it will arrive.<br><br>

                                                To check the status of your sale, hover over your profile icon in the top right corner of the screen. Click it and choose ‘Orders’ in your dashboard, which is a page of all your active and previous orders.<br><br>

                                                If on the right hand side of the listing title the icon is Orange, it means that the item has not shipped yet. You will receive a shipping confirmation email when the tracking number has been put into the system and your order receipt with your dashboard will provide the info for you to track the shipment.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Accordion Panel -->
                    </div>
                    <!-- End Buying Panel -->

                    <!-- Shipping Panel -->
                    <div role="tabpanel" class="tab-pane fade ws-faq-pane-holder" id="shipping">

                        <div class="text-center">
                            <h3>Shipping &amp; Return</h3>
                            <div class="ws-separator"></div>
                            <p>Welcome to Artday. Browsing on Artday is free and does not require an account.</p>
                        </div>

                        <!-- Accordion Panel -->
                        <div role="tablist" aria-multiselectable="true" class="ws-accordion">
                            <div class="accordion">

                                <!-- Group -->
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseThirteen">
                                            What is the shipping return?
                                        </a>
                                    </div>

                                    <div id="collapseThirteen" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <p>The products are delivered directly from the creators to your doorstep. The Loppist doesn’t handle any direct shipping at this moment, but we pre-screen and only carefully select creators who are deemed reliable / trustworthy and have previous experience shipping their creations.<br><br>

                                                We work with our creators to use recommended and trusted shipping carriers for our featured sellers, but this may vary if the seller has a trusted / better alternative he/she is comfortable with.<br><br>

                                                In case of any concerns, please reach out to contact us.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseFourteen">
                                            Which countries do we ship to?
                                        </a>
                                    </div>

                                    <div id="collapseFourteen" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>This depends on the creator and the nature of the products. We try to collaborate with creators who ship worldwide but some products might not be available to ship to your country. The countries that is available for shipping is clearly indicated in the product or check out page.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseFifteen">
                                            How much will the delivery cost me?
                                        </a>
                                    </div>

                                    <div id="collapseFifteen" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>This is subjective depending on where the package is sent from and its destination. Also the size of the product and delivery type (standard or express) will affect the price. Delivery costs are clearly stated on the checkout page while buying.<br><br>

                                                *Some countries may charge customs and duties for your parcel. You are responsible for these customs and duties charges.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group -->
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseSixteen">
                                            How long does it take normally for an order to arrive?
                                        </a>
                                    </div>

                                    <div id="collapseSixteen" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <p>The delivery time depends on the distance between you and the creator. Our creators offer regional to worldwide shipping depending on the product. The expected delivery time is clearly stated on the product page, and on the checkout page.<br><br>

                                                The seller can select 4, 7,14 or 21 days for shipping and handling times. It will vary depending on the item as handcrafted goods may take more time to create and ship.<br><br>

                                                See the terms and conditions page for more specific information regarding delivery times.<br><br>

                                                Be sure to check out shipping company’s estimated delivery time when they send you the tracking number for your order.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion Panel -->
                    </div>
                    <!-- Shipping Panel -->

                    <!-- Privacy Policy Panel Panel -->
                    <div role="tabpanel" class="tab-pane fade ws-faq-pane-holder" id="privacy">

                        <div class="text-center">
                            <h3>Privacy &amp; Policy</h3>
                            <div class="ws-separator"></div>
                            <p>Welcome to Artday. Browsing on Artday is free and does not require an account.</p>
                        </div>

                        <!-- Accordion Panel -->
                        <div class="ws-accordion">

                            <!-- Group -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle active" data-toggle="collapse" href="#collapseSeventeen">
                                        Information Collected or Received
                                    </a>
                                </div>

                                <div id="collapseSeventeen" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p>Artday may collect personally identifiable information, such as your name. Artday may also collect anonymous demographic information, which is not unique to you, such as your age and gender. We may gather additional personal or non-personal information in the future.</p>
                                        <br>
                                        <p>Information about your computer hardware and software may be automatically collected by Artday. This information can include: your IP address browser type, domain names, access times and referring website addresses. This information is used for the operation of the service, to maintain quality of the service, and to provide general statistics regarding use of the Artday website.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Group -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapseEighteen">
                                        Collection and use of personal information
                                    </a>
                                </div>

                                <div id="collapseEighteen" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>Artday collects and uses your personal information to operate its website(s) and deliver the services you have requested.</p>
                                        <br>
                                        <p>When you place an order on the Site, you must provide your first and last name, a valid email address, phone number, billing address, shipping address, and credit card number. We will use this information to fulfill the order you place and to communicate with you about it.</p>
                                        <br>
                                        <p>Artday uses your information for four purposes: (1) to fulfill the orders you place on the Site, (2) to answer any customer service inquiries that you may have, (3) to contact you about special offers, Artday news and new products and (4) to understand the shopping habits of our customers to better serve them in the future.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Group -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapseNineteen">
                                        Use of Cookies
                                    </a>
                                </div>

                                <div id="collapseNineteen" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>The Artday uses cookie to improve and personalize your experience on our site by remembering you or your preferences during your visit(s) to the site. </p>
                                        <br>
                                        <p>If a Site doesn’t use cookies, it will think you are a new visitor every time you move to a new page on the Site. Our Site uses cookies to remember things like your preferences, shopping cart or to remember who you are on return visits.</p>
                                        <br>
                                        <p>You have the ability to accept or decline cookies. Most Web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to fully experience the interactive features of the Artday services or websites you visit.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Group -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#collapseTwenty">
                                        Children Under Thirteen
                                    </a>
                                </div>

                                <div id="collapseTwenty" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>Artday does not knowingly collect personally identifiable information from children under the age of thirteen. If you are under the age of thirteen, you must ask your parent or guardian for permission to use this website.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Accordion Panel -->
                    </div>
                    <!-- End Privacy Policy Panel -->

                </div>
                <!-- End Tab Panes -->

            </div>
        </div>
    </div>
</div>
<!-- End Page Content -->

<!-- Subscribe Section -->
<section class="ws-subscribe-section subscribe">
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