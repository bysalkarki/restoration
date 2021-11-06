@extends('layouts.app')

@section('content')
    <x-card title="Slider" footer="Slider">
        <x-table.table :headers='["#","title","image","publish status","action"]'>
            @forelse ($sliders as $key=>$slider)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $slider->title }}</x-table.td>
                    <x-table.td><img src="{{ $slider->image }}" height="150px" width="auto" /></x-table.td>
                    <x-table.td>{{ $slider->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>
                        <x-table.edit route="slider.edit" :value="$slider->id" />
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No Slider Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection
