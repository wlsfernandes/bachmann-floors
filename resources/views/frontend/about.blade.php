{{-- resources/views/frontend/pages/about.blade.php --}}
@extends('frontend.layouts.app')

@section('title', __('about.meta.title'))

@section('content')

    {{-- ===============================
        ABOUT HERO / INTRO SECTION
    ================================ --}}
    <div id="about-page" class="about-section section-padding">
        <div class="container">

            <div class="row align-items-center gy-5">

                {{-- Text --}}
                <div class="col-xl-7 col-lg-7 order-2 order-lg-1">
                    <div class="about-content-wrap pe-lg-5">

                        <span class="section-subtitle">
                            {{ __('about.hero.subtitle') }}
                        </span>

                        <h2 class="mb-4 visible-slowly-right">
                            {{ __('about.hero.title') }}
                        </h2>

                        <p class="lead mb-4">
                            {{ __('about.hero.lead') }}
                        </p>

                        <p>
                            {{ __('about.hero.paragraph_1') }}
                        </p>

                        <p>
                            {{ __('about.hero.paragraph_2') }}
                        </p>

                        <div class="mt-4">
                            <a href="{{ route('contact') }}" class="theme-btn">
                                {{ __('about.hero.button') }}
                            </a>
                        </div>

                    </div>
                </div>

                {{-- Image --}}
                <div class="col-xl-5 col-lg-5 order-1 order-lg-2">
                    <div class="about-img-wrap position-relative">

                        <img src="{{ asset('assets/frontend/img/floor/carlos_bachmann.jpg') }}"
                            alt="{{ __('about.hero.image_alt') }}">

                        <div class="about-experience-box shadow">
                            <h3>2018</h3>
                            <p>{{ __('about.hero.founded_label') }}</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>


    {{-- ===============================
        QUALITY / VALUES SECTION
    ================================ --}}
    <div class="about-more section-padding pt-0">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-lg-9 text-center">
                    <span class="section-subtitle">
                        {{ __('about.quality.subtitle') }}
                    </span>

                    <h3 class="visible-slowly-right">
                        {{ __('about.quality.title') }}
                    </h3>

                    <p class="mt-3">
                        {{ __('about.quality.intro') }}
                    </p>
                </div>
            </div>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6">
                    <div class="single-service-item h-100">
                        <div class="service-content">
                            <h5>{{ __('about.quality.cards.materials.title') }}</h5>
                            <p>{{ __('about.quality.cards.materials.text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-service-item h-100">
                        <div class="service-content">
                            <h5>{{ __('about.quality.cards.craftsmanship.title') }}</h5>
                            <p>{{ __('about.quality.cards.craftsmanship.text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-service-item h-100">
                        <div class="service-content">
                            <h5>{{ __('about.quality.cards.relationship.title') }}</h5>
                            <p>{{ __('about.quality.cards.relationship.text') }}</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    {{-- ===============================
        OWNER STORY SECTION
    ================================ --}}
    <div class="about-section section-padding pt-0">
        <div class="container">

            <div class="row align-items-center gy-5">

                <div class="col-lg-5">
                    <div class="about-img-wrap">
                        <img src="{{ asset('assets/frontend/img/gallery/1.jpg') }}"
                            alt="{{ __('about.owner.image_alt') }}">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-content-wrap ps-lg-5">

                        <span class="section-subtitle">
                            {{ __('about.owner.subtitle') }}
                        </span>

                        <h3 class="mb-4 visible-slowly-right">
                            {{ __('about.owner.title') }}
                        </h3>

                        <p>
                            {{ __('about.owner.paragraph_1') }}
                        </p>

                        <p>
                            {{ __('about.owner.paragraph_2') }}
                        </p>

                        <p>
                            {{ __('about.owner.paragraph_3') }}
                        </p>

                        <p>
                            {{ __('about.owner.paragraph_4') }}
                        </p>

                        <div class="owner-values mt-4">
                            <span>{{ __('about.owner.values.integrity') }}</span>
                            <span>{{ __('about.owner.values.excellence') }}</span>
                            <span>{{ __('about.owner.values.hard_work') }}</span>
                            <span>{{ __('about.owner.values.respect') }}</span>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>


    {{-- ===============================
        TIMELINE SECTION
    ================================ --}}
    <div class="timeline-section section-padding pt-0">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <span class="section-subtitle">
                        {{ __('about.timeline.subtitle') }}
                    </span>

                    <h3 class="visible-slowly-right">
                        {{ __('about.timeline.title') }}
                    </h3>

                    <p class="mt-3">
                        {{ __('about.timeline.intro') }}
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="timeline-wrapper">

                    @foreach (__('about.timeline.items') as $index => $item)
                        <div class="timeline-item {{ $loop->odd ? 'obverse' : 'reverse' }}">
                            <div class="timeline-line-wrap">
                                <span class="timeline-line"></span>
                            </div>

                            <div class="timeline-inner">

                                <div class="time-line-point-wrap">
                                    <div class="time-line-point"></div>
                                </div>

                                @if ($loop->odd)
                                    <div class="timeline-img-wrap">
                                        <img src="{{ asset('assets/frontend/img/bachmann/' . $item['image']) }}"
                                            alt="{{ $item['title'] }}">
                                    </div>

                                    <div class="timeline-content-wrap">
                                        <span class="timeline-date">{{ $item['year'] }}</span>
                                        <h5 class="timeline-title">{{ $item['title'] }}</h5>
                                        <p class="timeline-text">{{ $item['text'] }}</p>
                                    </div>
                                @else
                                    <div class="timeline-content-wrap order-2 order-md-1">
                                        <span class="timeline-date">{{ $item['year'] }}</span>
                                        <h5 class="timeline-title">{{ $item['title'] }}</h5>
                                        <p class="timeline-text">{{ $item['text'] }}</p>
                                    </div>

                                    <div class="timeline-img-wrap order-1 order-md-2">
                                        <img src="{{ asset('assets/frontend/img/bachmann/' . $item['image']) }}"
                                            alt="{{ $item['title'] }}">
                                    </div>
                                @endif

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>


    {{-- ===============================
        MISSION SECTION
    ================================ --}}
    <div class="about-more section-padding pt-0">
        <div class="container">

            <div class="row gy-5 align-items-center">

                <div class="col-lg-6">
                    <div class="about-more-img obverse">
                        <img src="{{ asset('assets/frontend/img/about/about-more-img-1.jpg') }}"
                            alt="{{ __('about.mission.image_alt') }}">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content-wrap obverse">

                        <span class="section-subtitle">
                            {{ __('about.mission.subtitle') }}
                        </span>

                        <h3 class="mb-4 visible-slowly-right">
                            {{ __('about.mission.title') }}
                        </h3>

                        <p>
                            {{ __('about.mission.paragraph_1') }}
                        </p>

                        <p>
                            {{ __('about.mission.paragraph_2') }}
                        </p>

                        <div class="mission-list mt-4">
                            @foreach (__('about.mission.points') as $point)
                                <div class="mission-list-item">
                                    <span>✓</span>
                                    <p>{{ $point }}</p>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>


    {{-- ===============================
        COUNTER SECTION
    ================================ --}}
    <div class="counter-section section-padding pb-0">
        <div class="container">
            <div class="row gx-5 gy-4">

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-counter-box highlights">
                        <p class="counter-number">
                            <span class="purecounter" data-purecounter-duration="1" data-purecounter-end="2018">2018</span>
                        </p>
                        <h6>{{ __('about.counters.founded') }}</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number">
                            <span class="purecounter" data-purecounter-duration="1"
                                data-purecounter-end="100">100</span>+
                        </p>
                        <h6>{{ __('about.counters.projects') }}</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number">
                            <span class="purecounter" data-purecounter-duration="1" data-purecounter-end="5">5</span>★
                        </p>
                        <h6>{{ __('about.counters.service') }}</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number">
                            <span class="purecounter" data-purecounter-duration="1" data-purecounter-end="1">1</span>
                        </p>
                        <h6>{{ __('about.counters.promise') }}</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- ===============================
        PERSONAL / FAMILY SECTION
    ================================ --}}
    <div class="about-section section-padding">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">

                    <span class="section-subtitle">
                        {{ __('about.family.subtitle') }}
                    </span>

                    <h3 class="visible-slowly-right">
                        {{ __('about.family.title') }}
                    </h3>

                    <p class="mt-4">
                        {{ __('about.family.paragraph_1') }}
                    </p>

                    <p>
                        {{ __('about.family.paragraph_2') }}
                    </p>

                </div>
            </div>

        </div>
    </div>


    {{-- ===============================
        SHOWCASE SECTION
    ================================ --}}
    <div class="gallery-section showcase section-padding pt-70">
        <div class="container">

            <div class="row">
                <div class="section-title">
                    <h3 class="visible-slowly-right">
                        {{ __('about.showcase.title') }}
                    </h3>
                    <p>{{ __('about.showcase.subtitle') }}</p>
                </div>
            </div>

            <div class="row gy-4">

                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft animated"
                        data-wow-delay="{{ 200 * ((($i - 1) % 3) + 1) }}ms">

                        <a href="{{ asset('assets/frontend/img/floor/img' . $i . '.jpg') }}" data-fancybox="gallery">

                            <img src="{{ asset('assets/frontend/img/floor/img' . $i . '.jpg') }}"
                                alt="{{ __('about.showcase.image_alt') }} {{ $i }}">

                        </a>

                    </div>
                @endfor

            </div>

        </div>
    </div>


    {{-- ===============================
        FINAL CTA SECTION
    ================================ --}}
    <div class="cta-section section-padding">
        <div class="container">
            <div class="row justify-content-center text-center">

                <div class="col-lg-8">
                    <span class="section-subtitle">
                        {{ __('about.cta.subtitle') }}
                    </span>

                    <h3 class="mb-4 visible-slowly-right">
                        {{ __('about.cta.title') }}
                    </h3>

                    <p class="mb-4">
                        {{ __('about.cta.text') }}
                    </p>

                    <a href="{{ route('contact') }}" class="theme-btn">
                        {{ __('about.cta.button') }}
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection


@push('styles')
    <style>
        .section-subtitle {
            display: inline-block;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 13px;
            margin-bottom: 14px;
            opacity: .75;
        }

        .lead {
            font-size: 20px;
            line-height: 1.7;
            font-weight: 500;
        }

        .about-experience-box {
            position: absolute;
            left: -25px;
            bottom: 35px;
            background: #fff;
            padding: 24px 28px;
            border-radius: 8px;
            max-width: 180px;
        }

        .about-experience-box h3 {
            margin-bottom: 4px;
            font-size: 42px;
            line-height: 1;
        }

        .about-experience-box p {
            margin-bottom: 0;
            font-weight: 600;
        }

        .owner-values {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .owner-values span {
            display: inline-block;
            padding: 8px 14px;
            background: rgba(0, 0, 0, .06);
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
        }

        .mission-list {
            display: grid;
            gap: 12px;
        }

        .mission-list-item {
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .mission-list-item span {
            width: 26px;
            height: 26px;
            min-width: 26px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, .08);
            font-weight: 700;
        }

        .mission-list-item p {
            margin-bottom: 0;
            font-weight: 500;
        }

        .cta-section {
            background: #f7f3ee;
        }

        @media (max-width: 991px) {
            .about-experience-box {
                left: 20px;
                bottom: 20px;
            }
        }
    </style>
@endpush
