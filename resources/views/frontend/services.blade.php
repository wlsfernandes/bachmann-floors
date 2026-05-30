{{-- resources/views/frontend/pages/services.blade.php --}}
@extends('frontend.layouts.app')

@section('title', __('services.meta.title'))

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

            {{-- ===============================
                PAGE INTRO
            ================================ --}}
            <div class="row align-items-end">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="section-title">
                        <h6>{{ __('services.intro.subtitle') }}</h6>

                        <h2 class="visible-slowly-right">
                            {!! __('services.intro.title') !!}
                        </h2>

                        <p class="pt-20">
                            {{ __('services.intro.text') }}
                        </p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-5 text-md-end">
                    <a href="{{ url('contact') }}" class="bordered-btn">
                        {{ __('services.intro.button') }}
                        <i class="fa-light fa-arrow-right"></i>
                    </a>
                </div>
            </div>


            {{-- ===============================
                SERVICE CARDS
            ================================ --}}
            <div class="row gy-4 align-items-center mt-4">

                <div class="col-lg-6">
                    <div class="service-img-wrap wow img-custom-anim-left" data-wow-delay=".3s">
                        <img src="{{ asset('assets/frontend/img/service/service-img.jpg') }}"
                            alt="{{ __('services.intro.image_alt') }}">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row gy-4">

                        @foreach (__('services.cards') as $card)
                            <div class="col-md-6 col-sm-6 wow fadeInUp animated {{ $card['class'] ?? '' }}"
                                data-wow-delay="{{ $card['delay'] }}">

                                <div class="single-service-item family-service-card">
                                    <img src="{{ asset('assets/frontend/img/service/' . $card['image']) }}"
                                        alt="{{ $card['title'] }}">

                                    <div class="service-info">
                                        <span>{{ $card['label'] }}</span>
                                        <h6>{{ $card['title'] }}</h6>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>

            </div>


            {{-- ===============================
                ACCORDION / DETAILS
            ================================ --}}
            <div class="row mt-120 align-items-center">

                <div class="col-lg-6">
                    <div class="cp-custom-accordion">
                        <div class="accordions" id="accordionExample">

                            @foreach (__('services.accordion') as $service)
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="heading{{ $loop->iteration }}">
                                        <button class="accordion-buttons {{ $loop->first ? '' : 'collapsed' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#service{{ $loop->iteration }}"
                                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                            aria-controls="service{{ $loop->iteration }}">

                                            {{ $service['title'] }}

                                        </button>
                                    </h2>

                                    <div id="service{{ $loop->iteration }}"
                                        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        aria-labelledby="heading{{ $loop->iteration }}" data-bs-parent="#accordionExample">

                                        <div class="accordion-body">
                                            <p>{{ $service['text'] }}</p>

                                            @if (!empty($service['points']))
                                                <ul class="service-points">
                                                    @foreach ($service['points'] as $point)
                                                        <li>{{ $point }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-img-wrap wow img-custom-anim-right" data-wow-delay=".3s">
                        <img src="{{ asset('assets/frontend/img/service/service-img-2.jpg') }}"
                            alt="{{ __('services.details.image_alt') }}">
                    </div>
                </div>

            </div>


            {{-- ===============================
                FAMILY PROMISE
            ================================ --}}
            <div class="row mt-120">
                <div class="col-lg-12">
                    <div class="service-family-promise text-center">

                        <span class="section-small-label">
                            {{ __('services.promise.subtitle') }}
                        </span>

                        <h3 class="visible-slowly-right">
                            {{ __('services.promise.title') }}
                        </h3>

                        <p>
                            {{ __('services.promise.text') }}
                        </p>

                        <a href="{{ url('contact') }}" class="theme-btn mt-30">
                            {{ __('services.promise.button') }}
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection


@push('styles')
    <style>
        .family-service-card .service-info span {
            display: inline-block;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            font-weight: 700;
            opacity: .8;
            margin-bottom: 6px;
        }

        .family-service-card .service-info h6 {
            margin-bottom: 0;
        }

        .accordion-body p {
            margin-bottom: 14px;
        }

        .service-points {
            margin: 0;
            padding-left: 0;
            list-style: none;
            display: grid;
            gap: 8px;
        }

        .service-points li {
            position: relative;
            padding-left: 26px;
            font-weight: 500;
        }

        .service-points li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0;
            font-weight: 700;
        }

        .service-family-promise {
            background: #f7f3ee;
            padding: 70px 40px;
            border-radius: 10px;
        }

        .section-small-label {
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1.4px;
            font-weight: 700;
            opacity: .75;
            margin-bottom: 14px;
        }

        .service-family-promise p {
            max-width: 780px;
            margin: 20px auto 0;
        }

        @media (max-width: 767px) {
            .service-family-promise {
                padding: 45px 25px;
            }
        }
    </style>
@endpush
