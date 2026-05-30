{{-- resources/views/frontend/pages/contact.blade.php --}}
@extends('frontend.layouts.app')

@section('title', __('contact.meta.title'))

@section('content')

    {{-- SUCCESS ALERT --}}
    @if (session('success'))
        <div class="container mt-3">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Contact Section -->
    <div class="contact-section section-padding">
        <div class="container">

            {{-- ===============================
                INTRO + FORM
            ================================ --}}
            <div class="row gy-5 align-items-start">

                <div class="col-xl-5 col-lg-5">
                    <div class="contact-text family-contact-text">

                        <span class="section-subtitle">
                            {{ __('contact.intro.subtitle') }}
                        </span>

                        <h2 class="visible-slowly-right">
                            {{ __('contact.intro.title') }}
                        </h2>

                        <p class="mt-4">
                            {{ __('contact.intro.paragraph_1') }}
                        </p>

                        <p>
                            {{ __('contact.intro.paragraph_2') }}
                        </p>

                        <div class="contact-small-promise mt-4">
                            <h5>{{ __('contact.intro.promise_title') }}</h5>
                            <p>{{ __('contact.intro.promise_text') }}</p>
                        </div>

                    </div>
                </div>

                <div class="offset-xl-1 col-xl-6 offset-lg-1 col-lg-6">
                    <div class="subimit-form-wrap family-contact-form">

                        <div class="section-title">
                            <h2 class="visible-slowly-right">
                                {{ __('contact.form.title') }}
                            </h2>

                            <p class="pt-20">
                                {{ __('contact.form.text') }}
                            </p>
                        </div>

                        {{-- Change action="#" to your real route when ready --}}
                        <form action="#" method="POST">
                            @csrf

                            <input type="text" name="name" placeholder="{{ __('contact.form.name') }}"
                                value="{{ old('name') }}" required>

                            <input type="email" name="email" placeholder="{{ __('contact.form.email') }}"
                                value="{{ old('email') }}" required>

                            <input type="tel" name="phone" placeholder="{{ __('contact.form.phone') }}"
                                value="{{ old('phone') }}">

                            <textarea name="message" cols="30" rows="10" placeholder="{{ __('contact.form.message') }}" required>{{ old('message') }}</textarea>

                            <input type="submit" value="{{ __('contact.form.submit') }}">
                        </form>

                    </div>
                </div>

            </div>


            {{-- ===============================
                MAP + CONTACT INFO
            ================================ --}}
            <div class="contact-info-wrap">
                <div class="row mt-60 gy-5 align-items-stretch">

                    <div class="col-xl-6">
                        <div class="google-map family-map-wrap">
                            <iframe src="https://www.google.com/maps?q=3161+Oak+Springs+Way,+Marietta,+GA&output=embed"
                                width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="contact-info family-contact-info">

                            <div class="section-title">
                                <span class="section-subtitle">
                                    {{ __('contact.info.subtitle') }}
                                </span>

                                <h2 class="visible-slowly-right">
                                    {{ __('contact.info.title') }}
                                </h2>

                                <p class="pt-20">
                                    {{ __('contact.info.text') }}
                                </p>
                            </div>

                            <div class="contact-info-inner">

                                <div class="single-contact-info wow fadeInUp animated" data-wow-delay="200ms">
                                    <p>{{ __('contact.info.email_label') }}</p>
                                    <h4>
                                        <a href="mailto:bachmannfloors@gmail.com">
                                            bachmannfloors@gmail.com
                                        </a>
                                    </h4>
                                </div>

                                <div class="single-contact-info wow fadeInUp animated" data-wow-delay="400ms">
                                    <p>{{ __('contact.info.phone_label') }}</p>
                                    <h4>
                                        <a href="tel:+14042074320">
                                            (404) 207-4320
                                        </a>
                                    </h4>
                                </div>

                                <div class="single-contact-info wow fadeInUp animated" data-wow-delay="600ms">
                                    <p>{{ __('contact.info.address_label') }}</p>
                                    <h4>
                                        3161 Oak Springs Way, Marietta, Georgia - USA
                                    </h4>
                                </div>

                                <div class="single-contact-info wow fadeInUp animated" data-wow-delay="800ms">
                                    <p>{{ __('contact.info.local_label') }}</p>
                                    <h4>
                                        {{ __('contact.info.local_text') }}
                                    </h4>
                                </div>

                                <div class="social-area mt-4">
                                    <a href="https://www.instagram.com/bachmann_floors/" target="_blank" rel="noopener">
                                        <i class="fab fa-instagram"></i>
                                    </a>

                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

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
            letter-spacing: 1.4px;
            font-size: 13px;
            margin-bottom: 14px;
            opacity: .75;
        }

        .family-contact-text p {
            font-size: 17px;
            line-height: 1.8;
        }

        .contact-small-promise {
            background: #f7f3ee;
            padding: 26px 28px;
            border-radius: 10px;
        }

        .contact-small-promise h5 {
            margin-bottom: 10px;
        }

        .contact-small-promise p {
            margin-bottom: 0;
            font-size: 15px;
        }

        .family-contact-form {
            background: #fff;
            padding: 42px;
            border-radius: 10px;
            box-shadow: 0 16px 45px rgba(0, 0, 0, .07);
        }

        .family-map-wrap iframe {
            width: 100%;
            min-height: 560px;
            border-radius: 10px;
            display: block;
        }

        .family-contact-info {
            background: #f7f3ee;
            padding: 50px;
            border-radius: 10px;
            height: 100%;
        }

        .family-contact-info a {
            color: inherit;
        }

        .single-contact-info h4 {
            word-break: break-word;
        }

        @media (max-width: 767px) {

            .family-contact-form,
            .family-contact-info {
                padding: 30px 24px;
            }

            .family-map-wrap iframe {
                min-height: 420px;
            }
        }
    </style>
@endpush
