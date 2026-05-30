{{-- resources/views/frontend/partials/about.blade.php --}}

<!-- About Section -->
<div id="about-1" class="about-section section-padding pt-0">
    <div class="container">

        <div class="row align-items-end">
            <div class="col-xl-5 col-lg-6 col-md-7">
                <div class="section-title">
                    <h6>{{ __('home.about.subtitle') }}</h6>

                    <h2 class="visible-slowly-right">
                        {{ __('home.about.title') }}
                    </h2>

                    <p class="pt-20 wow fadeInUp animated" data-wow-delay=".4s">
                        {{ __('home.about.description') }}
                    </p>
                </div>
            </div>

            <div class="col-xl-7 col-lg-6 col-md-5 text-md-end">
                <a href="{{ url('about') }}" class="bordered-btn">
                    {{ __('home.about.button') }}
                    <i class="fa-light fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="row gx-0 align-items-stretch">

            <div class="col-xl-6 col-lg-6">
                <div class="about-img-wrap wow img-custom-anim-left" data-wow-delay=".3s">
                    <img src="{{ asset('assets/frontend/img/about/1.jpg') }}"
                         alt="{{ __('home.about.image_alt') }}">
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="cp-custom-accordion family-about-accordion">
                    <div class="accordions" id="accordionAbout">

                        @foreach (__('home.about.accordion') as $item)
                            <div class="accordion-items">
                                <h2 class="accordion-header" id="aboutHeading{{ $loop->iteration }}">
                                    <button class="accordion-buttons {{ $loop->first ? '' : 'collapsed' }}"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#aboutCollapse{{ $loop->iteration }}"
                                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                            aria-controls="aboutCollapse{{ $loop->iteration }}">

                                        {{ $item['title'] }}

                                    </button>
                                </h2>

                                <div id="aboutCollapse{{ $loop->iteration }}"
                                     class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                     aria-labelledby="aboutHeading{{ $loop->iteration }}"
                                     data-bs-parent="#accordionAbout">

                                    <div class="accordion-body">
                                        {{ $item['text'] }}
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>