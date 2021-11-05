<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

        @foreach ($sliders as $slider)
            @if ($slider['child'])
                <li class="nav-item menu-open">
                    <a href="{{ $slider['href'] }}"
                        class="nav-link @if (request()->is(str_replace(asset('/'),'',$slider['href'])))
                        {{ 'active' }}
                                            @endif">
                        <i class="nav-icon {{ $slider['icon'] }}"></i>
                        <p>
                            {{ $slider['title'] }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach ($slider['child'] as $child)
                            <li class="nav-item">
                                <a href="{{ $child['href'] }}"
                                    class="nav-link @if (request()->is(str_replace(asset('/'),'',$child['href'])))
                                    {{ 'active' }}
                                                        @endif">
                                    <i class="{{ $child['icon'] }} nav-icon"></i>
                                    <p>{{ $child['title'] }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @continue
            @endif
            <li class="nav-item">
                <a href="{{ $slider['href'] }}"
                    class="nav-link @if (request()->is(str_replace(asset('/'),'',$slider['href'])))
                    {{ 'active' }}
                                        @endif">
                    <i class="nav-icon {{ $slider['icon'] }}"></i>
                    <p>
                        {{ $slider['title'] }}
                    </p>
                </a>
            </li>
        @endforeach
    </ul>
</nav>
