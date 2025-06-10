@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="main overflow-hidden">
        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-7">
                        <div class="welcome-intro">
                            <h1 class="text-white mb-2">Get the #1 Web Hosting</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident ipsa dicta doloribus, mollitia pariatur. Illum excepturi vel hic quasi accusamus.</p>
                            <!-- Content List -->
                            <ul class="content-list mt-3 mb-2">
                                <!-- Single Content List -->
                                <li class="single-content-list media text-white py-1">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span><b>FREE</b> Domain Name for 1st Year</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media text-white py-1">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span><b>FREE SSL</b> Certificate Included</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media text-white py-1">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>1-Click WordPress Install</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media text-white py-1">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>24/7 Support</span>
                                    </div>
                                </li>
                            </ul>
                            <span class="d-block font-italic text-white">Starting at $0.99/month*</span>
                            <a href="#" class="btn btn-lg mt-3">Get Started</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <!-- Welcome Thumb -->
                        <div class="welcome-thumb-wrapper">
                            <span class="welcome-thumb-1">
                                <img class="welcome-animation d-block" src="assets/img/welcome/thumb_1.png" alt="">
                            </span>
                            <span class="welcome-thumb-2">
                                <img class="welcome-animation d-block" src="assets/img/welcome/thumb_2.png" alt="">
                            </span>
                            <span class="welcome-thumb-3">
                                <img class="welcome-animation d-block" src="assets/img/welcome/thumb_3.png" alt="">
                            </span>
                            <span class="welcome-thumb-4">
                                <img class="welcome-animation d-block" src="assets/img/welcome/thumb_4.png" alt="">
                            </span>
                            <span class="welcome-thumb-5">
                                <img class="welcome-animation d-block" src="assets/img/welcome/thumb_5.png" alt="">
                            </span>
                            <span class="welcome-thumb-6">
                                <img class="welcome-animation d-block" src="assets/img/welcome/thumb_6.png" alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape Bottom -->
            <div class="shape shape-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
                    <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->

        <!-- ***** Promo Area Start ***** -->
        <section class="section promo-area promo-1 ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Promo -->
                        <div class="single-promo text-center p-4">
                            <i class="pe-7s-timer pe-5x"></i>
                            <h3 class="my-3">99.9% Uptime</h3>
                            <p>99.9% network uptime guarantees. we fail to meet this guarantee a customer is eligible for a credit on current hosting.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Promo -->
                        <div class="single-promo text-center p-4">
                            <i class="pe-7s-piggy pe-5x"></i>
                            <h3 class="my-3">45-Day Money-Back Guarantee</h3>
                            <p>Try us and love us, or get a refund within 45 days of signing up. Your satisfaction is our top priority.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Promo -->
                        <div class="single-promo text-center p-4">
                            <i class="pe-7s-chat pe-5x"></i>
                            <h3 class="my-3">24/7/365 Support</h3>
                            <p>We put special emphasis on customer service, all of our clients can contact us 24-7-365, friendly Support.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-12">
                        <a href="#" class="btn mt-3">See All Hosting Plans</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Promo Area End ***** -->

        <!-- ***** Domain Area Start ***** -->
        <section class="section domain-area bg-grey ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <!-- Domain Content -->
                        <div class="domain-content section-heading text-center mb-0">
                            <h2>Find the perfect domain name</h2>
                            <p class="my-3">Enter domain name of your choice and pick any extension name on the next step (choose between .com, .xyz, .online, .tech, .site, .net and many more)</p>
                            <!-- Domain Form -->
                            <div class="domain-form m-auto">
                                <input type="email" class="form-control" placeholder="Enter your desired domain name">
                                <button type="submit" class="btn btn-bordered"><i class="fas fa-search mr-2"></i>Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Domain Area End ***** -->

        <!-- ***** Content Area Start ***** -->
        <section class="section content-area ptb_100">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-12 col-lg-6">
                        <!-- Content Inner -->
                        <div class="content-inner">
                            <!-- Section Heading -->
                            <div class="section-heading mb-3">
                                <h2>Managed Service for more convenience</h2>
                            </div>
                            <!-- Content List -->
                            <ul class="content-list">
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span><b>Technical superiority</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span><b>Fully-managed service</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span><b>Security-first Mindset</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</span>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-bordered mt-4">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                        <div class="content-thumb pt-5 pt-lg-0">
                            <img src="assets/img/content/content_thumb.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Content Area End ***** -->

        <!-- ***** Content Area Start ***** -->
        <section class="section content-area bg-grey ptb_100">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                        <div class="content-thumb text-center pt-5 pt-lg-0">
                            <img src="assets/img/content/content_thumb_2.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 order-1 order-lg-2">
                        <!-- Content Inner -->
                        <div class="content-inner">
                            <!-- Section Heading -->
                            <div class="section-heading mb-3">
                                <h2 class="mb-3">Get started quickly &amp; easily.</h2>
                                <p>With our one click installer tool, available on every Web Hosting plan, you can create any type of website: blog, forum, CMS, wiki, photo gallery, E-commerce store, and so much more! No more thinking for databases, downloading and uploading script files on your own, and other technical work. You can create, modify and terminate customer account from Web Host Manager. You don't need to worry about managing your customer hosting account.</p>
                            </div>
                            <a href="#" class="btn btn-bordered mt-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Content Area End ***** -->

        <!-- ***** Service Area End ***** -->
        <section id="service" class="section service-area bg-indigo ptb_100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="section-heading mb-3">
                            <h2 class="text-white mb-3">Our platform is powered by Google Cloud</h2>
                            <p class="text-white">Whether you are looking for a personal website hosting plan or a business website hosting plan, Hosting is the perfect solution for you. Our powerful website hosting services will not only help you achieve your overall website goals, but will also provide you with the confidence you need in knowing that you are partnered with a reliable and secure website hosting platform.</p>
                        </div>
                        <a href="#" class="btn btn-lg mt-4">Learn More</a>
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Content List -->
                        <ul class="content-list text-left pt-4 pt-md-0">
                            <!-- Single Content List -->
                            <li class="single-content-list media py-3">
                                <div class="content-icon pr-4">
                                    <i class="pe-7s-graph pe-4x text-white"></i>
                                </div>
                                <div class="content-text media-body">
                                    <h3 class="text-white mb-2">SSD persistent storage</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</p>
                                </div>
                            </li>
                            <!-- Single Content List -->
                            <li class="single-content-list media py-3">
                                <div class="content-icon pr-4">
                                    <i class="pe-7s-diamond pe-4x text-white"></i>
                                </div>
                                <div class="content-text media-body">
                                    <h3 class="text-white mb-2">Proficient &amp; Friendly</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</p>
                                </div>
                            </li>
                            <!-- Single Content List -->
                            <li class="single-content-list media py-3">
                                <div class="content-icon pr-4">
                                    <i class="pe-7s-rocket pe-4x text-white"></i>
                                </div>
                                <div class="content-text media-body">
                                    <h3 class="text-white mb-2">Extremely Fast</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</p>
                                </div>
                            </li>
                            <!-- Single Content List -->
                            <li class="single-content-list media py-3">
                                <div class="content-icon pr-4">
                                    <i class="pe-7s-headphones pe-4x text-white"></i>
                                </div>
                                <div class="content-text media-body">
                                    <h3 class="text-white mb-2">24/7 Support</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Service Area End ***** -->

        <!-- ***** Price Plan Area Start ***** -->
        <section id="pricing" class="section price-plan-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Our Hosting Plans</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="price-plan-wrapper">
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
                        <div class="single-price-plan">
                            <!-- Price Top -->
                            <div class="price-top text-center px-3 px-lg-0">
                                <h3 class="pb-2">Premium Shared Hosting</h3>
                                <p>Perfect package for personal websites</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center my-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$10.99<span class="badge badge-pill badge-warning ml-2">Save 74%</span></p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">2.89</span>
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
                                <li>2X Allocated Resources</li>
                            </ul>
                            <div class="plan-select">
                                <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                            </div>
                        </div>
                        <div class="single-price-plan featured">
                            <!-- Price Top -->
                            <div class="price-top text-center px-3 px-lg-0">
                                <h3 class="pb-2">Business Shared Hosting</h3>
                                <p>Optimized for small businesses</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center mt-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$15.99<span class="badge badge-pill badge-warning ml-2">Save 75%</span></p>
                                </h4>
                                <div class="plan-cost">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">3.99</span>
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
                        <div class="single-price-plan">
                            <!-- Price Top -->
                            <div class="price-top text-center px-3 px-lg-0">
                                <h3 class="pb-2">Cloud Hosting</h3>
                                <p>Advanced solution for revenue generating businesses</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center my-4 px-3">
                                <h4 class="plan-tags">
                                    <p class="price-text premium">from</p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">9.99</span>
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

        <!-- ***** Review Area Start ***** -->
        <section id="review" class="section review-area bg-grey ptb_100">
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

        <!--====== Call To Action Area Start ======-->
        <section class="section cta-area bg-indigo ptb_100">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Section Heading -->
                        <div class="section-heading m-0">
                            <h2 class="text-white">Sign up for web hosting today!</h2>
                            <p class="text-white d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="text-white d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- CTA Content -->
                        <div class="cta-content pt-4 pt-md-0">
                            <h3 class="d-block text-white fw-4">Starting at<br> <span>$0.99/month*</span></h3>
                            <a href="#" class="btn btn-lg mt-4">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Call To Action Area End ======-->

        <!--====== Data Center Area Start ======-->
        <section class="section data-center-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Our Data Center</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Map Container -->
                    <div class="map-container">
                        <img src="assets/img/bg/data_center.png">
                        <div class="point venezuela" data-tippy-content="Venezuela"></div>
                        <div class="point growing brasil" data-tippy-content="Brasil"></div>
                        <div class="point growing argentina" data-tippy-content="Argentina"></div>
                        <div class="point growing colombia" data-tippy-content="Colombia"></div>
                        <div class="point growing panama" data-tippy-content="Panama"></div>
                        <div class="point growing mexico" data-tippy-content="Mexico"></div>
                        <div class="point growing usa" data-tippy-content="United States"></div>
                        <div class="point growing arabia" data-tippy-content="Saudi Arabia"></div>
                        <div class="point growing turquia" data-tippy-content="Turquia"></div>
                        <div class="point growing rusia" data-tippy-content="Rusia"></div>
                        <div class="point growing china" data-tippy-content="China"></div>
                        <div class="point growing japan" data-tippy-content="Japan"></div>
                        <div class="point growing australia" data-tippy-content="Australia"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Data Center Area End ======-->

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
