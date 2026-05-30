@extends('frontend.layouts.app')

@section('title', __('about.meta.title'))

@section('content')
    {{-- ===============================
PROJECT SECTION
================================ --}}
    <div id="project-1" class="project-section section-padding">
        <div class="container">

            <div class="row gy-4 align-items-end">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="section-title">
                        <h6>{{ __('home.projects.subtitle') }}</h6>

                        <h2 class="visible-slowly-right">
                            {{ __('home.projects.title') }}
                        </h2>

                        <p class="pt-20">
                            {{ __('home.projects.text') }}
                        </p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-5 text-md-end">
                    <a href="{{ url('projects') }}" class="bordered-btn">
                        {{ __('home.projects.button') }}
                        <i class="fa-light fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="row project-wrapper">

                @foreach (__('home.projects.items') as $project)
                    <div class="col-lg-4 wow fadeInUp animated"
                        data-wow-delay="{{ 200 * ((($loop->iteration - 1) % 3) + 1) }}ms">

                        <div class="single-project-item family-project-card">
                            <div class="project-bg">
                                <img src="{{ asset('assets/frontend/img/project/' . $project['image']) }}"
                                    alt="{{ $project['title'] }}">
                            </div>

                            <div class="project-info">
                                <span class="project-small-label">
                                    {{ $project['label'] }}
                                </span>

                                <h6>{{ $project['title'] }}</h6>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </div>


    {{-- ===============================
PROJECT SLIDER
================================ --}}
    <div class="project-slider-wrap-two">
        <div class="project-img-slider-two owl-carousel">

            @foreach (__('home.projects.slider') as $image)
                <div class="project-img">
                    <img src="{{ asset('assets/frontend/img/project-slider/' . $image) }}"
                        alt="{{ __('home.projects.slider_alt') }}">
                </div>
            @endforeach

        </div>
    </div>


    {{-- ===============================
SIMPLE FAMILY PROCESS SECTION
================================ --}}
    <div id="process-2" class="process-section section-padding">
        <div class="container">

            <div class="row gy-5">

                <div class="col-xl-5 col-lg-4 col-md-4">
                    <div class="section-title">
                        <h6>{{ __('home.simple_process.subtitle') }}</h6>

                        <h2 class="visible-slowly-right">
                            {{ __('home.simple_process.title') }}
                        </h2>

                        <p class="pt-20">
                            {{ __('home.simple_process.text') }}
                        </p>
                    </div>

                    <a href="{{ url('contact') }}" class="bordered-btn">
                        {{ __('home.simple_process.button') }}
                        <i class="fa-light fa-arrow-right"></i>
                    </a>
                </div>

                <div class="col-xl-1 col-lg-1 col-md-1"></div>

                <div class="col-xl-6 col-lg-7 col-md-7">

                    @foreach (__('home.simple_process.steps') as $step)
                        <div class="single-process-wrap wow fadeInUp animated {{ $loop->last ? 'mb-0' : '' }}"
                            data-wow-delay="{{ 200 * $loop->iteration }}ms">

                            <div class="process-icon">
                                <img src="{{ asset('assets/frontend/img/process/' . $step['icon']) }}"
                                    alt="{{ $step['title'] }}">

                                <span class="step-count">{{ $loop->iteration }}.</span>
                            </div>

                            <div class="process-content">
                                <div class="process-title">
                                    <h5>{{ $step['title'] }}</h5>
                                </div>

                                <div class="process-text">
                                    <p>{{ $step['text'] }}</p>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </div>
@endsection
@push('styles')
    <style>
        .family-project-card .project-info {
            padding-bottom: 26px;
        }

        .project-small-label {
            display: inline-block;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            font-weight: 700;
            opacity: .75;
            margin-bottom: 8px;
        }

        .family-project-card .project-info h6 {
            margin-bottom: 0;
        }

        .single-process-wrap .process-text p {
            margin-bottom: 0;
        }
    </style>
@endpush
