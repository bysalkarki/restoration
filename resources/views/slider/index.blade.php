@extends('layouts.app')

@section('content')
    <x-card title="" footer="Slider" create='slider.create'>
        <x-table.table :headers='["#","title","image","publish status","action"]'>
            @forelse ($sliders as $key=>$slider)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $slider->title }}</x-table.td>
                    <x-table.td><img src="{{ $slider->image }}" height="150px" width="auto" /></x-table.td>
                    <x-table.td>{{ $slider->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>
                        <div class="btn-group">
                            <x-table.edit route="slider.edit" :value="$slider->id" />
                            <x-table.delete route="slider.destroy" :value="$slider->id" />
                        </div>
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

@section('breadcrumb')
    <x-breadcrumb title="slider" />
@endsection
