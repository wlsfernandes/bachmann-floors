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

    <!-- Service Section -->
    <div id="service-3" class="service-page service-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="section-title">
                        <h2 class="visible-slowly-right">Flooring Installation for <br> Homes and Businesses</h2>
                        <p class="pt-20">We provide professional flooring installation, repair, refinishing, maintenance,
                            and custom design services for homes and businesses.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5 text-md-end">
                    <a href="{{ url('services') }}" class="bordered-btn">View All Services <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <div class="service-img-wrap wow img-custom-anim-left" data-wow-delay=".3s">
                        <img src="assets/frontend/img/service/service-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-md-6 col-sm-6 wow fadeInUp animated" data-wow-delay="200ms">
                            <div class="single-service-item">
                                <img src="assets/frontend/img/service/4-1.jpg" alt="">
                                <div class="service-info">
                                    <span>Premium Flooring</span>
                                    <h6>Flooring Installation</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 wow fadeInUp animated" data-wow-delay="400ms pt-60">
                            <div class="single-service-item">
                                <img src="assets/frontend/img/service/4-2.jpg" alt="">
                                <div class="service-info">
                                    <span>Premium Flooring</span>
                                    <h6>Flooring Installation</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 wow fadeInUp animated" data-wow-delay="600ms pt-m-60">
                            <div class="single-service-item">
                                <img src="assets/frontend/img/service/4-3.jpg" alt="">
                                <div class="service-info">
                                    <span>Premium Flooring</span>
                                    <h6>Flooring Installation</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 wow fadeInUp animated" data-wow-delay="800ms">
                            <div class="single-service-item">
                                <img src="assets/frontend/img/service/4-4.jpg" alt="">
                                <div class="service-info">
                                    <span>Premium Flooring</span>
                                    <h6>Flooring Installation</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-120">
                <div class="col-lg-6">
                    <div class="cp-custom-accordion">
                        <div class="accordions" id="accordionExample">
                            <div class="accordion-items">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-buttons" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#serviceOne" aria-expanded="true" aria-controls="serviceOne">
                                        Flooring Installation
                                    </button>
                                </h2>
                                <div id="serviceOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Flooring installation for a company like Bachmann Floors typically involves the process of
                                        laying down flooring materials in residential, commercial, or industrial spaces.
                                        Bachmann Floors could provide a variety of flooring options, such as hardwood, laminate,
                                        tile, carpet, or vinyl, each with its own installation techniques and
                                        considerations.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-items">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#serviceTwo" aria-expanded="false" aria-controls="serviceTwo">
                                        Flooring Installation
                                    </button>
                                </h2>
                                <div id="serviceTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Flooring installation for a company like Bachmann Floors typically involves the process of
                                        laying down flooring materials in residential, commercial, or industrial spaces.
                                        Bachmann Floors could provide a variety of flooring options, such as hardwood, laminate,
                                        tile, carpet, or vinyl, each with its own installation techniques and
                                        considerations.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-items">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#serviceThree" aria-expanded="false" aria-controls="serviceThree">
                                        Floor Repairs
                                    </button>
                                </h2>
                                <div id="serviceThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Flooring installation for a company like Bachmann Floors typically involves the process of
                                        laying down flooring materials in residential, commercial, or industrial spaces.
                                        Bachmann Floors could provide a variety of flooring options, such as hardwood, laminate,
                                        tile, carpet, or vinyl, each with its own installation techniques and
                                        considerations.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-items">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#serviceFour" aria-expanded="false" aria-controls="serviceFour">
                                        Floor Refinishing
                                    </button>
                                </h2>
                                <div id="serviceFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Flooring installation for a company like Bachmann Floors typically involves the process of
                                        laying down flooring materials in residential, commercial, or industrial spaces.
                                        Bachmann Floors could provide a variety of flooring options, such as hardwood, laminate,
                                        tile, carpet, or vinyl, each with its own installation techniques and
                                        considerations.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-img-wrap wow img-custom-anim-right" data-wow-delay=".3s">
                        <img src="assets/frontend/img/service/service-img-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
