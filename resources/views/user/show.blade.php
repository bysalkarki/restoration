@extends('layouts.app')

@section('content')
    <x-card :title="$user->name" footer="">

    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="user" />
@endsection
