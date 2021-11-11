@extends('layouts.app')

@section('content')
    <x-card title="video" :footer="$videos->links()">
        <x-table.table :headers='["#","title","image","publish status","action"]'>
            @forelse ($videos as $key=>$video)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $video->title }}</x-table.td>
                    <x-table.td><img src="{{ $video->image }}" height="150px" width="auto" /></x-table.td>
                    <x-table.td>{{ $video->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>

                    <x-table.td>
                        <x-table.edit route="video.edit" :value="$video->id" />
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No video Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="video"/>
@endsection
