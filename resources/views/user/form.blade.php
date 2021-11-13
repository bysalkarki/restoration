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
        <div class="form-group">
            {!! Form::label('password', 'password', ['class' => 'text-capitalize']) !!}
            {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'required' => true]) !!}
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation', 'password_confirmation', ['class' => 'text-capitalize']) !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation', 'required' => true]) !!}
        </div>
        @endif

        <x-button-component />
        </form>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="user" />
@endsection
