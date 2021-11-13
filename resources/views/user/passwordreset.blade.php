@extends('layouts.app')

@section('content')
    <x-card title="user Form" footer="">
        <form action="{{ route('resetPassword', $user->id) }}" method="POST">
            @method('patch')
            @csrf
            <div class="form-group">
                {!! Form::label('passwords', 'passwordd', ['class' => 'text-capitalize']) !!}
                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'required' => true]) !!}
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('passwords', 'passwordh', ['class' => 'text-capitalize']) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation', 'required' => true]) !!}
            </div>
            <x-button-component />
        </form>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="user" />
@endsection
