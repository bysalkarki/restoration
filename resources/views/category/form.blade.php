@extends('layouts.app')

@section('content')
    <x-card title="category Form" footer="">
        @if ($category->id)
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('category.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="title" :value="$category->title" :option="['placeholder'=>'title','required'=>true]" />
        <x-form.publishStatus :value="$category->publishStatus" />
        <x-form.publishStatus name="type" :list='$category->getType()' :value="$category->type" />

        <x-button-component />
        </form>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="category"/>
@endsection
