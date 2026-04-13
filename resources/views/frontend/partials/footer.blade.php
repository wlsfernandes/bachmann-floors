@php
    $imageUrl = !empty($footer) ? route('admin.images.preview', ['model' => 'footer', 'id' => $footer->id]) : null;
@endphp

<section class="footer__section"
    @if ($imageUrl) style="background-image: url('{{ $imageUrl }}'); background-size: cover; background-position: center;" @endif>

    <div class="container">

        {{-- TOP --}}
        <div class="footer__top pt-65 pb-65">
            <div class="row g-5">

                {{-- COLUMN 1: LOGO + TEXT + SOCIAL --}}
                <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="footer__widget">

                        {{-- LOGO --}}
                        <div class="widget__head mb-4">
                            @if (!empty($setting) && $setting->image_url)
                                <a href="{{ url('/') }}" class="logo site-logo">
                                    <img src="{{ route('admin.images.preview', ['model' => 'settings', 'id' => $setting->id]) }}"
                                        alt="{{ $setting->company_name ?? config('app.name') }}"
                                        style="max-height:80px;">
                                </a>
                            @endif
                        </div>

                        {{-- TITLE --}}
                        @if (!empty($footer))
                            <div class="cms-html">
                                {!! $footer->{'title_' . app()->getLocale()} ?? $footer->title_en !!}
                            </div>
                        @endif

                        {{-- SUBTITLE --}}
                        @if (!empty($footer))
                            <div class="cms-html">
                                {!! $footer->subtitle !!}
                            </div>
                        @endif

                        {{-- SOCIAL --}}
                        @if (!empty($socialLinks))
                            <ul class="social__icon footer__social mb-3">
                                @foreach ($socialLinks as $social)
                                    <li>
                                        <a href="{{ $social->url }}" target="_blank" rel="noopener">
                                            <i class="{{ $social->icon }}"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                </div>

                {{-- COLUMN 2: MENU --}}
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="footer__widget">

                        <div class="widget__head mb-4">
                            <h5>@lang('pages.explore')</h5>
                            <div class="witr_bar_main">
                                <div class="witr_bar_inner witr_bar_innerc"></div>
                            </div>
                        </div>

                        <ul class="list">
                            @foreach ($footerMenu ?? [] as $item)
                                @if (!empty($item->link))
                                    <li>
                                        <a href="{{ $item->link }}">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            {{ $item->title }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>

                    </div>
                </div>

                {{-- COLUMN 3: CONTACT (FROM OLD FOOTER) --}}
                <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-12 col-sm-12 wow fadeInUp">
                    <div class="footer__widget">


                        <div class="single-contact-info mb-2">
                            <div class="cms-html">
                                <strong>@lang('home.contact_phone'):</strong><br>
                                {{ $setting->contact_phone ?? '' }}
                            </div>
                        </div>

                        <div class="single-contact-info mb-2">
                            <div class="cms-html">
                                <strong>@lang('home.contact_email'):</strong><br>
                                {{ $setting->contact_email ?? '' }}
                            </div>
                        </div>

                        <div class="single-contact-info">
                            <div class="cms-html">
                                <strong>@lang('home.contact_directions'):</strong><br>
                                {{ $setting->address ?? '' }}
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- BOTTOM --}}
        <div class="footer__bottom pt-30 pb-30 text-center">
            <p class="text-white mb-0">
                © {{ date('Y') }} {{ $setting->company_name ?? config('app.name') }}
            </p>
        </div>

    </div>
</section>

{{-- SEARCH POPUP (SAFE) --}}
<div class="search-popup">
    <span class="search-back-drop"></span>

    <div class="search-inner">
        <div class="container">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('frontend/assets/img/logo-white.png') }}" alt="">
                </a>
            </div>

            <button class="close-search"><span class="la la-times"></span></button>

            <form method="get" action="{{ url('/') }}">
                <div class="form-group">
                    <input type="search" name="search" placeholder="Type your keyword" required>
                    <button type="submit"><i class="fal fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- BACK TO TOP --}}
<div class="progress-wrap">
    <svg class="progress-circle svg-content" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
