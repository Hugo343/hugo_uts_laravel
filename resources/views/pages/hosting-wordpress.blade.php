@extends('layouts.app')

@section('title', 'Hosting Wordpress')

@section('content')
    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main overflow-hidden">

        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="text-white mb-3">WordPress Hosting</h2>
                            <p class="text-white">Quick and secure, guaranteed 99.99% uptime, feature-rich WordPress hosting solutions</p>
                            <!-- Content List -->
                            <ul class="content-list d-flex flex-column flex-md-row justify-content-center align-items-center my-3">
                                <!-- Single Content List -->
                                <li class="single-content-list media text-white px-3 py-1">
                                    <div class="content-icon pr-3">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span><b>FREE</b> cPanel</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media text-white px-3 py-1">
                                    <div class="content-icon pr-3">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span><b>Unlimited</b> Traffic</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media text-white px-3 py-1">
                                    <div class="content-icon pr-3">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>1-Click WordPress Install</span>
                                    </div>
                                </li>
                            </ul>
                            <span class="d-block font-italic text-white">Starting at $2.99/month*</span>
                            <a href="#" class="btn mt-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** Promo Area Start ***** -->
        <section class="section promo-area promo-2 overflow-hidden ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Promo -->
                        <div class="single-promo text-center icon-1">
                            <img class="avatar-md" src="assets/img/icons/promo/1.png" alt="">
                            <!-- Promo Content -->
                            <div class="promo-content mt-3">
                                <h3 class="mb-2">Supercharged Speed</h3>
                                <p>Loaded pages at blazing speed worldwide without having to configure your caching and CDN. With overall better performance, we've got you covered.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Promo -->
                        <div class="single-promo text-center icon-1">
                            <img class="avatar-md" src="assets/img/icons/promo/2.png" alt="">
                            <!-- Promo Content -->
                            <div class="promo-content mt-3">
                                <h3 class="mb-2">Convenient Simplicity</h3>
                                <p>Easy access to individual file and database restores and email accounts through a single portal. It's that easy to use with our WordPress cloud hosting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Promo -->
                        <div class="single-promo text-center icon-1">
                            <img class="avatar-md" src="assets/img/icons/promo/3.png" alt="">
                            <!-- Promo Content -->
                            <div class="promo-content mt-3">
                                <h3 class="mb-2">Advanced Security</h3>
                                <p>Monitor and allocate additional resources easily with our easy web hosting platform. You have total control over your usage, with no surprises.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Promo Area End ***** -->

        <!-- ***** Price Plan Area Start ***** -->
        <section id="pricing" class="section price-plan-area bg-grey ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">WordPress Hosting Plans</h2>
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
                                <h3 class="pb-2">Single WordPress</h3>
                                <p>Ideal solution for beginners</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center my-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$6.89<span class="badge badge-pill badge-warning ml-2">Save 90%</span></p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">2.99</span>
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
                        <div class="single-price-plan featured">
                            <!-- Price Top -->
                            <div class="price-top text-center px-3 px-lg-0">
                                <h3 class="pb-2">WordPress Starter</h3>
                                <p>Perfect package for personal websites</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center mt-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$8.99<span class="badge badge-pill badge-warning ml-2">Save 74%</span></p>
                                </h4>
                                <div class="plan-cost">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">4.89</span>
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
                        <div class="single-price-plan">
                            <!-- Price Top -->
                            <div class="price-top text-center px-3 px-lg-0">
                                <h3 class="pb-2">Business WordPress</h3>
                                <p>Optimized for small businesses</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center my-4 px-3">
                                <h4 class="plan-tags text-uppercase">
                                    <p class="price-text">$12.99<span class="badge badge-pill badge-warning ml-2">Save 75%</span></p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">7.99</span>
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
                                <h3 class="pb-2">WordPress Pro</h3>
                                <p>Advanced solution for revenue generating businesses</p>
                            </div>
                            <!-- Price Header -->
                            <div class="price-header text-center my-4 px-3">
                                <h4 class="plan-tags">
                                    <p class="price-text premium">from</p>
                                </h4>
                                <div class="plan-cost mt-3">
                                    <sup class="plan-sup">$</sup>
                                    <span class="plan-price">12.99</span>
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

        <!-- ***** Content Area Start ***** -->
        <section class="section content-area ptb_100">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-12 col-lg-6">
                        <!-- Content Inner -->
                        <div class="content-inner">
                            <!-- Section Heading -->
                            <div class="section-heading mb-3">
                                <h2>2.5X Faster Load Times &amp; Increased Website Performance</h2>
                            </div>
                            <!-- Content List -->
                            <ul class="content-list">
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>Enjoy up to 2.5X faster load times for your WordPress web hosting due to super charged cloud architecture, low-density servers, CDN, and multiple caching layers.</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>Your website content is managed more efficiently, enabling dynamic content requests to be processed lightning-fast with our exclusive cloud hosting services.</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>WordPress hosting turbocharges your website for a faster load time!</span>
                                    </div>
                                </li>
                            </ul>
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
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <div class="content-thumb text-center pt-5 pt-lg-0">
                            <img src="assets/img/content/content_thumb_2.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                        <!-- Content Inner -->
                        <div class="content-inner">
                            <!-- Section Heading -->
                            <div class="section-heading mb-3">
                                <h2>Clean &amp; Easy To Use Control Panel</h2>
                            </div>
                            <!-- Content List -->
                            <ul class="content-list">
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>A WordPress Cloud Interface focused on usability, minimizing the complexities of more traditional web hosting or those of other cloud web hosts.</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>Auto-backup with one-click restores; configurable for full or snapshot backups.</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>One-click scalability to handle traffic spikes and increased capacity requirements</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>Easy access to all your email accounts and other hosting options</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Content Area End ***** -->

        <!-- ***** Service Area End ***** -->
        <section id="service" class="section service-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">All WordPress Hosting Plans Include</h2>
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
                                                        What is WordPress?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    WordPress is a state-of-the-art, open-source content management system. It is, arguably, the staple website creation tool in the world right now. It’s easy to use, efficient, very well-built, and heavily customizable, with millions of plugins, themes, and tutorials available online. From job boards to blogs, and from digital portfolios to ecommerce stores; all kinds of sites can be (and are) powered by WordPress. Many renowned websites have WordPress running behind the scenes; TechCrunch, The New Yorker, and Sony Music are a few examples.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                                        What is WordPress hosting?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    Just like you rent an apartment to store all the things that make up your household; you rent a WordPress hosting to store all the files and folders that make up your website. Typically, a WordPress hosting signifies a host of web servers that have been optimized and fine-tuned to run WordPress websites at peak performance. Installing WordPress on Hostbit’s WordPress hosting takes a single click. Within a few moments of the installation, you are ready to tweak your website and add content as you please. It comes with pre- installed cache plugins and security enhancements that help you go live quicker than you’d hoped!
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseThree">
                                                        What is Managed WordPress Hosting?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    A managed WordPress hosting takes the responsibilities of a website/server optimization, technical adjustments, and update management, etc. off your shoulders. While the good guys at Hostbit keep track of the exhaustive list of website to-dos for you, you have ample time to focus on what matters most: adding and editing content and generating more traffic. Moreover, a managed WordPress hosting comes with servers that have been adjusted precisely for running WordPress. In addition to a simple install, we also optimize everything and apply security measures, so that within a few moments, your website is ready to go live. All in all, if you aren’t an expert in WordPress hosting, or don’t have too much time on your hands, a managed WordPress hosting will be ideal for you.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseFour">
                                                        What is the difference between Web Hosting and WordPress hosting?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    The primary difference between a simple web hosting and a WordPress hosting is that the latter is built for the sole purpose of powering WordPress websites. This means that servers used for a WordPress hosting are tuned such that they can run any number of WordPress websites, at maximum speed and performance. Doing the same with a simple web hosting will require a lot of machine-level adjustments, plugin installations, and memory tweaks. <br>
                                                    In addition to speed and performance, a Hostbit WordPress hosting also comes with pre-configured security measures. You don’t have to set up firewall rules or run malware tests like you’d have to on a simple web hosting. You worry about creating high-quality content and marketing your website. <br>
                                                    Also, with a Hostbit WordPress hosting, you get dedicated, 24/7/365 support from highly trained WordPress professionals. They know everything about your hosting account and can provide an instant solution to seemingly complicated WordPress problems. Conversely, with a simple web hosting, you might still get help, but the personnel won’t have the same level of hands-on WordPress experience!
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
