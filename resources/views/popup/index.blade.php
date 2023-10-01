@extends('layouts.app')

@section('content')
    <x-card title="popup" :footer="$popup->links()" create='popup.create'>
        <x-table.table :headers='["#","title","image","url","publish status","action"]'>
            @forelse ($popups as $key=>$popup)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $popup->title }}</x-table.td>
                    <x-table.td><img src="{{ $popup->image }}" height="150px" width="auto"/></x-table.td>
                    <x-table.td>{{ $popup->url }}</x-table.td>
                    <x-table.td>{{ $popup->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>
                        <div class="btn-group">
                            <x-table.edit route="popup.edit" :value="$popup->id"/>
                            <x-table.delete route="popup.destroy" :value="$popup->id"/>
                        </div>
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No popup Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="popup"/>
@endsection
