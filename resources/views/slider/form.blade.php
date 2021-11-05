@extends('layouts.app')

@section('content')
    <x-card title="Slider Form" footer="">
        @if ($slider->id)
            <form action="{{ route('slider.update', $slider->id) }}" method="POST">
                @method('PACTCH')
            @else
                <form action="{{ route('slider.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="name" :value="$slider->name" :option="['placeholder'=>'slider']" />
        <x-form.input name="description" :value="$slider->description" type="textarea" :option="['placeholder'=>'slider']" />


        <x-button-component />
        </form>
    </x-card>
@endsection
