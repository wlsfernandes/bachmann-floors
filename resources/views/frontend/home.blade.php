{{-- resources/views/frontend/pages/home.blade.php --}}
@extends('frontend.layouts.app')

@section('title', 'Home | Bachmann Floors')

@section('content')
    {{-- SUCCESS ALERT --}}
    @if (session('success'))
        <div class="container mt-3">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @include('frontend.partials.banners')

    <!-- Off-canvas Area-->
    <div class="extra-info">
        <div class="close-icon menu-close">
            <button>
                <i class="las la-times"></i>
            </button>
        </div>
        <div class="logo-side">
            <div class="logo">
                <a href="index.html"><img src="assets/frontend/img/logo-white.png" alt=""></a>
            </div>
        </div>
        <div class="side-info">
            <div class="contact-list mb-40">
                <p>Welcome to Bachmann Floors, A Full Service of Flooring and Tilling Works. </p>
                <img src="assets/frontend/img/off-canvas.jpg" alt="">

                <div class="mt-30 mb-30">
                    <a href="{{ url('contact') }}" class="white-btn">Get In Touch</a>
                </div>
            </div>
            <div class="social-area-wrap">
                <a href="#"><i class="lab la-facebook-f"></i></a>
                <a href="#"><i class="lab la-instagram"></i></a>
                <a href="#"><i class="lab la-linkedin-in"></i></a>
                <a href="#"><i class="lab la-skype"></i></a>
            </div>
        </div>
    </div>

    <div class="offcanvas-overlay"></div>

    @include('frontend.partials.services')

    @include('frontend.partials.about')


    <!-- Gallery Section -->
    <div class="gallery-section gray-bg section-padding">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated" data-wow-delay="200ms">
                    <a href="assets/frontend/img/gallery/1.jpg" data-fancybox="gallery">
                        <img src="assets/frontend/img/gallery/1.jpg" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated" data-wow-delay="400ms">
                    <a href="assets/frontend/img/gallery/2.jpg" data-fancybox="gallery">
                        <img src="assets/frontend/img/gallery/2.jpg" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated" data-wow-delay="600ms">
                    <a href="assets/frontend/img/gallery/3.jpg" data-fancybox="gallery">
                        <img src="assets/frontend/img/gallery/3.jpg" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated" data-wow-delay="200ms">
                    <a href="assets/frontend/img/gallery/4.jpg" data-fancybox="gallery">
                        <img src="assets/frontend/img/gallery/4.jpg" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated" data-wow-delay="400ms">
                    <a href="assets/frontend/img/gallery/5.jpg" data-fancybox="gallery">
                        <img src="assets/frontend/img/gallery/5.jpg" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated" data-wow-delay="600ms">
                    <a href="assets/frontend/img/gallery/6.jpg" data-fancybox="gallery">
                        <img src="assets/frontend/img/gallery/6.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.partials.projects')
    <!-- Process Section -->
    <div id="process-1" class="process-section section-padding pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-7">
                    <div class="section-title">
                        <h2 class="visible-slowly-right">From consultation to perfection, every time</h2>
                        <p class="pt-20 wow fadeInUp animated" data-wow-delay=".4s">Our seamless flooring process ensures
                            quality from consultation to installation, guaranteeing satisfaction every step of the way.</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-5 text-md-end">
                    <a href="{{ url('contact') }}" class="bordered-btn">Our Process <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt-30 process-bg-wrap align-items-center justify-content-center"
            data-background="assets/frontend/img/process-bg.jpg">
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft animated" data-wow-delay="200ms">
                <div class="single-process-item">
                    <div class="process-icon">
                        <img src="assets/frontend/img/process/1.png" alt="">
                        <span class="step-count">1.</span>
                        <div class="process-line d-none d-md-inline-block"></div>
                    </div>
                    <div class="process-title">
                        <h5>Consultation & meeting</h5>
                    </div>
                    <div class="process-content">
                        <p>The architecture company meets with the client to discuss their needs, budget, and timeline.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft animated" data-wow-delay="400ms">
                <div class="single-process-item">
                    <div class="process-icon">
                        <img src="assets/frontend/img/process/2.png" alt="">
                        <span class="step-count">2.</span>
                        <div class="process-line d-none d-lg-inline-block"></div>
                    </div>
                    <div class="process-title">
                        <h5>Concept design</h5>
                    </div>
                    <div class="process-content">
                        <p>Based on the client's requirements, the architecture company creates a concept design.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft animated" data-wow-delay="600ms">
                <div class="single-process-item">
                    <div class="process-icon">
                        <img src="assets/frontend/img/process/3.png" alt="">
                        <span class="step-count">3.</span>
                        <div class="process-line d-none d-md-inline-block"></div>
                    </div>
                    <div class="process-title">
                        <h5>Design development</h5>
                    </div>
                    <div class="process-content">
                        <p>The architecture company meets with the client to discuss their needs, budget, and timeline.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft animated" data-wow-delay="800ms">
                <div class="single-process-item">
                    <div class="process-icon">
                        <img src="assets/frontend/img/process/4.png" alt="">
                        <span class="step-count">4.</span>
                    </div>
                    <div class="process-title">
                        <h5>Permitting & approvals</h5>
                    </div>
                    <div class="process-content">
                        <p>The architecture company meets with the client to discuss their needs, budget, and timeline.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section -->
    <div class="testimonial-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-7">
                    <div class="section-title">
                        <h2 class="visible-slowly-right">Real Customers, Real Reviews, Real Quality!</h2>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-5 text-md-end">
                    <a href="{{ url('services') }}" class="bordered-btn">Testimonial <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-one owl-carousel">
                    <div class="single-testimonial-item">
                        <div class="testimonial-quote">
                            <img src="assets/frontend/img/quote.png" alt="">
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-text">
                                <p>I couldn’t be happier with my new hardwood floors from Florz Flooring! The team was
                                    professional, attentive, and guided me through every step of the process. The
                                    installation was seamless, and the quality of the work is outstanding. Highly recommend!
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <h5>James Clark</h5>
                                <span>CEO, Alfa Inc.</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-item">
                        <div class="testimonial-quote">
                            <img src="assets/frontend/img/quote.png" alt="">
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-text">
                                <p>I couldn’t be happier with my new hardwood floors from Florz Flooring! The team was
                                    professional, attentive, and guided me through every step of the process. The
                                    installation was seamless, and the quality of the work is outstanding. Highly recommend!
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <h5>James Clark</h5>
                                <span>CEO, Alfa Inc.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="team-section section-padding pt-0 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="section-title">
                        <h2 class="visible-slowly-right">Meet our skilled team of flooring experts</h2>
                    </div>
                    <p class="wow fadeInUp animated" data-wow-delay=".4s">We provide professional flooring installation,
                        repair, refinishing, maintenance, and custom design services for homes and businesses.</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5 text-md-end">
                    <a href="team.html" class="bordered-btn">Our Team <i class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="200ms">
                    <div class="single-team-item">
                        <div class="team-img">
                            <img src="assets/frontend/img/team/1.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <span>CTO</span>
                            <h5>Benjamin Scott</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="400ms">
                    <div class="single-team-item">
                        <div class="team-img">
                            <img src="assets/frontend/img/team/2.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <span>Director</span>
                            <h5>Anna Hallberg</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="600ms">
                    <div class="single-team-item">
                        <div class="team-img">
                            <img src="assets/frontend/img/team/3.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <span>Manager</span>
                            <h5>Deniel Lee</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="800ms">
                    <div class="single-team-item">
                        <div class="team-img">
                            <img src="assets/frontend/img/team/4.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <span>Engineer</span>
                            <h5>Sophia Ramirez</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section -->
    <div id="blog-1" class="blog-section section-padding pt-0 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="section-title">
                        <h2 class="visible-slowly-right">Fresh flooring news, insights, and updates</h2>
                    </div>
                    <p class="wow fadeInUp animated" data-wow-delay=".4s">We provide professional flooring installation,
                        repair, refinishing, maintenance, and custom design services for homes and businesses.</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5 text-md-end">
                    <a href="blog.html" class="bordered-btn">View Latest News <i class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-lg-6 col-md-12 wow fadeInUp animated" data-wow-delay="200ms">
                    <div class="single-blog-item">
                        <div class="blog-title">
                            <h5><a href="blog-details.html">Talent Management</a></h5>
                        </div>
                        <div class="blog-content">
                            <p>Talent management in the flooring industry, like in any other sector, plays a crucial role in
                                ensuring a business’</p>
                        </div>
                        <a href="blog-details.html" class="read-more-btn bordered-btn">Read More</a>
                        <hr>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp animated" data-wow-delay="400ms">
                    <div class="single-blog-item">
                        <div class="blog-title">
                            <h5><a href="blog-details.html">Sustaintable Materials</a></h5>
                        </div>
                        <div class="blog-content">
                            <p>Talent management in the flooring industry, like in any other sector, plays a crucial role in
                                ensuring a business’</p>
                        </div>
                        <a href="blog-details.html" class="read-more-btn bordered-btn">Read More</a>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp animated" data-wow-delay="600ms">
                    <div class="single-blog-item">
                        <div class="blog-title">
                            <h5><a href="blog-details.html">Technological Innovation</a></h5>
                        </div>
                        <div class="blog-content">
                            <p>Talent management in the flooring industry, like in any other sector, plays a crucial role in
                                ensuring a business’</p>
                        </div>
                        <a href="blog-details.html" class="read-more-btn bordered-btn">Read More</a>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp animated" data-wow-delay="800ms">
                    <div class="single-blog-item">
                        <div class="blog-title">
                            <h5><a href="blog-details.html">Dopamine Detox</a></h5>
                        </div>
                        <div class="blog-content">
                            <p>Talent management in the flooring industry, like in any other sector, plays a crucial role in
                                ensuring a business’</p>
                        </div>
                        <a href="blog-details.html" class="read-more-btn bordered-btn">Read More</a>

                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Old Footer (for reference) --}}

    <!-- Search Dropdown -->
    <div class="search-popup">
        <span class="search-back-drop"></span>

        <div class="search-inner">
            <div class="container">
                <div class="logo">
                    <a class="navbar-brand" href="index.html"><img src="assets/frontend/img/logo-white.png"
                            alt=""></a>
                </div>
                <button class="close-search"><span class="la la-times"></span></button>
                <form method="post" action="index.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Type your keyword"
                            required="">
                        <button type="submit"><i class="fal fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
@endsection
