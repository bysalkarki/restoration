@extends('layouts.app')

@section('content')
    <x-card title="Slider" footer="Slider">
        <x-table.table :headers='["#","title","image","publish status","website","action"]'>
            @forelse ($partners as $key=>$partner)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $partner->title }}</x-table.td>
                    <x-table.td><img src="{{ $partner->image }}" height="150px" width="auto" /></x-table.td>
                    <x-table.td>{{ $partner->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>{{ $partner->website }}</x-table.td>
                    <x-table.td>
                        <x-table.edit route="partner.edit" :value="$partner->id" />
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No Partner Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection
