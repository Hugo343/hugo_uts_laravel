<!--====== Preloader Area Start ======-->
<div id="preloader">
    <!-- Hostbit Preloader -->
    <div id="hostbit-preloader" class="hostbit-preloader">
        <div class="preloader-animation">
            <div class="spinner"></div>
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
        <div class="loader-animation">
            <div class="row h-100">
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
                <!-- Tambahan kolom loader lainnya kalau ada -->
            </div>
        </div>
    </div>
</div>
<!--====== Preloader Area End ======-->

<header id="header">
            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">
                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="{{ route('home' ) }}">
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
                                    <a href="{{ route('hosting.wordpress' ) }}" class="nav-link d-inline-flex">
                                        <i class="icon-home media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            WordPress Hosting
                                            <small class="d-block mt-1">Optimized solution for WordPress hosting</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('hosting.ecommerce' ) }}" class="nav-link d-inline-flex">
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
                                    <a href="{{ route('hosting.shared' ) }}" class="nav-link d-inline-flex">
                                        <i class="icon-organization media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Shared Hosting
                                            <small class="d-block mt-1">For small to medium websites</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('hosting.vps' ) }}" class="nav-link d-inline-flex">
                                        <i class="icon-fire media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            VPS Hosting
                                            <small class="d-block mt-1">Dedicated resources to scale</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('hosting.email' ) }}" class="nav-link d-inline-flex">
                                        <i class="icon-envelope-open media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Email Hosting
                                            <small class="d-block mt-1">Promote your business with every outreach</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('hosting.dedicated' ) }}" class="nav-link d-inline-flex">
                                        <i class="icon-globe media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Dedicated Hosting
                                            <small class="d-block mt-1">Optimized for dedicated web server</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('hosting.cloud' ) }}" class="nav-link d-inline-flex">
                                        <i class="icon-cloud-upload media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Cloud Hosting
                                            <small class="d-block mt-1">For large scale projects</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('hosting.reseller' ) }}" class="nav-link d-inline-flex">
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
                                    <a href="{{ route('domain.checker' ) }}" class="nav-link d-inline-flex">
                                        <i class="icon-magnifier media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Domain Checker
                                            <small class="d-block mt-1">Find a perfect domain name</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('domain.transfer' ) }}" class="nav-link d-inline-flex">
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
                                            <a href="{{ route('domain.checker' ) }}" class="nav-link d-inline-flex">
                                                <i class="icon-magnifier media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Domain Checker
                                                    <small class="d-block mt-1">Find a perfect domain name</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('domain.transfer' ) }}" class="nav-link d-inline-flex">
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
                                            <a href="{{ route('hosting.shared' ) }}" class="nav-link d-inline-flex">
                                                <i class="icon-organization media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Shared Hosting
                                                    <small class="d-block mt-1">For small to medium websites</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('hosting.vps' ) }}" class="nav-link d-inline-flex">
                                                <i class="icon-fire media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    VPS Hosting
                                                    <small class="d-block mt-1">Dedicated resources to scale</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('hosting.email' ) }}" class="nav-link d-inline-flex">
                                                <i class="icon-envelope-open media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Email Hosting
                                                    <small class="d-block mt-1">Promote your business with outreach</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('hosting.dedicated' ) }}" class="nav-link d-inline-flex">
                                                <i class="icon-globe media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Dedicated Hosting
                                                    <small class="d-block mt-1">Optimized for dedicated web server</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('hosting.cloud' ) }}" class="nav-link d-inline-flex">
                                                <i class="icon-cloud-upload media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Cloud Hosting
                                                    <small class="d-block mt-1">For large scale projects</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('hosting.reseller' ) }}" class="nav-link d-inline-flex">
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
                                            <a href="{{ route('hosting.wordpress' ) }}" class="nav-link d-inline-flex">
                                                <i class="icon-home media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    WordPress Hosting
                                                    <small class="d-block mt-1">Optimized solution for WordPress</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('hosting.ecommerce' ) }}" class="nav-link d-inline-flex">
                                                <i class="icon-basket-loaded media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    eCommerce Hosting
                                                    <small class="d-block mt-1">Built for Online stores</small>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="{{ route('data.center' ) }}" class="nav-link">Data Center</a></li>
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