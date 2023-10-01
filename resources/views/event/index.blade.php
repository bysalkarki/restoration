@extends('layouts.app')

@section('content')
    <x-card title="event" :footer="$events->links()" create='event.create'>
        <x-table.table :headers='["#","title","image","publish status","date","action"]'>
            @forelse ($events as $key=>$event)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $event->title }}</x-table.td>
                    <x-table.td><img src="{{ $event->image }}" height="150px" width="auto" /></x-table.td>
                    <x-table.td>{{ $event->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>{{ $event->date }}</x-table.td>

                    <x-table.td>
                        <div class="btn-group">
                            <x-table.edit route="event.edit" :value="$event->id" />
                            <x-table.delete route="event.destroy" :value="$event->id" />
                        </div>
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No Event Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="event" />
@endsection
