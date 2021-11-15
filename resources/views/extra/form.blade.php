@extends('layouts.app')

@section('content')
    <x-card title="extra Form" footer="">
        @if ($extra->id)
            <form action="{{ route('extra.update', $extra->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('extra.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="title" :value="$extra->title" :option="['placeholder'=>'title','required'=>true]" />
        <x-form.publishStatus :value="$extra->publishStatus" />
        <x-form.image title="image" :value="$extra->image" />
        <x-form.input name="description" type="textarea" :value="$extra->description"
            :option="['placeholder'=>'About this person','required'=>true]" />
        <x-button-component />
        </form>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="extra" />
@endsection
