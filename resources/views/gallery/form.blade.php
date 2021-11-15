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
        <x-form.input name="title" :value="$gallery->title" :option="['placeholder'=>'gallery','required'=>true]" />
        <x-form.publishStatus name="category[]" :list='$categories' :value="$selectedCategories" multiple="true" label="gallery category" />
        <x-form.publishStatus :value="$gallery->publishStatus" />
        <x-form.image title="image" :value="$gallery->image" />
        <x-button-component />
        </form>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="gallery"/>
@endsection
