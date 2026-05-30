{{-- resources/views/frontend/partials/projects.blade.php --}}

<!-- Project Section -->
<div id="project-1" class="project-section section-padding">
    <div class="container">

        <div class="row align-items-end">
            <div class="col-xl-5 col-lg-6 col-md-7">
                <div class="section-title">
                    <h6>{{ __('home.projects_2.subtitle') }}</h6>

                    <h2 class="visible-slowly-right">
                        {{ __('home.projects_2.title') }}
                    </h2>

                    <p class="pt-20 wow fadeInUp animated" data-wow-delay=".4s">
                        {{ __('home.projects_2.text') }}
                    </p>
                </div>
            </div>

            <div class="col-xl-7 col-lg-6 col-md-5 text-md-end">
                <a href="{{ url('projects') }}" class="bordered-btn">
                    {{ __('home.projects_2.button') }}
                    <i class="fa-light fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="row project-wrapper">
            <div class="project-slider owl-carousel">

                @foreach (__('home.projects_2.items') as $project)
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
                @endforeach

            </div>
        </div>

    </div>
</div>

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
    </style>
@endpush
