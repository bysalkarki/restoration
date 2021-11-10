@extends('layouts.app')

@section('content')
    <x-card title="video Form" footer="">
        @if ($video->id)
            <form action="{{ route('video.update', $video->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('video.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="title" :value="$video->title" :option="['placeholder'=>'video title','required'=>true]" />
        <x-form.input name="description" type="textarea" :value="$video->description"
            :option="['placeholder'=>'About this person','required'=>true]" />
        <x-form.image title="image" :value="$video->image" />
        <x-form.input type="url" :value="$video->url" name="url" :option="['placeholder'=>'Video URL']" />
        <x-form.publishStatus :value="$video->publishStatus" />
        <x-button-component />
        </form>
    </x-card>
@endsection
