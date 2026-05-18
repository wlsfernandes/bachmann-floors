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
    <!-- About Section  -->

    <div id="about-page" class="about-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 order-2 order-md-1">
                    <div class="about-content-wrap">
                        <p>At <b>Bachmann Floors</b>, we are passionate about transforming spaces with high-quality flooring
                            solutions that blend style, durability, and functionality. With over a decade of experience, our
                            team specializes in a wide range of flooring services, including hardwood, laminate, vinyl, and
                            tile installations for both residential and commercial properties.</p>
                        <p>We take pride in our attention to detail, from helping you select the perfect materials to
                            ensuring expert installation and long-lasting results. Whether you’re looking to renovate a
                            single room or update your entire property, Bachmann Floors is dedicated to delivering top-notch
                            service, on-time project completion, and complete customer satisfaction.</p>
                        <p>From custom designs to flooring repairs and refinishing, Bachmann Floors is your trusted partner
                            in creating beautiful, durable floors that enhance the value of your home or business.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 order-1 order-md-2">
                    <div class="about-img-wrap">
                        <img src="assets/frontend/img/about/2-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Timeline Section -->
    <div class="timeline-section section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="timeline-wrapper">
                    <div class="timeline-item obverse">
                        <div class="timeline-line-wrap">
                            <span class="timeline-line"></span>
                        </div>
                        <div class="timeline-inner">
                            <div class="time-line-point-wrap">
                                <div class="time-line-point"></div>
                            </div>
                            <div class="timeline-img-wrap">
                                <img src="assets/frontend/img/timeline/1.jpg" alt="">
                            </div>
                            <div class="timeline-content-wrap">
                                <span class="timeline-date">2010</span>
                                <h5 class="timeline-title">Founding Year</h5>
                                <p class="timeline-text">Inception: Florz was founded by a team of flooring enthusiasts with
                                    a vision to redefine flooring solutions for homeowners and businesses alike. Their goal
                                    was to combine quality materials with exceptional service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item reverse">
                        <div class="timeline-line-wrap">
                            <span class="timeline-line"></span>
                        </div>
                        <div class="timeline-inner">
                            <div class="time-line-point-wrap">
                                <div class="time-line-point"></div>
                            </div>
                            <div class="timeline-content-wrap order-2 order-md-1">
                                <span class="timeline-date">2013</span>
                                <h5 class="timeline-title">Initial Launch</h5>
                                <p class="timeline-text">Business Setup: Florz established its headquarters in New York,
                                    partnering with top manufacturers to offer a diverse range of flooring products,
                                    including hardwood, laminate, vinyl, and tile.</p>
                            </div>
                            <div class="timeline-img-wrap order-1 order-md-2">
                                <img src="assets/frontend/img/timeline/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item obverse">
                        <div class="timeline-line-wrap">
                            <span class="timeline-line"></span>
                        </div>
                        <div class="timeline-inner">
                            <div class="time-line-point-wrap">
                                <div class="time-line-point"></div>
                            </div>
                            <div class="timeline-img-wrap">
                                <img src="assets/frontend/img/timeline/3.jpg" alt="">
                            </div>
                            <div class="timeline-content-wrap">
                                <span class="timeline-date">2015</span>
                                <h5 class="timeline-title">Growth and Community Recognition</h5>
                                <p class="timeline-text">Market Expansion: As demand grew, Florz expanded its product
                                    offerings to include eco-friendly flooring options, catering to environmentally
                                    conscious consumers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item reverse">
                        <div class="timeline-line-wrap">
                            <span class="timeline-line"></span>
                        </div>
                        <div class="timeline-inner">
                            <div class="time-line-point-wrap">
                                <div class="time-line-point"></div>
                            </div>
                            <div class="timeline-content-wrap order-2 order-md-1">
                                <span class="timeline-date">2017</span>
                                <h5 class="timeline-title">Service Diversification</h5>
                                <p class="timeline-text">New Services: Launched additional services such as flooring
                                    consultations, custom design solutions, and installation services, enhancing the overall
                                    customer experience.</p>
                            </div>
                            <div class="timeline-img-wrap order-1 order-md-2">
                                <img src="assets/frontend/img/timeline/4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item obverse">
                        <div class="timeline-line-wrap">
                            <span class="timeline-line"></span>
                        </div>
                        <div class="timeline-inner">
                            <div class="time-line-point-wrap">
                                <div class="time-line-point"></div>
                            </div>
                            <div class="timeline-img-wrap">
                                <img src="assets/frontend/img/timeline/5.jpg" alt="">
                            </div>
                            <div class="timeline-content-wrap">
                                <span class="timeline-date">2022</span>
                                <h5 class="timeline-title">Strategic Partnerships</h5>
                                <p class="timeline-text">Collaboration: Built strong partnerships with real estate
                                    developers and interior designers, leading to significant commercial projects and larger
                                    residential contracts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About More  -->
    <div class="about-more">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h4>Elevate your home’s aesthetic with floors that blend elegance, durability, and modern design—crafted
                        to last and transform every space beautifully.</h4>
                </div>
            </div>
            <div class="row gy-4 mt-40">
                <div class="col-lg-6 col-md-6">
                    <div class="about-more-img obverse">
                        <img src="assets/frontend/img/about/about-more-img-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-content-wrap obverse">
                        <p>At <b>Bachmann Floors</b>, our mission is to deliver exceptional flooring solutions tailored to
                            our clients’ unique needs and styles. We are committed to providing high-quality materials and
                            expert installation services while fostering a seamless and enjoyable customer experience.
                            Through integrity, innovation, and a dedication to craftsmanship, we strive to enhance every
                            space we touch, ensuring durability and beauty in every project. Our goal is to build lasting
                            relationships with our clients, contributing to the transformation of their environments with
                            flooring that inspires.</p>
                        <p>We aim to set the standard for excellence in craftsmanship and customer service while promoting
                            environmentally responsible practices in every project we undertake.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Counter Section -->
    <div class="counter-section section-padding pb-0">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-counter-box highlights">
                        <p class="counter-number"><span class="purecounter" data-purecounter-duration="1"
                                data-purecounter-end="1995">1995</span></p>
                        <h6>Since</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number"><span class="purecounter" data-purecounter-duration="1"
                                data-purecounter-end="16">16</span></p>
                        <h6>Offices</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number"><span class="purecounter" data-purecounter-duration="1"
                                data-purecounter-end="215">215</span></p>
                        <h6>Projects</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number"><span class="purecounter" data-purecounter-duration="1"
                                data-purecounter-end="47">47</span></p>
                        <h6>Countries</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="gallery-section showcase section-padding pt-70">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h3 class="visible-slowly-right">Showcase</h3>
                    <p>Flooring Installation for Homes and Businesses</p>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated" data-wow-delay="200ms">
                    <a href="assets/frontend/img/gallery/g-1.jpg" data-fancybox="gallery">
                        <img src="assets/frontend/img/gallery/g-1.jpg" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated" data-wow-delay="400ms">
                    <a href="assets/frontend/img/gallery/g-2.jpg" data-fancybox="gallery">
                        <img src="assets/frontend/img/gallery/g-2.jpg" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated" data-wow-delay="600ms">
                    <a href="assets/frontend/img/gallery/g-3.jpg" data-fancybox="gallery">
                        <img src="assets/frontend/img/gallery/g-3.jpg" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated" data-wow-delay="200ms">
                    <a href="assets/frontend/img/gallery/g-4.jpg" data-fancybox="gallery">
                        <img src="assets/frontend/img/gallery/g-4.jpg" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated" data-wow-delay="400ms">
                    <a href="assets/frontend/img/gallery/g-5.jpg" data-fancybox="gallery">
                        <img src="assets/frontend/img/gallery/g-5.jpg" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated" data-wow-delay="600ms">
                    <a href="assets/frontend/img/gallery/g-6.jpg" data-fancybox="gallery">
                        <img src="assets/frontend/img/gallery/g-6.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection
