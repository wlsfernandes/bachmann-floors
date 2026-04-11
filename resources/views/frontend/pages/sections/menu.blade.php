<div class="main-menu d-none d-lg-block">
    <ul>

        @foreach ($menuItems ?? [] as $item)
            @include('frontend.pages.sections.menu-item', ['item' => $item])
        @endforeach

    </ul>
</div>
