<li class="{{ $item->childrenRecursive->count() ? 'has-submenu' : '' }}">

    <a class="navlink {{ request()->url() == $item->link ? 'active' : '' }}" href="{{ $item->link ?: '#' }}">

        {{ $item->title }}

        @if ($item->childrenRecursive->count())
            <i class="fas fa-chevron-down"></i>
        @endif
    </a>

    @if ($item->childrenRecursive->count())
        <ul class="sub-menu">
            @foreach ($item->childrenRecursive as $child)
                @include('frontend.pages.sections.menu-item', ['item' => $child])
            @endforeach
        </ul>
    @endif

</li>
