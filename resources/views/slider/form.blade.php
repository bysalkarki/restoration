@extends('layouts.app')

@section('content')
    <x-card title="Slider Form" footer="">
        @if ($slider->id)
            <form action="{{ route('slider.update', $slider->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('slider.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="title" :value="$slider->title" :option="['placeholder'=>'slider','required'=>true]" />
        <x-form.input name="description" :value="$slider->description" type="textarea"
            :option="['placeholder'=>'slider','required'=>'true']" />
        <x-form.publishStatus :value="$slider->publishStatus" />
        <x-form.image title="image" :value="$slider->image" />
        <x-button-component />
        </form>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="slider"/>
@endsection
