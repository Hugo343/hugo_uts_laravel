@extends('layouts.app')

@section('title', 'Hosting Cloud')

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
                    <div class="col-12 col-md-7">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content">
                            <h2 class="text-white mb-3">Cloud Hosting</h2>
                            <p class="text-white">Extremely fast, secure and user-friendly website hosting for your successful online projects</p>
                            <!-- Content List -->
                            <ul class="content-list mt-3 mb-2">
                                <!-- Single Content List -->
                                <li class="single-content-list media text-white py-1">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span><b>FREE</b> cPanel</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media text-white py-1">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span><b>Unlimited</b> Traffic</span>
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
                            </ul>
                            <span class="d-block font-italic text-white">Starting at $4.99/month*</span>
                            <a href="#" class="btn mt-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** features Area End ***** -->
        <section id="features" class="section features-area bg-grey ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Cloud Features</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single features -->
                        <div class="single-features media px-3 py-4">
                            <img class="avatar-md" src="assets/img/icons/featured/1.png" alt="">
                            <!-- Features Content -->
                            <div class="features-content media-body ml-3">
                                <h3 class="mb-3">Ultra-fast Sites</h3>
                                <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod emit.</p>
                                <a class="service-btn mt-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single features -->
                        <div class="single-features media px-3 py-4">
                            <img class="avatar-md" src="assets/img/icons/featured/2.png" alt="">
                            <!-- Features Content -->
                            <div class="features-content media-body ml-3">
                                <h3 class="mb-3">Top-notch Security</h3>
                                <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod emit.</p>
                                <a class="service-btn mt-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single features -->
                        <div class="single-features media px-3 py-4">
                            <img class="avatar-md" src="assets/img/icons/featured/3.png" alt="">
                            <!-- Features Content -->
                            <div class="features-content media-body ml-3">
                                <h3 class="mb-3">1-Click Install</h3>
                                <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod emit.</p>
                                <a class="service-btn mt-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single features -->
                        <div class="single-features media px-3 py-4">
                            <img class="avatar-md" src="assets/img/icons/featured/4.png" alt="">
                            <!-- Features Content -->
                            <div class="features-content media-body ml-3">
                                <h3 class="mb-3">Easy Site Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod emit.</p>
                                <a class="service-btn mt-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single features -->
                        <div class="single-features media px-3 py-4">
                            <img class="avatar-md" src="assets/img/icons/featured/5.png" alt="">
                            <!-- Features Content -->
                            <div class="features-content media-body ml-3">
                                <h3 class="mb-3">Domain Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod emit.</p>
                                <a class="service-btn mt-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single features -->
                        <div class="single-features media px-3 py-4">
                            <img class="avatar-md" src="assets/img/icons/featured/6.png" alt="">
                            <!-- Features Content -->
                            <div class="features-content media-body ml-3">
                                <h3 class="mb-3">Reliable Email Service</h3>
                                <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod emit.</p>
                                <a class="service-btn mt-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** features Area End ***** -->

        <!-- ***** Price Plan Area Start ***** -->
        <section id="pricing" class="section inner-price-plan price-plan-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Cloud Hosting Plans</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Price Plan -->
                        <div class="single-price-plan">
                            <!-- Price Top -->
                            <div class="price-top text-center px-3 px-lg-0">
                                <h3 class="pb-2">Single Cloud Hosting</h3>
                                <p>Ideal solution for beginners</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center my-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$6.99<span class="badge badge-pill badge-warning ml-2">Save 90%</span></p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">4.99</span>
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
                                <h3 class="pb-2">Premium Cloud Hosting</h3>
                                <p>Perfect package for personal websites</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center mt-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$12.99<span class="badge badge-pill badge-warning ml-2">Save 75%</span></p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">8.69</span>
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
                                    <p class="price-text">$19.99<span class="badge badge-pill badge-warning ml-2">Save 80%</span></p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">14.99</span>
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
                                                        What is Cloud Hosting?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    Cloud Hosting is one of the most popular hosting packages because it provides an affordable way to get your website online. Cloud Hosting works by allowing multiple users to share space on a single server maintained by the hosting provider (Hosting). A Cloud Hosting package can include multiple offers or combinations of features as offered by their hosting provider. Hosting Cloud Hosting is perfect for blogging, hobbies and small business websites.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                                        What are Cloud Hosting Benifits?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    When you sign up for a Cloud Hosting package, your biggest benefit is purchasing hosting at an affordable price. In addition to various features, our shared hosting platform is managed which means users don’t have to worry about server management and platform patches. When you purchase a Hosting Cloud Hosting package it also includes an SSL certificate, domain name and more!
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseThree">
                                                        What are the main differences between Cloud Hosting and a VPS?
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
