@extends('layouts.app')

@section('content')
    <x-card title="testimonial Form" footer="">
        @if ($testimonial->id)
            <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('testimonial.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="name" :value="$testimonial->name"
            :option="['placeholder'=>'testimonial Giver','required'=>true]" />
        <x-form.input name="company" :value="$testimonial->company"
            :option="['placeholder'=>'testimonial Giver Company','required'=>true]" />

        <x-form.input name="title" :value="$testimonial->title" :option="['placeholder'=>'title','required'=>true]" />
        <x-form.input name="description" :value="$testimonial->description" type="textarea"
            :option="['placeholder'=>'testimonial','required'=>'true']" />
        <x-form.publishStatus :value="$testimonial->publishStatus" />
        <x-form.image title="image" :value="$testimonial->image" />
        <x-button-component />
        </form>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="testimonial" />
@endsection
