@extends('layouts.app')

@section('title', 'Hosting Ecommerce')

@section('content')
        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content">
                            <h2 class="text-white">Online Stores Powered by WooCommerce</h2>
                            <!-- Content List -->
                            <ul class="content-list mt-3 mb-2">
                                <!-- Single Content List -->
                                <li class="single-content-list media text-white py-1">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>Great for selling online</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media text-white py-1">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>Secure payment gateways provided</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media text-white py-1">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>Fully customizable online stores</span>
                                    </div>
                                </li>
                            </ul>
                            <span class="d-block font-italic text-white">Starting at $6.99/month*</span>
                            <a href="#" class="btn btn-lg mt-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** Price Plan Area Start ***** -->
        <section id="pricing" class="section inner-price-plan price-plan-area bg-grey ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">WooCommerce Hosting Plans</h2>
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
                                <h3 class="pb-2">Starter</h3>
                                <p>Ideal solution for beginners</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center my-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$13.99<span class="badge badge-pill badge-warning ml-2">Save 90%</span></p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">6.99</span>
                                    <span class="plan-type fw-7">/mo</span>
                                </div>
                            </div>
                            <!-- Plan Features -->
                            <ul class="plan-features pb-3">
                                <li>1 Online Store</li>
                                <li>100 GB SSD Storage</li>
                                <li>Storefront Theme Installed</li>
                                <li>Free SSL Certificate</li>
                                <li>Domain Privacy + Protection</li>
                                <li><span class="plan-list text-underlined" data-tippy-content="Get your online store up and running with a free 2-hour set up call with a WooCommerce expert."><strong>Free</strong></span> Setup Call</li>
                                <li>Domain Privacy + Protection</li>
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
                                <h3 class="text-white text-uppercase">Recommended</h3>
                            </div>
                            <!-- Price Top -->
                            <div class="price-top text-center px-3 px-lg-0">
                                <h3 class="pb-2">Premium</h3>
                                <p>Perfect package for Online Stores</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center mt-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$16.99<span class="badge badge-pill badge-warning ml-2">Save 75%</span></p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">8.69</span>
                                    <span class="plan-type fw-7">/mo</span>
                                </div>
                            </div>
                            <!-- Plan Features -->
                            <ul class="plan-features pb-3">
                                <li><span class="plan-list text-underlined" data-tippy-content="For plans supporting Unmetered disk space and/or bandwidth, we do not have defined limitations, which means you are not charged according to the amount of disk space or bandwidth you use. While these resources are not infinite, we believe our customers should have all of the resources necessary to build an online presence, and the majority of our customers will have more than enough disk space and bandwidth to meet their needs."><strong>Unlimited</strong></span> Online Stores</li>
                                <li><span class="plan-list text-underlined" data-tippy-content="Owners with more than 15GB used email space may experience decreases in performance."><strong>Unmetered</strong></span> SSD Storage</li>
                                <li><span class="plan-list text-underlined" data-tippy-content="For plans supporting Unmetered disk space and/or bandwidth, we do not have defined limitations, which means you are not charged according to the amount of disk space or bandwidth you use. While these resources are not infinite, we believe our customers should have all of the resources necessary to build an online presence, and the majority of our customers will have more than enough disk space and bandwidth to meet their needs."><strong>Unlimited</strong></span> Bandwidth</li>
                                <li>Storefront Theme Installed</li>
                                <li>Free SSL Certificate</li>
                                <li><span class="plan-list text-underlined" data-tippy-content="Get your online store up and running with a free 2-hour set up call with a WooCommerce expert."><strong>Free</strong></span> Setup Call</li>
                                <li>Domain Privacy + Protection</li>
                                <li>CodeGuard Backup Basic</li>
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
                                <h3 class="pb-2">Business</h3>
                                <p>Optimized for small businesses</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center my-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$29.99<span class="badge badge-pill badge-warning ml-2">Save 80%</span></p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">12.99</span>
                                    <span class="plan-type fw-7">/mo</span>
                                </div>
                            </div>
                            <!-- Plan Features -->
                            <ul class="plan-features pb-3">
                                <li><span class="plan-list text-underlined" data-tippy-content="For plans supporting Unmetered disk space and/or bandwidth, we do not have defined limitations, which means you are not charged according to the amount of disk space or bandwidth you use. While these resources are not infinite, we believe our customers should have all of the resources necessary to build an online presence, and the majority of our customers will have more than enough disk space and bandwidth to meet their needs."><strong>Unlimited</strong></span> Online Stores</li>
                                <li><span class="plan-list text-underlined" data-tippy-content="Owners with more than 15GB used email space may experience decreases in performance."><strong>Unmetered</strong></span> SSD Storage</li>
                                <li><span class="plan-list text-underlined" data-tippy-content="For plans supporting Unmetered disk space and/or bandwidth, we do not have defined limitations, which means you are not charged according to the amount of disk space or bandwidth you use. While these resources are not infinite, we believe our customers should have all of the resources necessary to build an online presence, and the majority of our customers will have more than enough disk space and bandwidth to meet their needs."><strong>Unlimited</strong></span> Bandwidth</li>
                                <li>Storefront Theme Installed</li>
                                <li>Free SSL Certificate</li>
                                <li><span class="plan-list text-underlined" data-tippy-content="Get your online store up and running with a free 2-hour set up call with a WooCommerce expert."><strong>Free</strong></span> Setup Call</li>
                                <li>Domain Privacy + Protection</li>
                                <li>CodeGuard Backup Basic</li>
                                <li>SEO Tools</li>
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

        <!-- ***** Content Area Start ***** -->
        <section class="section content-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Why Choose WooCommerce?</h2>
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
                                <h2 class="mb-3">Build an online store in minutes</h2>
                                <p>WooCommerce was designed specifically for WordPress, one of the most powerful and respected building platforms in use today. With the fundamentals handled by WordPress, WooCommerce then takes the guesswork out of creating your online store, by handling everything from inventory management to payment methods and even your store's overall appearance.</p>
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
                                <h2 class="mb-3">Easily add and remove products</h2>
                                <p>Easily add and remove products from your online inventory. Quickly create coupon codes for sales and promotions on your site. Use a variety of payment and tax options to customize your shopping cart.</p>
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
                                <h2 class="mb-3">Configure your online store with a wealth of WooCommerce</h2>
                                <p>Monitor your online store performance from a centralized analytics dashboard. Use free SSL certificate and dedicated IP to accept secure payments. Receive 24/7 support and services to guide website creation.</p>
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
                                                        What is WooCommerce Hosting?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    WooCommerce is a WordPress plugin that is primarily used for selling products or services online. Regardless if your products are digital or physical, WooCommerce makes it easy to build an online store that is customized specifically to your business needs. WooCommerce also makes it easy to manage your inventory, take secure payments, manage shipping, and will even apply taxes accordingly.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                                        Can I customize my WooCommerce online store?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    Absolutely. Depending on what you want your e-commerce store to do or look like, you can choose from a variety of available WooCommerce themes. Once you've chosen a theme, you can begin to customize it within the "customizer" section of your WordPress dashboard. This will allow you to make simple changes like adding your personal logo or changing the background and font. Coding knowledge is not a requirement for using WooCommerce, however for users who know basic HTML or CSS, customization can be taken to a whole new level. We recommend that beginners to WooCommerce choose a theme that best fits their needs and then learn how to customize it further through our knowledge base articles or community forums. As your customization skills increase, you will be excited by all the possibilities your WooCommerce online store has available to leverage.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseThree">
                                                        Why should I use WooCommerce instead of Shopify?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    WooCommerce is completely free to use and is powered by a community of developers dedicated to making WooCommerce as flexible and versatile as the industry needs. As the internet and online stores continue to evolve, WooCommerce evolves with it. Hostbit makes building a WooCommerce website easy for beginners while still providing all the tools necessary for pros. WooCommerce allows anyone to setup and run a professional online store in minutes. The best part is that it's all powered by WordPress so your data is all 100% owned by you.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseFour">
                                                        How do I get started with WooCommerce Hosting?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    Hostbit makes it easy to get started with WooCommerce web hosting. Simply choose the hosting plan that is right for your website needs, and then create or add your existing domain. We will automatically install WooCommerce on top of your WordPress website while also providing a free WooCommerce SSL to keep your site and transactions secure. Setup takes only a few minutes and then you can begin selecting a theme for your online store. Shortly after you've selected a WooCommerce theme, you can begin adding your products and payment information.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseFive">
                                                        Will you transfer my site?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFive" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    Sure! Depending on which plan you choose, we will transfer 1, 2, or 3 existing WordPress sites over to our platform - for FREE. All of your content will be safely moved over so you don't experience any interruption or downtime during the migration process.
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
@endsection
