@extends('layouts.app')

@section('title', 'Hosting Email')

@section('content')
   <!--====== Preloader Area Start ======-->
    <div id="preloader">
        <!-- Hostbit Preloader -->
        <div id="hostbit-preloader" class="hostbit-preloader">
            <!-- Preloader Animation -->
            <div class="preloader-animation">
                <!-- Spinner -->
                <div class="spinner"></div>
                <!-- Loader -->
                <div class="loader">
                    <span data-text-preloader="H" class="animated-letters">H</span>
                    <span data-text-preloader="O" class="animated-letters">O</span>
                    <span data-text-preloader="S" class="animated-letters">S</span>
                    <span data-text-preloader="T" class="animated-letters">T</span>
                    <span data-text-preloader="B" class="animated-letters">B</span>
                    <span data-text-preloader="I" class="animated-letters">I</span>
                    <span data-text-preloader="T" class="animated-letters">T</span>
                </div>
                <p class="fw-5 text-center text-uppercase">Loading</p>
            </div>
            <!-- Loader Animation -->
            <div class="loader-animation">
                <div class="row h-100">
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Preloader Area End ======-->

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main overflow-hidden">
        <!-- ***** Header Start ***** -->
        <header id="header">
            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">
                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="index.html">
                        <img class="navbar-brand-regular" src="assets/img/logo/logo-white.png" alt="brand-logo">
                        <img class="navbar-brand-sticky" src="assets/img/logo/logo.png" alt="sticky brand-logo">
                    </a>
                    <div class="ml-auto"></div>
                    <!-- Navbar -->
                    <ul class="navbar-nav items">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">WordPress <i class="fas fa-angle-down ml-1"></i></a>
                            <ul class="dropdown-menu items">
                                <li class="nav-item">
                                    <a href="hosting-wordpress.html" class="nav-link d-inline-flex">
                                        <i class="icon-home media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            WordPress Hosting
                                            <small class="d-block mt-1">Optimized solution for WordPress hosting</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="hosting-ecommerce.html" class="nav-link d-inline-flex">
                                        <i class="icon-basket-loaded media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            eCommerce Hosting
                                            <small class="d-block mt-1">Built for Online stores</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Web Hosting <i class="fas fa-angle-down ml-1"></i></a>
                            <ul class="dropdown-menu items">
                                <li class="nav-item">
                                    <a href="hosting-shared.html" class="nav-link d-inline-flex">
                                        <i class="icon-organization media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Shared Hosting
                                            <small class="d-block mt-1">For small to medium websites</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="hosting-vps.html" class="nav-link d-inline-flex">
                                        <i class="icon-fire media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            VPS Hosting
                                            <small class="d-block mt-1">Dedicated resources to scale</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="hosting-email.html" class="nav-link d-inline-flex">
                                        <i class="icon-envelope-open media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Email Hosting
                                            <small class="d-block mt-1">Promote your business with every outreach</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="hosting-dedicated.html" class="nav-link d-inline-flex">
                                        <i class="icon-globe media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Dedicated Hosting
                                            <small class="d-block mt-1">Optimized for dedicated web server</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="hosting-cloud.html" class="nav-link d-inline-flex">
                                        <i class="icon-cloud-upload media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Cloud Hosting
                                            <small class="d-block mt-1">For large scale projects</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="hosting-reseller.html" class="nav-link d-inline-flex">
                                        <i class="icon-speedometer media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Reseller Hosting
                                            <small class="d-block mt-1">Increase your business to the world</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Domains <i class="fas fa-angle-down ml-1"></i></a>
                            <ul class="dropdown-menu items">
                                <li class="nav-item">
                                    <a href="domain-checker.html" class="nav-link d-inline-flex">
                                        <i class="icon-magnifier media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Domain Checker
                                            <small class="d-block mt-1">Find a perfect domain name</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="domain-transfer.html" class="nav-link d-inline-flex">
                                        <i class="icon-rocket media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Domain Transfer
                                            <small class="d-block mt-1">Want to transfer your domain?</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Pages <i class="fas fa-angle-down ml-1"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Domains <i class="fas fa-angle-right ml-1"></i></a>
                                    <ul class="dropdown-menu items">
                                        <li class="nav-item">
                                            <a href="domain-checker.html" class="nav-link d-inline-flex">
                                                <i class="icon-magnifier media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Domain Checker
                                                    <small class="d-block mt-1">Find a perfect domain name</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="domain-transfer.html" class="nav-link d-inline-flex">
                                                <i class="icon-rocket media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Domain Transfer
                                                    <small class="d-block mt-1">Want to transfer your domain?</small>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Hosting <i class="fas fa-angle-right ml-1"></i></a>
                                    <ul class="dropdown-menu items">
                                        <li class="nav-item">
                                            <a href="hosting-shared.html" class="nav-link d-inline-flex">
                                                <i class="icon-organization media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Shared Hosting
                                                    <small class="d-block mt-1">For small to medium websites</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="hosting-vps.html" class="nav-link d-inline-flex">
                                                <i class="icon-fire media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    VPS Hosting
                                                    <small class="d-block mt-1">Dedicated resources to scale</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="hosting-email.html" class="nav-link d-inline-flex">
                                                <i class="icon-envelope-open media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Email Hosting
                                                    <small class="d-block mt-1">Promote your business with outreach</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="hosting-dedicated.html" class="nav-link d-inline-flex">
                                                <i class="icon-globe media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Dedicated Hosting
                                                    <small class="d-block mt-1">Optimized for dedicated web server</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="hosting-cloud.html" class="nav-link d-inline-flex">
                                                <i class="icon-cloud-upload media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Cloud Hosting
                                                    <small class="d-block mt-1">For large scale projects</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="hosting-reseller.html" class="nav-link d-inline-flex">
                                                <i class="icon-speedometer media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Reseller Hosting
                                                    <small class="d-block mt-1">Increase your business to the world</small>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">WordPress <i class="fas fa-angle-right ml-1"></i></a>
                                    <ul class="dropdown-menu items">
                                        <li class="nav-item">
                                            <a href="hosting-wordpress.html" class="nav-link d-inline-flex">
                                                <i class="icon-home media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    WordPress Hosting
                                                    <small class="d-block mt-1">Optimized solution for WordPress</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="hosting-ecommerce.html" class="nav-link d-inline-flex">
                                                <i class="icon-basket-loaded media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    eCommerce Hosting
                                                    <small class="d-block mt-1">Built for Online stores</small>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="data-center.html" class="nav-link">Data Center</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Affiliate</a></li>
                                <li class="nav-item"><a href="#" class="nav-link disabled">More Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Affiliates</a>
                        </li>
                    </ul>
                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                                <i class="fas fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-comment-alt"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Toggler -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="fas fa-bars toggle-icon m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action Button -->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="#" class="btn ml-lg-auto btn-bordered-white"><i class="fas fa-user contact-icon mr-md-2"></i>Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content">
                            <h2 class="text-white mb-3">Email Hosting</h2>
                            <p class="text-white">Get email hosting services and increase your brands’ trust!</p>
                            <span class="d-block font-italic text-white">Starting at $4.99/month*</span>
                            <a href="#" class="btn mt-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** Promo Area Start ***** -->
        <section class="section promo-area promo-2 no-hover overflow-hidden ptb_100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-5">
                        <h2 class="mb-2">Everything you need at your fingertips</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo voluptate iste expedita sunt perferendis id totam sed fuga? Voluptatibus, sed.</p>
                        <a class="btn btn-lg mt-3" href="#">Choose a Plan</a>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="row align-items-center pt-4 pt-lg-0">
                            <div class="col-12 col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Promo -->
                                        <div class="single-promo text-center">
                                            <img class="avatar-md" src="assets/img/icons/promo/1.png" alt="">
                                            <!-- Promo Content -->
                                            <div class="promo-content mt-3">
                                                <h3 class="mb-2">Choose your email hosting plan</h3>
                                                <p>Pick one of the two available options and review your cart items. Order a 12-month cycle to get a free domain!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <!-- Single Promo -->
                                        <div class="single-promo text-center">
                                            <img class="avatar-md" src="assets/img/icons/promo/2.png" alt="">
                                            <!-- Promo Content -->
                                            <div class="promo-content mt-3">
                                                <h3 class="mb-2">Complete the checkout process</h3>
                                                <p>Finish the transaction by filling in your payment details. You’ll then reach the members area.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Promo -->
                                        <div class="single-promo text-center">
                                            <img class="avatar-md" src="assets/img/icons/promo/3.png" alt="">
                                            <!-- Promo Content -->
                                            <div class="promo-content mt-3">
                                                <h3 class="mb-2">Enjoy high-quality email servers</h3>
                                                <p>Follow the initial service setup. Then, create your first domain-based email address and start sending!</p>
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
        <!-- ***** Promo Area End ***** -->

        <!-- ***** Price Plan Area Start ***** -->
        <section id="pricing" class="section inner-price-plan price-plan-area bg-grey ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Email Hosting Plans</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!-- Single Price Plan -->
                                <div class="single-price-plan">
                                    <!-- Price Top -->
                                    <div class="price-top text-center px-3 px-lg-0">
                                        <h3 class="pb-2">Business Email</h3>
                                    </div>
                                    <!-- Price Header -->
                                    <div class="price-header text-center my-4 px-3">
                                        <h4 class="plan-tags text-uppercase">
                                            <p class="price-text">$2.49<span class="badge badge-pill badge-warning ml-2">Save 45%</span></p>
                                        </h4>
                                        <div class="plan-cost mt-3">
                                            <sup class="plan-sup">$</sup>
                                            <span class="plan-price">0.99</span>
                                            <span class="plan-type fw-7">/mo</span>
                                        </div>
                                    </div>
                                    <!-- Plan Features -->
                                    <ul class="plan-features pb-3">
                                        <li>10 GB Email storage</li>
                                        <li>2 Mail Filters</li>
                                        <li>50 Email Aliases</li>
                                        <li>Antivirus Check</li>
                                        <li>Multi-device Support</li>
                                    </ul>
                                    <div class="plan-select">
                                        <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Single Price Plan -->
                                <div class="single-price-plan featured">
                                    <!-- Featured Box -->
                                    <div class="featured-box bg-indigo text-center p-3">
                                        <h3 class="text-white text-uppercase">Most Popular</h3>
                                    </div>
                                    <!-- Price Top -->
                                    <div class="price-top text-center px-3 px-lg-0">
                                        <h3 class="pb-2">Enterprise Email</h3>
                                    </div>
                                    <!-- Price Header -->
                                    <div class="price-header text-center mt-4 px-3">
                                        <h4 class="plan-tags text-uppercase">
                                            <p class="price-text">$4.99<span class="badge badge-pill badge-warning ml-2">Save 60%</span></p>
                                        </h4>
                                        <div class="plan-cost mt-3">
                                            <sup class="plan-sup">$</sup>
                                            <span class="plan-price">2.99</span>
                                            <span class="plan-type fw-7">/mo</span>
                                        </div>
                                    </div>
                                    <!-- Plan Features -->
                                    <ul class="plan-features pb-3">
                                        <li>30 GB Email storage</li>
                                        <li>Unlimited Mail Filters</li>
                                        <li>50 Email Aliases</li>
                                        <li>Antivirus Check</li>
                                        <li>Multi-device Support</li>
                                    </ul>
                                    <div class="plan-select">
                                        <a class="btn btn-bordered text-uppercase" href="#">Select Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <p>Not sure what to choose? <a class="service-btn" href="#">Compare Plan</a></p>
                </div>
            </div>
        </section>
        <!-- ***** Price Plan Area End ***** -->

        <!-- ***** Content Area Start ***** -->
        <section class="section content-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Email Hosting Features</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-12 col-lg-6">
                        <!-- Content Inner -->
                        <div class="content-inner">
                            <!-- Section Heading -->
                            <div class="section-heading mb-3">
                                <h2 class="mb-3">Contact Management on All of your Device</h2>
                                <p>Collaboration has never been easier. Connect and communicate with your colleagues, friends or outside contributors in a few clicks. Conveniently import information from other devices, or simply export your contacts list for a more efficient team-working environment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 text-center">
                        <div class="content-thumb pt-5 pt-lg-0">
                            <img src="assets/img/content/content_thumb.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center ptb_100">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                        <div class="content-thumb text-center pt-5 pt-lg-0">
                            <img src="assets/img/content/content_thumb_2.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                        <!-- Content Inner -->
                        <div class="content-inner">
                            <!-- Section Heading -->
                            <div class="section-heading mb-3">
                                <h2 class="mb-3">Advanced search to make your life easier</h2>
                                <p>Make your life easier with super fast search. With Flockmail's search you will find emails which you are looking for in seconds. Search by subject line, sent date, keywords.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-12 col-lg-6">
                        <!-- Content Inner -->
                        <div class="content-inner">
                            <!-- Section Heading -->
                            <div class="section-heading mb-3">
                                <h2 class="mb-3">Schedule meetings and plan your day</h2>
                                <p>You will not miss any important meeting or date, because calendar allows you to schedule and track all your meetings in one place. Want to set up a meeting with your teammates? No problem. Check their availability in just a second.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 text-center">
                        <div class="content-thumb pt-5 pt-lg-0">
                            <img src="assets/img/content/content_thumb.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Content Area End ***** -->

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
                                                        What is email hosting?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    Email hosting is a unique solution focused primarily on email servers. This service works independently from website hosting, hence your business will still operate at full scale even while you're setting everything up.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                                        What are the advantages of domain-based email boxes?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    Nowadays, building brand trust and awareness is extremely important. But it is not an easy thing to do. However, it is much simpler with domain-based email hosting! Every letter that you send will display your domain name to potentials customers while encouraging them to check out your site. Surveys also show that users are more likely to choose companies that use professional email addresses!
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseThree">
                                                        Can I migrate my email contents from other platforms?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    You surely can! Every plan will have an inbuilt email migration tool to help you transfer anything you need onto our platform. And in case you run into any trouble, or simply need assistance, our dedicated Customer Success Team will be more than happy to help you out!
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseFour">
                                                        Can I set up email accounts on Apple/Android devices?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    Of course! Each email hosting plan is fully compatible with any mobile device or mail client. Set it up across multiple devices and effortlessly synchronize all email content. Be responsive no matter where you're located!
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
                            <h2 class="text-white">Ready to get Started?</h2>
                            <p class="text-white d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="text-white d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                            <a class="btn btn-lg mt-4" href="#">Get Started</a>
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


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
@endsection
