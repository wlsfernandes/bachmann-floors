<!-- Footer Section -->
<div class="footer-section pt-80" data-background="assets/frontend/img/footer-bg.jpg">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-xl-5 col-lg-5 col-md-6">
                <div class="footer-content-wrap">
                    <div class="section-title">
                        <h2 class="text-white visible-slowly-right">
                            @lang('footer.title')
                        </h2>
                    </div>
                    <hr>
                    <p class="text-white wow fadeInUp animated" data-wow-delay="400ms">
                        @lang('footer.description')
                    </p>
                    <a href="{{ url('contact') }}" class="white-btn mt-20 wow fadeInDown animated"
                        data-wow-delay="600ms">
                        @lang('footer.cta') <i class="fa-light fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-1"></div>

            <div class="col-xl-3 col-lg-3 col-md-5">
                <div class="contact-info-wrap mt-40">

                    <div class="single-contact-info wow fadeInUp animated" data-wow-delay="200ms">
                        <h6 class="text-white">@lang('footer.phone_label')</h6>
                        <p class="p-xl">+1 404 207 4320</p>
                    </div>

                    <div class="single-contact-info wow fadeInUp animated" data-wow-delay="400ms">
                        <h6 class="text-white">@lang('footer.email_label')</h6>
                        <p>bachmannfloors@gmail.com</p>
                    </div>

                    <div class="single-contact-info wow fadeInUp animated" data-wow-delay="600ms">
                        <h6 class="text-white">@lang('footer.directions_label')</h6>
                        <p>
                            @lang('footer.address_line1')<br>
                            @lang('footer.address_city')<br>
                            @lang('footer.address_state')
                        </p>
                    </div>

                    <!-- Social Media -->
                    <div class="single-contact-info wow fadeInUp animated" data-wow-delay="800ms">
                        <div class="footer-social mt-15">
                            <a href="https://www.facebook.com/profile.php?id=61587818097006" target="_blank"
                                rel="noopener noreferrer" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>

                            <a href="https://www.instagram.com/bachmann_floors/" target="_blank"
                                rel="noopener noreferrer" aria-label="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="row align-items-center justify-content-center">
        <div class="site-info text-center">
            <p class="mb-0">
                @lang('footer.copyright')
            </p>
        </div>
    </div>
</div>
