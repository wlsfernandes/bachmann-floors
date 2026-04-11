@if ($section->images && $section->images->count())

    <div class="project-section section-padding pt-70">

        <div class="container">
            <div class="col-lg-12">
                <div class="cms-html mb-3">
                    <div class="cta-content text-{{ $section->button_position ?? 'start' }}">
                        @include('frontend.pages.sections.partials.content')
                    </div>
                </div>
            </div>
            {{-- SLIDER --}}
            <div class="row mt-30">
                <div class="project-slider owl-carousel">

                    @foreach ($section->images as $image)
                        <div class="single-project-item">

                            <div class="project-bg">

                                @if ($image->external_link)
                                    <a href="{{ $image->external_link }}" target="_blank">
                                @endif

                                {{-- NEW WRAPPER --}}
                                <div class="project-square-img">
                                    <img src="{{ route('admin.images.preview', [
                                        'model' => 'section_images',
                                        'id' => $image->id,
                                    ]) }}"
                                        alt="{{ $image->title ?? 'Project Image' }}">
                                </div>

                                @if ($image->external_link)
                                    </a>
                                @endif

                            </div>

                            <div class="project-info">

                                {{-- TITLE --}}
                                @if (!empty($image->title))
                                    <h6>{{ $image->title }}</h6>
                                @endif

                                {{-- LINK --}}
                                @if ($image->external_link)
                                    <a href="{{ $image->external_link }}" target="_blank">
                                        @lang('pages.read_more')
                                    </a>
                                @endif

                            </div>

                        </div>
                    @endforeach

                </div>
            </div>

        </div>

    </div>

@endif
