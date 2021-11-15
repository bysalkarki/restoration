@props(['align' => 'left'])
@php
$textAlign =
    [
        'left' => 'text-left',
        'right' => 'text-right',
        'center' => 'text-center',
    ][$align] ?? 'text-center';
@endphp
<td class="{{ $textAlign }} "> {{ $slot }}</td>
