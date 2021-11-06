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
        <x-form.input name="name" :value="$partner->name" :option="['placeholder'=>'slider','required'=>true]" />
        <x-form.publishStatus :value="$partner->publishStatus" />
        <x-form.image title="image" :value="$partner->image" />
        <x-form.input type="url" :value="$partner->image" name="website" />
        <x-button-component />
        </form>
    </x-card>
@endsection
