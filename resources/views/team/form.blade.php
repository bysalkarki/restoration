@extends('layouts.app')

@section('content')
    <x-card title="team Form" footer="">
        @if ($team->id)
            <form action="{{ route('team.update', $team->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('team.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="name" :value="$team->name" :option="['placeholder'=>'team','required'=>true]" />
        <x-form.input name="designation" :value="$team->designation" :option="['placeholder'=>'team','required'=>true]" />

        <x-form.publishStatus :value="$team->publishStatus" />
        <x-form.input name="description" type="textarea" :value="$team->description"
            :option="['placeholder'=>'About this person','required'=>true]" />

        <x-form.image title="image" :value="$team->image" />
        <x-form.input type="email" :value="$team->email" name="email" :option="['placeholder'=>'email']" />
        <x-form.input type="url" :value="$team->facebook" name="facebook" :option="['placeholder'=>'facebook']" />
        <x-form.input type="url" :value="$team->twitter" name="twitter" :option="['placeholder'=>'twitter']" />
        <x-form.input type="url" :value="$team->instagram" name="instagram" :option="['placeholder'=>'instagram']" />
        <x-form.input type="text" :value="$team->contact" name="contact" :option="['placeholder'=>'contact']" />
        <x-button-component />
        </form>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="team"/>
@endsection
