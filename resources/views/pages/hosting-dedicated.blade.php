@extends('layouts.app')

@section('title', 'Hosting Dedicated')

@section('content')
        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="text-white mb-3">Dedicated Hosting</h2>
                            <p class="text-white">For websites that require the ultimate in performance, security, and control.</p>
                            <ol class="breadcrumb d-flex justify-content-center mt-3">
                                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="#">Web Hosting</a></li>
                                <li class="breadcrumb-item text-white active">Dedicated Hosting</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** Price Plan Area Start ***** -->
        <section class="price-plan-area ptb_100 overflow-scroll">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Dedicted Server Plans</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-responsive-lg table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th class="h4 fw-7 text-primary" scope="col">Plans</th>
                              <th class="h4 fw-7 text-primary text-center" scope="col">Processor</th>
                              <th class="h4 fw-7 text-primary text-center" scope="col">RAM</th>
                              <th class="h4 fw-7 text-primary text-center" scope="col">Disk</th>
                              <th class="h4 fw-7 text-primary text-center" scope="col">Bandwidth</th>
                              <th class="h4 fw-7 text-primary text-center" scope="col">Price</th>
                              <th class="h4 fw-7 text-primary text-center" scope="col">#</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Basic</th>
                              <td class="text-center">Intel Core i3</td>
                              <td class="text-center">2GB</td>
                              <td class="text-center">20GB</td>
                              <td class="text-center">1000GB</td>
                              <td class="text-center">$4.29</td>
                              <td class="text-center"><a class="btn order-btn" href="#">Order Now</a></td>
                            </tr>
                            <tr>
                              <th scope="row">Standard</th>
                              <td class="text-center">Intel Core i5</td>
                              <td class="text-center">4GB</td>
                              <td class="text-center">40GB</td>
                              <td class="text-center">2000GB</td>
                              <td class="text-center">$6.49</td>
                              <td class="text-center"><a class="btn order-btn" href="#">Order Now</a></td>
                            </tr>
                            <tr>
                              <th scope="row">Elite</th>
                              <td class="text-center">Intel Core i7</td>
                              <td class="text-center">6GB</td>
                              <td class="text-center">60GB</td>
                              <td class="text-center">3000GB</td>
                              <td class="text-center">$8.99</td>
                              <td class="text-center"><a class="btn order-btn" href="#">Order Now</a></td>
                            </tr>
                            <tr>
                              <th scope="row">Professional</th>
                              <td class="text-center">Intel Core i9</td>
                              <td class="text-center">8GB</td>
                              <td class="text-center">150GB</td>
                              <td class="text-center">4000GB</td>
                              <td class="text-center">$9.99</td>
                              <td class="text-center"><a class="btn order-btn" href="#">Order Now</a></td>
                            </tr>
                            <tr>
                              <th scope="row">Advanced</th>
                              <td class="text-center">Intel Core i10</td>
                              <td class="text-center">10GB</td>
                              <td class="text-center">220GB</td>
                              <td class="text-center">5000GB</td>
                              <td class="text-center">$11.49</td>
                              <td class="text-center"><a class="btn order-btn" href="#">Order Now</a></td>
                            </tr>
                            <tr>
                              <th scope="row">Business</th>
                              <td class="text-center">AMD Ryzen 5</td>
                              <td class="text-center">12GB</td>
                              <td class="text-center">500GB</td>
                              <td class="text-center">6000GB</td>
                              <td class="text-center">$13.69</td>
                              <td class="text-center"><a class="btn order-btn" href="#">Order Now</a></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Price Plan Area End ***** -->

        <!-- ***** Features Area Start ***** -->
        <section class="section features-area bg-grey ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Plan Features</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Promo -->
                        <div class="single-promo media px-3 py-4">
                            <i class="pe-7s-server pe-4x"></i>
                            <!-- Promo Content -->
                            <div class="promo-content media-body ml-3">
                                <h3 class="mb-2">SSD Disk Drives</h3>
                                <p>You can never go wrong with our own top-notch dedicated servers, loaded with the latest Intel Xeon processors, terabytes of SSD disk space and 128 GB of RAM per server.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Promo -->
                        <div class="single-promo media px-3 py-4">
                            <i class="pe-7s-cloud-download pe-4x"></i>
                            <!-- Promo Content -->
                            <div class="promo-content media-body ml-3">
                                <h3 class="mb-2">100 Mb/s Network</h3>
                                <p>We can guarantee an excellent experience and loading time for your successful online business any time and in any place.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Promo -->
                        <div class="single-promo media px-3 py-4">
                            <i class="pe-7s-gleam pe-4x"></i>
                            <!-- Promo Content -->
                            <div class="promo-content media-body ml-3">
                                <h3 class="mb-2">Dedicated IP</h3>
                                <p>One of many premium features is a dedicated IP address. Even the cheapest VPS hosting plan is fully packed with dedicated IPv4 &amp; IPv6 Internet protocols.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Promo -->
                        <div class="single-promo media px-3 py-4">
                            <i class="pe-7s-flag pe-4x"></i>
                            <!-- Promo Content -->
                            <div class="promo-content media-body ml-3">
                                <h3 class="mb-2">Full Root Access</h3>
                                <p>With full root access you will be able to take full control of your server very easy and quick. To use all the power provided effectively, you will have to have very little technical knowledge.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Promo -->
                        <div class="single-promo media px-3 py-4">
                            <i class="pe-7s-edit pe-4x"></i>
                            <!-- Promo Content -->
                            <div class="promo-content media-body ml-3">
                                <h3 class="mb-2">IPv6 Support</h3>
                                <p>Our VPS hosting plan is fully packed with dedicated IPv6 Internet protocol. By using a dedicated IP, all your scripts & extensions will work as fast as possible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Promo -->
                        <div class="single-promo media px-3 py-4">
                            <i class="pe-7s-piggy pe-4x"></i>
                            <!-- Promo Content -->
                            <div class="promo-content media-body ml-3">
                                <h3 class="mb-2">45 days money-back guarantee</h3>
                                <p>If you’re not 100% satisfied with Hostbit, we’ll refund your payment. No hassle, no risk to start your journey with Hostbit today.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Area End ***** -->

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
                                                        What is VPS?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    A VPS stands for “Virtual Private Server.” Let's break it down: as the name suggests, it is a private server, which means, that it will be exclusively yours. Having a VPS service gives you a set amount of resources that you don’t need to share with anyone. It’s kind of like having your very own dedicated or private server, but virtual. In this case, “virtual” means that it is a partition on a physical server, that is dedicated to you. This virtual server gives you the chance to gain root access, install your preferred OS and work on your project with unparalleled freedom. We take care of the back-end business, manage the physical servers, guarantee speed, uptime, and stability, while you can focus entirely on your project.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                                        What is a Virtual Dedicated Server? How is it different from VPS?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    Cloud computing is a method of using resources through a network of interlinked remote servers rather than a single, dedicated machine. Cloud computing takes advantage of the high-speed internet and by using sophisticated software, can compute various demanding applications with great efficiency. This kind of computing can manage, process and store data as a regular server. There are several significant benefits that cloud computing provides: it is incredibly flexible, seamlessly scalable, resilient and stable and allows smooth migration.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseThree">
                                                        How do I get started with VPS Hosting?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    Getting started with VPS hosting is easy with Hosting as your VPS hosting provider. Simply choose from our Standard, Enhanced, or Ultimate VPS hosting packages based on the amount of resources your website needs and follow the sign up instructions. Once you have an account, you can easily upgrade to more resources from within your customer dashboard.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseFour">
                                                        What is the real advantage of using VPS hosting?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    There are a few things that make VPS hosting the best option for specific projects. In short: if you need a lot of resources and unparalleled stability - VPS hosting is for you, but the actual answer is a little bit longer. First of all, VPS hosting gives you dedicated resources. That means you don’t need to share your CPU power, RAM or disk space. You have an allocated amount that you control at your will, entirely. The nature of virtual server hosting guarantees stability. Since all the resources are carefully managed and allocated to the users, you can rest easy knowing that any periods of high usage will not impact your server stability. Lastly, arguably the most significant advantage of VPS hosting comes at the highest price. You get root access and unparalleled control of the resources granted. That means that you can install a wide range of operating systems, work on resource-heavy projects and do much more, than with shared hosting. But sadly, the customer support team will only help you with questions relating to VPS hosting management and other back-end related queries.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item -->
                                        <div class="card bg-inherit border-top-0 border-left-0 border-right-0 border-bottom">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed px-0 py-4" type="button" data-toggle="collapse" data-target="#collapseFive">
                                                        Does VPS require a lot of technical knowledge?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseFive" class="collapse" data-parent="#sApp-accordion">
                                                <!-- Card Body -->
                                                <div class="card-body px-0 py-3">
                                                    VPS hosting services are semi-managed, which means that with some issues you’ll have to consult the knowledge base and tutorials, rather than receive help from our customer support. VPS hosting grants unmatched control of your experience. To use all the power provided effectively, you will have to have technical knowledge.
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
