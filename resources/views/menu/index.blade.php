@extends('layouts.app')

@section('content')
    <x-card title="menu" :footer="$menus->links()">
        <x-table.table :headers='["#","title","image","publish status","type","action"]'>
            @forelse ($menus as $key=>$menu)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $menu->title }}</x-table.td>
                    <x-table.td><img src="{{ $menu->image }}" height="150px" width="auto" /></x-table.td>
                    <x-table.td>{{ $menu->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>{{ $menu->type}}</x-table.td>
                    <x-table.td>
                        <x-table.edit route="menu.edit" :value="$menu->id" />
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No menu Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="menu"/>
@endsection
