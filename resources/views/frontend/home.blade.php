{{-- resources/views/frontend/pages/home.blade.php --}}
@extends('frontend.layouts.app')

@section('title', __('home.meta.title'))

@section('content')

    {{-- SUCCESS ALERT --}}
    @if (session('success'))
        <div class="container mt-3">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    {{-- HERO / BANNERS --}}
    @include('frontend.partials.banners')


    {{-- ===============================
        OFF-CANVAS AREA
    ================================ --}}
    <div class="extra-info">
        <div class="close-icon menu-close">
            <button>
                <i class="las la-times"></i>
            </button>
        </div>

        <div class="logo-side">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/frontend/img/logo-white.png') }}" alt="{{ __('home.brand.name') }}">
                </a>
            </div>
        </div>

        <div class="side-info">
            <div class="contact-list mb-40">
                <p>{{ __('home.offcanvas.text') }}</p>

                <img src="{{ asset('assets/frontend/img/off-canvas.jpg') }}" alt="{{ __('home.offcanvas.image_alt') }}">

                <div class="mt-30 mb-30">
                    <a href="{{ url('contact') }}" class="white-btn">
                        {{ __('home.offcanvas.button') }}
                    </a>
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


    {{-- ===============================
        TRUST INTRO SECTION
    ================================ --}}
    <div class="home-intro-section section-padding pb-0">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-9 col-lg-10">

                    <span class="section-subtitle">
                        {{ __('home.intro.subtitle') }}
                    </span>

                    <h2 class="visible-slowly-right">
                        {{ __('home.intro.title') }}
                    </h2>

                    <p class="lead mt-4">
                        {{ __('home.intro.lead') }}
                    </p>

                </div>
            </div>
        </div>
    </div>


    {{-- SERVICES PARTIAL --}}
    @include('frontend.partials.services')


    {{-- ABOUT PARTIAL --}}
    @include('frontend.partials.about')
    {{-- ===============================
    LOCAL MARIETTA / FAMILY SERVICE AREA
================================ --}}
    <div class="local-home-section section-padding">
        <div class="container">

            <div class="row gy-5 align-items-center">

                {{-- Left Content --}}
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content-wrap local-home-content">

                        <span class="section-subtitle">
                            {{ __('home.local.subtitle') }}
                        </span>

                        <h2 class="visible-slowly-right">
                            {!! __('home.local.title') !!}
                        </h2>

                        <p class="mt-4">
                            {{ __('home.local.paragraph_1') }}
                        </p>

                        <p>
                            {{ __('home.local.paragraph_2') }}
                        </p>

                        <div class="local-service-list mt-4">
                            @foreach (__('home.local.areas') as $area)
                                <span>{{ $area }}</span>
                            @endforeach
                        </div>

                        <div class="mt-40">
                            <a href="{{ url('contact') }}" class="theme-btn">
                                {{ __('home.local.button') }}
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div>

                {{-- Right Visual --}}
                <div class="col-xl-6 col-lg-6">
                    <div class="local-visual-wrap wow img-custom-anim-right" data-wow-delay=".3s">

                        <div class="local-main-img">
                            <img src="{{ asset('assets/frontend/img/about/car.jpg') }}"
                                alt="{{ __('home.local.image_alt') }}">
                        </div>

                        <div class="local-floating-card local-card-one">
                            <h5>{{ __('home.local.card_1_title') }}</h5>
                            <p>{{ __('home.local.card_1_text') }}</p>
                        </div>

                        <div class="local-floating-card local-card-two">
                            <h5>{{ __('home.local.card_2_title') }}</h5>
                            <p>{{ __('home.local.card_2_text') }}</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    {{-- ===============================
        WHY CHOOSE US SECTION
    ================================ --}}
    <div class="why-section section-padding pt-0">
        <div class="container">

            <div class="row align-items-end mb-5">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title">
                        <span class="section-subtitle">
                            {{ __('home.why.subtitle') }}
                        </span>

                        <h2 class="visible-slowly-right">
                            {{ __('home.why.title') }}
                        </h2>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-5 text-lg-end">
                    <p class="mb-0">
                        {{ __('home.why.description') }}
                    </p>
                </div>
            </div>

            <div class="row gy-4">
                @foreach (__('home.why.items') as $item)
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp animated"
                        data-wow-delay="{{ 200 * $loop->iteration }}ms">

                        <div class="home-feature-card h-100">
                            <div class="home-feature-number">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </div>

                            <h5>{{ $item['title'] }}</h5>
                            <p>{{ $item['text'] }}</p>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </div>


    {{-- ===============================
        GALLERY SECTION
    ================================ --}}
    <div class="gallery-section gray-bg section-padding">
        <div class="container">

            <div class="row align-items-end mb-5">
                <div class="col-lg-7">
                    <div class="section-title">
                        <span class="section-subtitle">
                            {{ __('home.gallery.subtitle') }}
                        </span>

                        <h2 class="visible-slowly-right">
                            {{ __('home.gallery.title') }}
                        </h2>
                    </div>
                </div>

                <div class="col-lg-5 text-lg-end">
                    <p class="mb-0">
                        {{ __('home.gallery.text') }}
                    </p>
                </div>
            </div>

            <div class="row gy-4">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated"
                        data-wow-delay="{{ 200 * ((($i - 1) % 3) + 1) }}ms">

                        <a href="{{ asset('assets/frontend/img/gallery/' . $i . '.jpg') }}" data-fancybox="gallery">

                            <img src="{{ asset('assets/frontend/img/gallery/' . $i . '.jpg') }}"
                                alt="{{ __('home.gallery.image_alt') }} {{ $i }}">

                        </a>
                    </div>
                @endfor
            </div>

        </div>
    </div>


    {{-- PROJECTS PARTIAL --}}
    @include('frontend.partials.projects')


    {{-- ===============================
        PROCESS SECTION
    ================================ --}}
    <div id="process-1" class="process-section section-padding pt-0 pb-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-5 col-lg-6 col-md-7">
                    <div class="section-title">
                        <span class="section-subtitle">
                            {{ __('home.process.subtitle') }}
                        </span>

                        <h2 class="visible-slowly-right">
                            {{ __('home.process.title') }}
                        </h2>

                        <p class="pt-20 wow fadeInUp animated" data-wow-delay=".4s">
                            {{ __('home.process.text') }}
                        </p>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-6 col-md-5 text-md-end">
                    <a href="{{ url('contact') }}" class="bordered-btn">
                        {{ __('home.process.button') }}
                        <i class="fa-light fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-30 process-bg-wrap align-items-center justify-content-center"
            data-background="{{ asset('assets/frontend/img/process-bg.jpg') }}">

            @foreach (__('home.process.steps') as $step)
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft animated"
                    data-wow-delay="{{ 200 * $loop->iteration }}ms">

                    <div class="single-process-item">
                        <div class="process-icon">
                            <img src="{{ asset('assets/frontend/img/process/' . $step['icon']) }}"
                                alt="{{ $step['title'] }}">

                            <span class="step-count">{{ $loop->iteration }}.</span>

                            @if (!$loop->last)
                                <div class="process-line d-none d-md-inline-block"></div>
                            @endif
                        </div>

                        <div class="process-title">
                            <h5>{{ $step['title'] }}</h5>
                        </div>

                        <div class="process-content">
                            <p>{{ $step['text'] }}</p>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>


    {{-- ===============================
        FAMILY-OWNED PROMISE SECTION
    ================================ --}}
    <div class="family-promise-section section-padding">
        <div class="container">
            <div class="row gy-5 align-items-center">

                <div class="col-lg-6">
                    <div class="about-more-img obverse">
                        <img src="{{ asset('assets/frontend/img/about/about-more-img-1.jpg') }}"
                            alt="{{ __('home.promise.image_alt') }}">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content-wrap ps-lg-5">

                        <span class="section-subtitle">
                            {{ __('home.promise.subtitle') }}
                        </span>

                        <h2 class="visible-slowly-right">
                            {{ __('home.promise.title') }}
                        </h2>

                        <p class="mt-4">
                            {{ __('home.promise.paragraph_1') }}
                        </p>

                        <p>
                            {{ __('home.promise.paragraph_2') }}
                        </p>

                        <div class="promise-list mt-4">
                            @foreach (__('home.promise.points') as $point)
                                <div class="promise-list-item">
                                    <span>✓</span>
                                    <p>{{ $point }}</p>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-4">
                            <a href="{{ url('about') }}" class="bordered-btn">
                                {{ __('home.promise.button') }}
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- ===============================
        TESTIMONIAL SECTION
    ================================ --}}
    <div class="testimonial-section section-padding pt-0">
        <div class="container">

            <div class="row align-items-end">
                <div class="col-xl-5 col-lg-6 col-md-7">
                    <div class="section-title">
                        <span class="section-subtitle">
                            {{ __('home.testimonials.subtitle') }}
                        </span>

                        <h2 class="visible-slowly-right">
                            {{ __('home.testimonials.title') }}
                        </h2>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-6 col-md-5 text-md-end">
                    <a href="{{ url('services') }}" class="bordered-btn">
                        {{ __('home.testimonials.button') }}
                        <i class="fa-light fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="testimonial-one owl-carousel">

                    @foreach (__('home.testimonials.items') as $testimonial)
                        <div class="single-testimonial-item">
                            <div class="testimonial-quote">
                                <img src="{{ asset('assets/frontend/img/quote.png') }}" alt="">
                            </div>

                            <div class="testimonial-content">
                                <div class="testimonial-text">
                                    <p>{{ $testimonial['text'] }}</p>
                                </div>

                                <div class="testimonial-author">
                                    <h5>{{ $testimonial['name'] }}</h5>
                                    <span>{{ $testimonial['label'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>


    {{-- ===============================
        SMALL TEAM / OWNER SECTION
    ================================ --}}
    {{--    <div class="team-section section-padding pt-0 pb-90">
        <div class="container">

            <div class="row align-items-end">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="section-title">
                        <span class="section-subtitle">
                            {{ __('home.team.subtitle') }}
                        </span>

                        <h2 class="visible-slowly-right">
                            {{ __('home.team.title') }}
                        </h2>
                    </div>

                    <p class="wow fadeInUp animated" data-wow-delay=".4s">
                        {{ __('home.team.text') }}
                    </p>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-5 text-md-end">
                    <a href="{{ url('about') }}" class="bordered-btn">
                        {{ __('home.team.button') }}
                        <i class="fa-light fa-arrow-right"></i>
                    </a>
                </div>
            </div>

              <div class="row mt-30 gy-4">

                @foreach (__('home.team.values') as $value)
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp animated"
                        data-wow-delay="{{ 200 * $loop->iteration }}ms">

                        <div class="single-team-item home-value-item">
                            <div class="team-img">
                                <img src="{{ asset('assets/frontend/img/team/' . $value['image']) }}"
                                    alt="{{ $value['title'] }}">
                            </div>

                            <div class="team-info">
                                <span>{{ $value['label'] }}</span>
                                <h5>{{ $value['title'] }}</h5>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </div>
    --}}

    {{-- ===============================
        BLOG / EDUCATION SECTION
    ================================ --}}
    <div id="blog-1" class="blog-section section-padding pt-0 pb-90">
        <div class="container">

            <div class="row align-items-end">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="section-title">
                        <span class="section-subtitle">
                            {{ __('home.education.subtitle') }}
                        </span>

                        <h2 class="visible-slowly-right">
                            {{ __('home.education.title') }}
                        </h2>
                    </div>

                    <p class="wow fadeInUp animated" data-wow-delay=".4s">
                        {{ __('home.education.text') }}
                    </p>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-5 text-md-end">
                    <a href="{{ url('contact') }}" class="bordered-btn">
                        {{ __('home.education.button') }}
                        <i class="fa-light fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="row mt-60">
                @foreach (__('home.education.items') as $item)
                    <div class="col-lg-6 col-md-12 wow fadeInUp animated"
                        data-wow-delay="{{ 200 * $loop->iteration }}ms">

                        <div class="single-blog-item">
                            <div class="blog-title">
                                <h5>
                                    <a href="{{ url('contact') }}">
                                        {{ $item['title'] }}
                                    </a>
                                </h5>
                            </div>

                            <div class="blog-content">
                                <p>{{ $item['text'] }}</p>
                            </div>

                            <a href="{{ url('contact') }}" class="read-more-btn bordered-btn">
                                {{ __('home.education.read_more') }}
                            </a>

                            @if (!$loop->last)
                                <hr>
                            @endif
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </div>


    {{-- ===============================
        FINAL CTA
    ================================ --}}
    <div class="home-final-cta section-padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-lg-9">

                    <span class="section-subtitle">
                        {{ __('home.cta.subtitle') }}
                    </span>

                    <h2 class="visible-slowly-right">
                        {{ __('home.cta.title') }}
                    </h2>

                    <p class="mt-4 mb-4">
                        {{ __('home.cta.text') }}
                    </p>

                    <a href="{{ url('contact') }}" class="theme-btn">
                        {{ __('home.cta.button') }}
                    </a>

                </div>
            </div>
        </div>
    </div>


    {{-- SEARCH DROPDOWN --}}
    <div class="search-popup">
        <span class="search-back-drop"></span>

        <div class="search-inner">
            <div class="container">
                <div class="logo">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/frontend/img/logo-white.png') }}" alt="{{ __('home.brand.name') }}">
                    </a>
                </div>

                <button class="close-search">
                    <span class="la la-times"></span>
                </button>

                <form method="get" action="{{ url('/') }}">
                    <div class="form-group">
                        <input type="search" name="search" value=""
                            placeholder="{{ __('home.search.placeholder') }}">
                        <button type="submit">
                            <i class="fal fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- BACK TO TOP --}}
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

@endsection


@push('styles')
    <style>
        .section-subtitle {
            display: inline-block;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.4px;
            font-size: 13px;
            margin-bottom: 14px;
            opacity: .75;
        }

        .lead {
            font-size: 20px;
            line-height: 1.7;
            font-weight: 500;
        }

        .home-feature-card {
            background: #fff;
            padding: 34px 28px;
            border-radius: 8px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, .06);
            transition: all .3s ease;
            position: relative;
            overflow: hidden;
        }

        .home-feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 45px rgba(0, 0, 0, .10);
        }

        .home-feature-number {
            font-size: 48px;
            line-height: 1;
            font-weight: 800;
            opacity: .10;
            margin-bottom: 22px;
        }

        .home-feature-card h5 {
            margin-bottom: 14px;
        }

        .home-feature-card p {
            margin-bottom: 0;
        }

        .family-promise-section {
            background: #f7f3ee;
        }

        .promise-list {
            display: grid;
            gap: 12px;
        }

        .promise-list-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .promise-list-item span {
            width: 26px;
            min-width: 26px;
            height: 26px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, .08);
            font-weight: 700;
        }

        .promise-list-item p {
            margin-bottom: 0;
            font-weight: 500;
        }

        .home-value-item .team-info span {
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 12px;
        }

        .home-final-cta {
            background: #111;
            color: #fff;
        }

        .home-final-cta h2,
        .home-final-cta p,
        .home-final-cta .section-subtitle {
            color: #fff;
        }

        .local-home-section {
            background: #f7f3ee;
            position: relative;
            overflow: hidden;
        }

        .local-home-content p {
            font-size: 17px;
            line-height: 1.8;
        }

        .local-service-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .local-service-list span {
            display: inline-flex;
            align-items: center;
            padding: 9px 15px;
            background: #fff;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 700;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .06);
        }

        .local-service-list span::before {
            content: "•";
            margin-right: 8px;
            font-size: 18px;
            line-height: 1;
        }

        .local-visual-wrap {
            position: relative;
            padding: 30px;
        }

        .local-main-img img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 20px 55px rgba(0, 0, 0, .14);
        }

        .local-floating-card {
            position: absolute;
            background: #fff;
            padding: 22px 24px;
            border-radius: 10px;
            max-width: 260px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .13);
        }

        .local-floating-card h5 {
            margin-bottom: 8px;
            font-size: 18px;
        }

        .local-floating-card p {
            margin-bottom: 0;
            font-size: 14px;
            line-height: 1.6;
        }

        .local-card-one {
            top: 5px;
            left: 0;
        }

        .local-card-two {
            right: 0;
            bottom: 5px;
        }

        @media (max-width: 991px) {
            .local-visual-wrap {
                padding: 0;
            }

            .local-floating-card {
                position: relative;
                max-width: 100%;
                margin-top: 18px;
            }

            .local-card-one,
            .local-card-two {
                top: auto;
                left: auto;
                right: auto;
                bottom: auto;
            }
        }
    </style>
@endpush
