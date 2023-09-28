@extends('layouts.app')

@section('content')
    <x-card title="Counter" footer="Counter" create='counter.create'>
        <x-table.table :headers='["#","title","publish status","min","max","action"]'>
            @forelse ($counters as $key => $counter)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $counter->title }}</x-table.td>
                    <x-table.td>{{ $counter->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>{{ $counter->min }}</x-table.td>
                    <x-table.td>{{ $counter->max }}</x-table.td>
                    <x-table.td class="btn-group">
                        <div class="btn-group">
                            <x-table.edit route="counter.edit" :value="$counter->id"/>
                            <x-table.delete route="counter.destroy" :value="$counter->id"/>
                        </div>
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No counter Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="counter"/>
@endsection
