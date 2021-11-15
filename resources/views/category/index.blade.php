@extends('layouts.app')

@section('content')
    <x-card title="Category" footer="Category" create='category.create'>
        <x-table.table :headers='["#","title","publish status","type","action"]'>
            @forelse ($categories as $key=>$category)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $category->title }}</x-table.td>
                    <x-table.td>{{ $category->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>{{ $category->type }}</x-table.td>

                    <x-table.td class="btn-group">
                        <div class="btn-group">
                            <x-table.edit route="category.edit" :value="$category->id" />
                            <x-table.delete route="category.destroy" :value="$category->id" />
                        </div>
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No category Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="category" />
@endsection
