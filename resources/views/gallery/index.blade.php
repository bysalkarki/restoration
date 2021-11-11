@extends('layouts.app')

@section('content')
    <x-card title="gallery" :footer="$galleries->links()">
        <x-table.table :headers='["#","title","image","publish status","date","action"]'>
            @forelse ($galleries as $key=>$gallery)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $gallery->title }}</x-table.td>
                    <x-table.td><img src="{{ $gallery->image }}" height="150px" width="auto" /></x-table.td>
                    <x-table.td>{{ $gallery->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>{{ $gallery->date}}</x-table.td>

                    <x-table.td>
                        <x-table.edit route="gallery.edit" :value="$gallery->id" />
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No gallery Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection
@section('breadcrumb')
    <x-breadcrumb title="gallery"/>
@endsection
