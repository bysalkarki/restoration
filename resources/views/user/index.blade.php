@extends('layouts.app')

@section('content')
    <x-card title="user" :footer="$users->links()">
        <x-table.table :headers='["#","name","title","image","publish status","action"]'>
            @forelse ($users as $key=>$user)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $user->name }}</x-table.td>
                    <x-table.td>{{ $user->title }}</x-table.td>
                    <x-table.td><img src="{{ $user->image }}" height="150px" width="auto" /></x-table.td>
                    <x-table.td>{{ $user->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>
                        <x-table.edit route="user.edit" :value="$user->id" />
                        <x-table.edit route="resetPasswordView" :value="$user->id"  icon='fas fa-lock  '  />
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No user Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="user" />
@endsection
