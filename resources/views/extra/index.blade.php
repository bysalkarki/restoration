@extends('layouts.app')

@section('content')
    <x-card title="Feature" footer="Features" create='extra.create'>
        <x-table.table :headers='["#","title","publish status","icon","action"]'>
            @forelse ($extras as $key=>$extra)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $extra->title }}</x-table.td>
                    <x-table.td>{{ $extra->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td><img src="{{ $extra->image }}" height="150px" width="auto" /></x-table.td>
                    <x-table.td class="btn-group">
                        <div class="btn-group">
                            <x-table.edit route="extra.edit" :value="$extra->id" />
                            <x-table.delete route="extra.destroy" :value="$extra->id" />
                        </div>
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No Feature Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="extra" />
@endsection
