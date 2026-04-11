@php
    $btnClass = 'btn btn-' . ($section->button_color ?? 'primary');
@endphp

@if ($section->external_link)
    <div class="cta-button-wrapper text-{{ $section->button_position ?? 'start' }} mt-30">

        <a href="{{ $section->external_link }}" class="{{ $btnClass }}"
            {{ $section->button_target ? 'target=_blank' : '' }}>

            {{ $section->getButtonText() ?? __('pages.read_more') }}

            <i class="fa-light fa-arrow-right ms-2"></i>
        </a>

    </div>
@endif
