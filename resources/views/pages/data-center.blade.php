@extends('layouts.app')

@section('title', 'Data Center')

@section('content')
        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="text-white mb-3">Our Data Center</h2>
                            <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi possimus, asperiores reprehenderit at excepturi iure.</p>
                            <ol class="breadcrumb d-flex justify-content-center mt-3">
                                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active">Data Center</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!--====== Data Center Area Start ======-->
        <section class="section data-center-area ptb_100">
            <div class="container">
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
