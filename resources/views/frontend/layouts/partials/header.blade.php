<div id="loader"></div>

<!-- Mouse Cursor -->
<div class="mouseCursor cursor-outer"></div>
<div class="mouseCursor cursor-inner"><span>Drag</span></div>

<!-- Header Area -->
<div id="header-1" class="header-area absolute-header">
    <div id="header-sticky">
        <div class="navigation">
            <div class="container-fluid">
                <div class="header-inner-box">

                    <!-- Main Menu  -->
                    <div class="main-menu d-none d-lg-block">
                        <ul>
                            <li class="active"><a class="navlink" href="{{ url('/') }}">@lang('home.home')</a></li>
                            <li><a class="navlink" href="{{ url('about') }}">@lang('home.about_us')</a>
                            </li>
                            <li><a class="navlink" href="{{ url('services') }}">@lang('home.services')</a>
                            </li>
                            <li><a class="navlink" href="{{ url('projects') }}">@lang('home.projects_menu')</a>

                            </li>
                            <li><a class="navlink" href="{{ url('contact') }}">@lang('home.contact')</a></li>
                        </ul>
                    </div>

                    <!-- Logo -->
                    <div class="logo">
                        <a class="navbar-brand" href="{{ url('/') }}" aria-label="Bachmann Floors Home">
                            <img src="{{ asset('assets/frontend/img/logo/bachmannfloors.webp') }}"
                                alt="Bachmann Floors Logo" class="img-fluid">
                        </a>
                    </div>

                    <div class="header-right">

                        <!-- Search Button -->
                        <ul class="header-tools">

                            <li>
                                <a href="{{ route('lang.switch', 'en') }}">
                                    <img src="{{ asset('/assets/admin/images/flags/us.jpg') }}" alt="English">
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('lang.switch', 'es') }}">
                                    <img src="{{ asset('/assets/admin/images/flags/spain.jpg') }}" alt="Español">
                                </a>
                            </li>


                            <li><span></span></li>

                        </ul>

                        <div class="contact-number d-none">
                            <div class="icon">
                                <i class="las la-phone-volume"></i>
                            </div>
                            <div class="title">
                                <h4>+1 (404) 207-4320</h4>
                            </div>
                        </div>

                        <div class="header-btn">
                            <div class="menu-trigger">
                                <span class="lines"></span>
                                <span class="lines"></span>
                                <span class="lines"></span>
                            </div>
                        </div>

                    </div>

                    <!-- Mobile Menu -->
                    <div class="mobile-nav-bar d-block col-sm-1 col-6 d-lg-none">

                        <div class="mobile-nav-wrap">

                            <div id="hamburger">
                                <i class="las la-bars"></i>
                            </div>

                            <div class="mobile-nav">

                                <button type="button" class="close-nav">
                                    <i class="las la-times-circle"></i>
                                </button>

                                <nav class="sidebar-nav">

                                    <ul class="metismenu" id="mobile-menu">

                                        <li>
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('/about') }}">About</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('/services') }}">Services</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('/projects') }}">Projects</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('/blog') }}">Blog</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('/contact') }}">Contact</a>
                                        </li>

                                    </ul>

                                </nav>

                                <div class="action-bar">
                                    <a href="mailto:bachmannfloors@gmail.com">
                                        <i class="las la-envelope"></i> bachmannfloors@gmail.com
                                    </a>

                                    <a href="tel:+1 (404) 207-4320">
                                        <i class="fal fa-phone"></i> +1 (404) 207-4320
                                    </a>

                                    <a href="{{ url('/contact') }}" class="theme-btn">
                                        Contact Us
                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
