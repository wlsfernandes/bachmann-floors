{{-- resources/views/frontend/partials/banners.blade.php --}}

<div id="home-1" class="homepage-slides owl-carousel">

    @foreach (__('home.banners.slides') as $slide)
        <div class="single-slide-item d-flex align-items-center"
            data-background="{{ asset('assets/frontend/img/slider/' . $slide['image']) }}">

            <div class="{{ $slide['overlay'] }}"></div>

            <div class="hero-area-content">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-xl-12 col-lg-12 col-md-10 wow fadeInUp animated" data-wow-delay=".2s">

                            <div class="section-title">
                                <h6 class="text-white">
                                    {{ $slide['subtitle'] }}
                                </h6>

                                <h1 class="text-white">
                                    {!! $slide['title'] !!}
                                </h1>
                            </div>

                            <p class="text-white">
                                {!! $slide['text'] !!}
                            </p>

                            <div class="hero-btn-wrap mt-40">
                                <a href="{{ url('contact') }}" class="white-btn">
                                    {{ __('home.banners.primary_button') }}
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>

                                <a href="{{ url('services') }}" class="bordered-btn white-border-btn ms-3">
                                    {{ __('home.banners.secondary_button') }}
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
@push('styles')
    <style>
        .hero-btn-wrap {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 14px;
        }

        .white-border-btn {
            border-color: rgba(255, 255, 255, .75) !important;
            color: #fff !important;
        }

        .white-border-btn:hover {
            background: #fff;
            color: #111 !important;
        }

        @media (max-width: 767px) {
            .hero-btn-wrap {
                gap: 10px;
            }

            .hero-btn-wrap .ms-3 {
                margin-left: 0 !important;
            }
        }
    </style>
@endpush
