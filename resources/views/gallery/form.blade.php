@extends('layouts.app')

@section('content')
    <x-card title="gallery Form" footer="">
        @if ($gallery->id)
            <form action="{{ route('gallery.update', $gallery->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('gallery.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="name" :value="$gallery->name" :option="['placeholder'=>'gallery','required'=>true]" />
        <x-form.publishStatus :value="$gallery->publishStatus" />
        <x-form.image title="image" :value="$gallery->image" />
        <x-form.input type="url" :value="$gallery->website" name="website"
            :option="['placeholder'=>'website','required'=>true]" />
        <x-button-component />
        </form>
    </x-card>
@endsection
