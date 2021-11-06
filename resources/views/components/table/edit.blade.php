@props(['route', 'value', 'name' => '', 'icon' => 'fas fa-pen'])
<a name="{{ $name }}" id="" class="btn btn-primary" href="{{ route($route, $value) }}" role="button"><i
        class="{{ $icon }}"></i>{{ $name }}</a>
