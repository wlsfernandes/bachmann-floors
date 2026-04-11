<div class="promo__section section-padding"
    @if ($section->image_url) data-background="{{ route('admin.images.preview', ['model' => 'sections', 'id' => $section->id]) }}"
        style="background-image: url('{{ route('admin.images.preview', ['model' => 'sections', 'id' => $section->id]) }}');" @endif>
    <div class="overlay-4"></div>
    <div class="container">
        <div class="row align-items-center">
            {{-- LEFT CONTENT (MAIN PROMO TEXT) --}}
            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="promo-content-wrap">
                    <div class="section-title">
                        @include('frontend.pages.sections.partials.content')

                        @include('frontend.pages.sections.partials.button')
                    </div>
                </div>
            </div>
            {{-- RIGHT SIDE (EMPTY / FUTURE / OPTIONAL CARDS) --}}
            <div class="col-xl-7 col-lg-6 col-md-12">
                {{-- You can later inject cards, images, stats here --}}
            </div>

        </div>

    </div>

</div>
