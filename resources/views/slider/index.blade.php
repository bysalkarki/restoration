@extends('layouts.app')

@section('content')
    <x-card title="Slider" footer="Slider">
        <x-table.table :headers='["#","title","image","publish status","action"]'>
            @forelse ($sliders as $key=>$slider)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $slider->title }}</x-table.td>
                    <x-table.td><img src="{{ $slider->image }}" height="20px" width="20px" /></x-table.td>
                    <x-table.td>{{ $slider->publishStatus }}</x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No Slider Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection
