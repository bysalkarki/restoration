@extends('layouts.app')

@section('content')
    <x-card title="user Form" footer="">
        @if ($user->id)
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('user.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="name" :value="$user->name" :option="['placeholder'=>'user name','required'=>true]" />
        <x-form.input name="email" :value="$user->email" type="email" :option="['placeholder'=>'email','required'=>true]" />
        <x-form.image title="image" :value="$user->image" />
        @if (!$user->id)
            <x-form.input name="password" value="" type="password" :option="['placeholder'=>'password','required'=>true]" />
            <x-form.input name="password_confirmation" value="" type="password"
                :option="['placeholder'=>'password','required'=>true]" />
        @endif

        <x-button-component />
        </form>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="user" />
@endsection
