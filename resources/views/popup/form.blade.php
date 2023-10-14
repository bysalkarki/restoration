@extends('layouts.app')

@section('content')
    <x-card title="popup Form" footer="">
        @if ($popup->id)
            <form action="{{ route('popup.update', $popup->id) }}" method="POST">
                @method('PATCH')
                @else
                    <form action="{{ route('popup.store') }}" method="POST">
                        @endif
                        @csrf
                        <x-form.input name="title" :value="$popup->title"
                                      :option="['placeholder'=>'popup','required'=>true]"/>
                        <x-form.publishStatus :value="$popup->publishStatus"/>
                        <x-form.image title="image" :value="$popup->image"/>
                        <x-form.input type="url" :value="$popup->url" name="url"
                                      :option="['placeholder'=>'url','required'=>true]"/>
                        <x-form.input name="description" type="textarea" :value="$popup->description"
                                      :option="['placeholder'=>'popup description','required'=>true]"/>

                        <x-button-component/>
                    </form>
    </x-card>
@endsection
@section('breadcrumb')
    <x-breadcrumb title="popup"/>
@endsection
