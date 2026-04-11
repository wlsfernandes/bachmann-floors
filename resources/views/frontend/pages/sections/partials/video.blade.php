@if ($section->image_url && $section->link_image)
    <div class="video__section position-relative text-center">

        <a href="{{ $section->link_image }}" target="_blank" rel="noopener">

            {{-- IMAGE --}}
            <div class="video__thumb">
                <img src="{{ route('admin.images.preview', [
                    'model' => 'sections',
                    'id' => $section->id,
                ]) }}"
                    class="img-fluid w-100" alt="Video">
            </div>

            {{-- PLAY BUTTON --}}
            <div class="video__play">
                <i class="fa-solid fa-play"></i>
            </div>

        </a>

    </div>
@endif
