@extends('layouts.app')

@section('content')
    <x-card title="team" :footer="$teams->links()"  create='team.create'>
        <x-table.table :headers='["#","designation","name","image","email","publish status","action"]'>
            @forelse ($teams as $key=>$team)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $team->designation }}</x-table.td>
                    <x-table.td>{{ $team->name }}</x-table.td>
                    <x-table.td><img src="{{ $team->image }}" height="150px" width="auto" /></x-table.td>
                    <x-table.td>{{ $team->email }}</x-table.td>
                    <x-table.td>{{ $team->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>
                        <x-table.edit route="team.edit" :value="$team->id" />
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No team Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="team"/>
@endsection
