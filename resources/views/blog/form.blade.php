@extends('layouts.app')

@section('content')
    <x-card title="blog Form" footer="">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($blog->id)
            <form action="{{ route('blog.update', $blog->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('blog.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="title" :value="$blog->title" :option="['placeholder'=>'blog','required'=>true]" />
        <x-form.publishStatus :value="$blog->publishStatus" />
        <x-form.publishStatus name="category" :list='$category' :value="$selectedCategories" multiple="true" />
        <x-form.input name="publishAt" type="date" :value="$blog->publishAt"
            :option="['placeholder'=>'publish At','required'=>true]" />
        <x-form.input name="description" type="textarea" :value="$blog->description"
            :option="['placeholder'=>'blog description','required'=>true]" />
        <x-form.image title="image" :value="$blog->image" />
        <x-button-component />
        </form>
    </x-card>
@endsection
