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

    <!-- Contact Section  -->
    <div class="contact-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="contact-text">
                        <p>Have a question about our services or want to get started on you design project? We are here to
                            help! Fill out the contact form below and one of our team members will get back to you within 24
                            hours. Alternatively, you can reach out to us via phone or email using the contact information
                            provided below. We can't wait to hear from you!</p>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6 offset-lg-1 col-lg-6">
                    <div class="subimit-form-wrap">
                        <div class="section-title">
                            <h2 class="visible-slowly-right">Submit Form</h2>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Your Name">
                            <input type="email" placeholder="Email">
                            <input type="tel" placeholder="Phone Number">
                            <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="contact-info-wrap">
                <div class="row mt-60">
                    <div class="col-xl-6">
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps?q=3161+Oak+Springs+Way,+Marietta,+GA&output=embed"
                                width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-info">
                            <div class="section-title">
                                <h2 class="visible-slowly-right">Contact Info</h2>
                            </div>
                            <div class="contact-info-inner">
                                <div class="single-contact-info wow fadeInUp animated" data-wow-delay="200ms">
                                    <p>Email</p>
                                    <h4>bachmannfloors@gmail.com</h4>
                                </div>
                                <div class="single-contact-info wow fadeInUp animated" data-wow-delay="400ms">
                                    <p>Phone</p>
                                    <h4>(404) 207-4320</h4>
                                </div>
                                <div class="single-contact-info wow fadeInUp animated" data-wow-delay="600ms">
                                    <p>Address</p>
                                    <h4>3161 Oak Springs Way, Marietta, Georgia - USA</h4>
                                </div>
                                <div class="social-area">
                                    <a href="https://www.instagram.com/bachmann_floors/"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>

                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
