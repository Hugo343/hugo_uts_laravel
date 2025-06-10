@extends('layouts.app')

@section('title', 'Hosting Shared')

@section('content')
        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="text-white mb-3">Shared Web Hosting</h2>
                            <p class="text-white">Extremely fast, secure and user-friendly website hosting for your successful online projects</p>
                            <ol class="breadcrumb d-flex justify-content-center mt-3">
                                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="#">Web Hosting</a></li>
                                <li class="breadcrumb-item text-white active">Shared Hosting</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** Price Plan Area Start ***** -->
        <section id="pricing" class="section inner-price-plan price-plan-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Price Plan -->
                        <div class="single-price-plan">
                            <!-- Price Top -->
                            <div class="price-top text-center px-3 px-lg-0">
                                <h3 class="pb-2">Single Shared Hosting</h3>
                                <p>Ideal solution for beginners</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center my-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$9.99<span class="badge badge-pill badge-warning ml-2">Save 90%</span></p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">0.99</span>
                                    <span class="plan-type fw-7">/mo</span>
                                </div>
                            </div>
                            <!-- Plan Features -->
                            <ul class="plan-features pb-3">
                                <li>1 Website</li>
                                <li>1 Email</li>
                                <li>Limited Bandwidth (100 GB)</li>
                                <li>Free SSL Certificate</li>
                                <li>1X Allocated Resources</li>
                            </ul>
                            <div class="plan-select">
                                <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Price Plan -->
                        <div class="single-price-plan featured">
                            <!-- Featured Box -->
                            <div class="featured-box bg-indigo text-center p-3">
                                <h3 class="text-white text-uppercase">Most Popular</h3>
                            </div>
                            <!-- Price Top -->
                            <div class="price-top text-center px-3 px-lg-0">
                                <h3 class="pb-2">Premium Shared Hosting</h3>
                                <p>Perfect package for personal websites</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center mt-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$10.99<span class="badge badge-pill badge-warning ml-2">Save 75%</span></p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">2.69</span>
                                    <span class="plan-type fw-7">/mo</span>
                                </div>
                            </div>
                            <!-- Plan Features -->
                            <ul class="plan-features pb-3">
                                <li><span class="plan-list text-underlined" data-tippy-content="We don’t set limits on the number of websites you may use, as long as your usage complies with our Terms of Service. Basically, if you have a regular personal or a small business account, your number of websites won’t be limited in any way."><strong>Unlimited</strong></span> Websites</li>
                                <li><span class="plan-list text-underlined" data-tippy-content="Owners with more than 15GB used email space may experience decreases in performance."><strong>Unlimited</strong></span> Email Accounts</li>
                                <li><span class="plan-list text-underlined" data-tippy-content="We don’t set limits on the amount of bandwidth you may use, as long as your usage complies with our Terms of Service. Basically, if you have a regular personal or a small business website, your bandwidth won’t be limited in any way."><strong>Unlimited</strong></span> Bandwidth</li>
                                <li>WordPress Acceleration</li>
                                <li>Free SSL Certificate</li>
                                <li>Daily Backups</li>
                                <li>4X Allocated Resources</li>
                            </ul>
                            <div class="plan-select">
                                <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Price Plan -->
                        <div class="single-price-plan">
                            <!-- Price Top -->
                            <div class="price-top text-center px-3 px-lg-0">
                                <h3 class="pb-2">Cloud Hosting</h3>
                                <p>Optimized for small businesses</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center my-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$12.99<span class="badge badge-pill badge-warning ml-2">Save 80%</span></p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">3.89</span>
                                    <span class="plan-type fw-7">/mo</span>
                                </div>
                            </div>
                            <!-- Plan Features -->
                            <ul class="plan-features pb-3">
                                <li><span class="plan-list text-underlined" data-tippy-content="We don’t set limits on the number of websites you may use, as long as your usage complies with our Terms of Service. Basically, if you have a regular personal or a small business account, your number of websites won’t be limited in any way."><strong>Unlimited</strong></span> Websites</li>
                                <li><span class="plan-list text-underlined" data-tippy-content="Owners with more than 15GB used email space may experience decreases in performance."><strong>Unlimited</strong></span> Email Accounts</li>
                                <li><span class="plan-list text-underlined" data-tippy-content="We don’t set limits on the amount of bandwidth you may use, as long as your usage complies with our Terms of Service. Basically, if you have a regular personal or a small business website, your bandwidth won’t be limited in any way."><strong>Unlimited</strong></span> Bandwidth</li>
                                <li>WordPress Acceleration</li>
                                <li>Free SSL Certificate</li>
                                <li>Daily Backups</li>
                                <li>48X Allocated Resources</li>
                            </ul>
                            <div class="plan-select">
                                <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Price Plan Area End ***** -->

        <!-- ***** Service Area End ***** -->
        <section id="service" class="section service-area bg-grey ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Hosting Features</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Service -->
                        <div class="single-service p-4">
                            <img class="avatar-md" src="assets/img/icons/featured/1.png" alt="">
                            <h3 class="my-3">Ultra-fast Sites</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class="service-btn mt-3" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Service -->
                        <div class="single-service p-4">
                            <img class="avatar-md" src="assets/img/icons/featured/2.png" alt="">
                            <h3 class="my-3">Top-notch Security</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class="service-btn mt-3" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Service -->
                        <div class="single-service p-4">
                            <img class="avatar-md" src="assets/img/icons/featured/3.png" alt="">
                            <h3 class="my-3">1-Click Install</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class="service-btn mt-3" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Service -->
                        <div class="single-service p-4">
                            <img class="avatar-md" src="assets/img/icons/featured/4.png" alt="">
                            <h3 class="my-3">Easy Site Management</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class="service-btn mt-3" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Service -->
                        <div class="single-service p-4">
                            <img class="avatar-md" src="assets/img/icons/featured/5.png" alt="">
                            <h3 class="my-3">Domain Management</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class="service-btn mt-3" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Service -->
                        <div class="single-service p-4">
                            <img class="avatar-md" src="assets/img/icons/featured/6.png" alt="">
                            <h3 class="my-3">Reliable Email Service</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class="service-btn mt-3" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Service Area End ***** -->

        <!-- ***** Review Area Start ***** -->
        <section id="review" class="section review-area ptb_100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="section-heading mb-3">
                            <h2 class="mb-3">Trusted by Clients and Industry Experts Alike</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae obcaecati vitae ex commodi illo, neque natus sit reprehenderit. Itaque, repellat. Libero iste distinctio vero, minus saepe impedit quibusdam dolorem! Tempora cumque earum quae nobis, pariatur enim doloribus ducimus voluptatum qui dolorem cum, dolores at rerum ipsa molestiae culpa illo recusandae.</p>
                        </div>
                        <a href="#" class="btn btn-lg mt-4">See All Reviews</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <!-- Client Reviews -->
                        <div class="client-reviews owl-carousel pt-5 pt-lg-0">
                            <!-- Single Review -->
                            <div class="single-review">
                                <!-- Review Content -->
                                <div class="review-content">
                                    <!-- Review Text -->
                                    <div class="review-text">
                                        <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam est modi amet error earum aperiam, fuga labore facere rem ab nemo possimus cum excepturi expedita. Culpa rerum, quaerat qui non.</p>
                                    </div>
                                    <!-- Quotation Icon -->
                                    <div class="quot-icon">
                                        <img class="avatar-sm" src="assets/img/quote.png" alt="">
                                    </div>
                                </div>
                                <!-- Reviewer -->
                                <div class="reviewer media mt-3">
                                    <!-- Reviewer Thumb -->
                                    <div class="reviewer-thumb">
                                        <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-1.png" alt="">
                                    </div>
                                    <!-- Reviewer Media -->
                                    <div class="reviewer-meta media-body align-self-center ml-4">
                                        <h5 class="reviewer-name color-primary mb-2">Junaid Hasan</h5>
                                        <h6 class="text-secondary fw-6">CEO, Themeland</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Review -->
                            <div class="single-review">
                                <!-- Review Content -->
                                <div class="review-content">
                                    <!-- Review Text -->
                                    <div class="review-text">
                                        <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam est modi amet error earum aperiam, fuga labore facere rem ab nemo possimus cum excepturi expedita. Culpa rerum, quaerat qui non.</p>
                                    </div>
                                    <!-- Quotation Icon -->
                                    <div class="quot-icon">
                                        <img class="avatar-sm" src="assets/img/quote.png" alt="">
                                    </div>
                                </div>
                                <!-- Reviewer -->
                                <div class="reviewer media mt-3">
                                    <!-- Reviewer Thumb -->
                                    <div class="reviewer-thumb">
                                        <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-2.png" alt="">
                                    </div>
                                    <!-- Reviewer Media -->
                                    <div class="reviewer-meta media-body align-self-center ml-4">
                                        <h5 class="reviewer-name color-primary mb-2">Yasmin Akter</h5>
                                        <h6 class="text-secondary fw-6">Founder, Themeland</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Review -->
                            <div class="single-review">
                                <!-- Review Content -->
                                <div class="review-content">
                                    <!-- Review Text -->
                                    <div class="review-text">
                                        <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam est modi amet error earum aperiam, fuga labore facere rem ab nemo possimus cum excepturi expedita. Culpa rerum, quaerat qui non.</p>
                                    </div>
                                    <!-- Quotation Icon -->
                                    <div class="quot-icon">
                                        <img class="avatar-sm" src="assets/img/quote.png" alt="">
                                    </div>
                                </div>
                                <!-- Reviewer -->
                                <div class="reviewer media mt-3">
                                    <!-- Reviewer Thumb -->
                                    <div class="reviewer-thumb">
                                        <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-3.png" alt="">
                                    </div>
                                    <!-- Reviewer Media -->
                                    <div class="reviewer-meta media-body align-self-center ml-4">
                                        <h5 class="reviewer-name color-primary mb-2">Md. Arham</h5>
                                        <h6 class="text-secondary fw-6">CEO, Themeland</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Review -->
                            <div class="single-review">
                                <!-- Review Content -->
                                <div class="review-content">
                                    <!-- Review Text -->
                                    <div class="review-text">
                                        <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam est modi amet error earum aperiam, fuga labore facere rem ab nemo possimus cum excepturi expedita. Culpa rerum, quaerat qui non.</p>
                                    </div>
                                    <!-- Quotation Icon -->
                                    <div class="quot-icon">
                                        <img class="avatar-sm" src="assets/img/quote.png" alt="">
                                    </div>
                                </div>
                                <!-- Reviewer -->
                                <div class="reviewer media mt-3">
                                    <!-- Reviewer Thumb -->
                                    <div class="reviewer-thumb">
                                        <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-3.png" alt="">
                                    </div>
                                    <!-- Reviewer Media -->
                                    <div class="reviewer-meta media-body align-self-center ml-4">
                                        <h5 class="reviewer-name color-primary mb-2">Md. Arham</h5>
                                        <h6 class="text-secondary fw-6">CEO, Themeland</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Review Area End ***** -->

        <!-- ***** FAQ Area Start ***** -->
        <section class="section faq-area bg-grey ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Frequently Asked Questions?</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <!-- FAQ Content -->
                        <div class="faq-content">
                            <!-- sApp Accordion -->
                            <div class="accordion" id="sApp-accordion">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-9">
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-3" type="button" data-toggle="collapse" data-target="#collapseOne">
                                                        What is Shared Hosting?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    Shared Hosting is one of the most popular hosting packages because it provides an affordable way to get your website online. Shared Hosting works by allowing multiple users to share space on a single server maintained by the hosting provider (Hosting). A Shared Hosting package can include multiple offers or combinations of features as offered by their hosting provider. Hosting Shared Hosting is perfect for blogging, hobbies and small business websites.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                                        What are Shared Hosting Benifits?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    When you sign up for a Shared Hosting package, your biggest benefit is purchasing hosting at an affordable price. In addition to various features, our shared hosting platform is managed which means users don’t have to worry about server management and platform patches. When you purchase a Hosting Shared Hosting package it also includes an SSL certificate, domain name and more!
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseThree">
                                                        What are the main differences between Shared Hosting and a VPS?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    A virtual private server (VPS) is a little bit like a cross between shared hosting and a dedicated server. It’s not quite the best of both worlds, but it is a good compromise and it can help you to keep costs down. Some people compare shared hosting to living in an apartment complex and VPS hosting to living in a condo.<br>
                                                    With shared hosting, you’re sharing a server and that server’s resources with a bunch of other websites. With a VPS, you’re still sharing some resources because that’s determined by the hardware, but the software itself is set up in such a way that one machine acts like multiple different servers, providing a different virtual server for every user. For webmasters, using a VPS means that they get the administrative power of a dedicated hosting setup, including the ability to customize their server to suit them.<br>
                                                    If you think VPS will be more suitable for you check out our cheap VPS hosting plans <a class="text-underlined" href="#">here</a>.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseFour">
                                                        What kind of Hosting do I need?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    That depends - what kind of website do you have? And what’s your budget?As a general rule, shared hosting is the best place to start, and Hosting’s hosting is suitable for almost any kind of website. Our hosting helps you to keep the costs down during the early days of your website while allowing you to pay only for the resources that you need. If your website starts to take off, you can easily upgrade to higher tier plan and pick up some extra resources.<br>
                                                    Ultimately, every website is different. If you’re not sure, why not get in touch with our team so we can chat it through with you and make a personalized suggestion based on your needs?
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseFive">
                                                        Can I buy Hosting without a Domain name?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFive" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    Yes, you can. If you want to, you can purchase domain names from elsewhere and point it to your server with Hosting. If you want to keep your domain name and your website hosting together under a single provider — which we’d recommend for convenience and easier troubleshooting — then you can also transfer an existing domain name to Hosting. Just get in touch and let us know!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** FAQ Area End ***** -->

        <!--====== Call To Action Area Start ======-->
        <section class="section cta-area bg-indigo ptb_100">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center m-0">
                            <h2 class="text-white">24/7/365 At your Service</h2>
                            <p class="text-white d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="text-white d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                            <div class="button-group mt-3">
                                <h3 class="d-inline-block mx-3 p-2"><a class="text-white" href="#"><i class="fas fa-phone-alt mr-2"></i>+888-012345679</a></h3>
                                <h3 class="d-inline-block mx-3 p-2"><a class="text-white" href="#"><i class="far fa-comment mr-2"></i>Live Chat</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Call To Action Area End ======-->

        <!--====== Footer Area Start ======-->
        <footer class="section footer-area bg-dark">
            <!-- Footer Top -->
            <div class="footer-top ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- Footer Items -->
                                    <div class="footer-items">
                                        <!-- Footer Title -->
                                        <h3 class="footer-title text-uppercase mb-2">Products</h3>
                                        <ul>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Shared Hosting</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">WordPress Hosting</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">VPS Hosting</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Dedicated Hosting</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Reseller Hosting</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- Footer Items -->
                                    <div class="footer-items">
                                        <!-- Footer Title -->
                                        <h3 class="footer-title text-uppercase text-white mb-2">Programs</h3>
                                        <ul>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">WordPress</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Affiliates</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Marketing Services</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">WordPress Guide</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Professional Email</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Register Domains</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Transfer Domains</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Manage Domains</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- Footer Items -->
                                    <div class="footer-items">
                                        <!-- Footer Title -->
                                        <h3 class="footer-title text-uppercase mb-2">Company</h3>
                                        <ul>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">About</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Careers</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Contact</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Terns of Service</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Privacy</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Blog</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Sitemap</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- Footer Items -->
                                    <div class="footer-items">
                                        <!-- Footer Title -->
                                        <h3 class="footer-title text-uppercase mb-2">Support</h3>
                                        <ul>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Live Chat</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Knowledge Base</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Customer Portal</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Support Portal</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Video Tutorials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items pt-4 pt-lg-0">
                                <!-- Footer Title -->
                                <h3 class="footer-title text-uppercase mb-2">Follow Us</h3>
                                <p class="text-white-50 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quae.</p>
                                <!-- Social Icons -->
                                <ul class="social-icons list-inline pt-2">
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left text-white-50">&copy; 2021 Hostbit All rights reserved.</div>
                                <!-- Copyright Right -->
                                <div class="copyright-right text-white-50">Made with <i class="fas fa-heart"></i> By <a href="#">Themeland</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->

        <!--====== Modal Search Area Start ======-->
        <div id="search" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Search <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 align-self-center">
                                <div class="row">
                                    <div class="col-12 pb-3">
                                        <h2 class="search-title mb-3">What are you looking for?</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group">
                                        <input type="text" class="form-control" placeholder="Enter your keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group align-self-center">
                                        <button class="btn btn-bordered mt-3">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Search Area End ======-->

        <!--====== Modal Responsive Menu Area Start ======-->
        <div id="menu" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Responsive Menu Area End ======-->
    </div>
@endsection
