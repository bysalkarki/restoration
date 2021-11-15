@extends('layouts.app')

@section('content')
    <x-card title="blog" :footer="$blogs->links()" create='blog.create'>
        <x-table.table :headers='["#","title","image","publish status","action"]'>
            @forelse ($blogs as $key=>$blog)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $blog->title }}</x-table.td>
                    <x-table.td><img src="{{ $blog->image }}" height="150px" width="auto" /></x-table.td>
                    <x-table.td>{{ $blog->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>
                        <div class="btn-group">
                            <x-table.edit route="blog.edit" :value="$blog->id" />
                            <x-table.delete route="blog.destroy" :value="$blog->id" />
                        </div>
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No blog Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="blog" />
@endsection
