<!-- Service Section -->
<div id="service-1" class="service-section section-padding">
    <div class="container">

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-7">
                <div class="section-title">
                    <h2 class="visible-slowly-right">
                        @lang('services.title')
                    </h2>
                    <p class="pt-20 wow fadeInUp animated" data-wow-delay=".4s">
                        @lang('services.description')
                    </p>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-5 text-md-end">
                <a href="{{ url('services') }}" class="bordered-btn">
                    @lang('services.view_all') <i class="fa-light fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="row service-wrapper">

            {{-- SERVICE 1 --}}
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft animated" data-wow-delay="200ms">
                <div class="single-service-item">
                    <img src="assets/frontend/img/service/1.jpg" alt="">
                    <div class="service-info-wrap">
                        <div class="service-info-inner">
                            {{-- <span>@lang('services.service_1_tag')</span> --}}
                            <h5>@lang('services.service_1_title')</h5>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SERVICE 2 --}}
            <div class="col-xl-3 col-lg-3 col-md-6 mt-50 wow fadeInLeft animated" data-wow-delay="400ms">
                <div class="single-service-item">
                    <img src="assets/frontend/img/service/2.jpg" alt="">
                    <div class="service-info-wrap">
                        <div class="service-info-inner">
                            {{-- <span>@lang('services.service_2_tag')</span> --}}
                            <h5>@lang('services.service_2_title')</h5>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SERVICE 3 --}}
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft animated" data-wow-delay="600ms">
                <div class="single-service-item">
                    <img src="assets/frontend/img/service/3.jpg" alt="">
                    <div class="service-info-wrap">
                        <div class="service-info-inner">
                            {{-- <span>@lang('services.service_3_tag')</span> --}}
                            <h5>@lang('services.service_3_title')</h5>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SERVICE 4 --}}
            <div class="col-xl-3 col-lg-3 col-md-6 mt-50 wow fadeInLeft animated" data-wow-delay="800ms">
                <div class="single-service-item">
                    <img src="assets/frontend/img/service/4.jpg" alt="">
                    <div class="service-info-wrap">
                        <div class="service-info-inner">
                            {{-- <span>@lang('services.service_4_tag')</span> --}}
                            <h5>@lang('services.service_4_title')</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- ACCORDION --}}
        <div class="row mt-60">
            <div class="cp-custom-accordion">
                <div class="accordions" id="accordionExample">

                    @for ($i = 1; $i <= 4; $i++)
                        <div class="accordion-items wow fadeInUp animated" data-wow-delay="{{ $i * 200 }}ms">
                            <h2 class="accordion-header">
                                <button class="accordion-buttons {{ $i != 1 ? 'collapsed' : '' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#service{{ $i }}">
                                    @lang("services.accordion_{$i}_title")
                                </button>
                            </h2>

                            <div id="service{{ $i }}"
                                class="accordion-collapse collapse {{ $i == 1 ? 'show' : '' }}"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">
                                    @lang("services.accordion_{$i}_text")
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>

    </div>
</div>
