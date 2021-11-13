@extends('layouts.app')

@section('content')
    <x-card title="testimonial" :footer="$testimonials->links()"  create='testimonial.create'>
        <x-table.table :headers='["#","name","title","image","publish status","action"]'>
            @forelse ($testimonials as $key=>$testimonial)
                <tr>
                    <x-table.td>{{ $key + 1 }}</x-table.td>
                    <x-table.td>{{ $testimonial->name }}</x-table.td>
                    <x-table.td>{{ $testimonial->title }}</x-table.td>
                    <x-table.td><img src="{{ $testimonial->image }}" height="150px" width="auto" /></x-table.td>
                    <x-table.td>{{ $testimonial->publishStatus ? 'Active' : 'Inactive' }}</x-table.td>
                    <x-table.td>
                        <x-table.edit route="testimonial.edit" :value="$testimonial->id" />
                    </x-table.td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No testimonial Data Found</td>
                </tr>
            @endforelse
        </x-table.table>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="testimonial"/>
@endsection
