@extends('layouts.app')

@section('content')
    <x-card title="Counter Form" footer="">
        @if ($counter->id)
            <form action="{{ route('counter.update', $counter->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('counter.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="title" :value="$counter->title" :option="['placeholder'=>'title','required'=>true]" />
        <x-form.input type="number" name="min" :value="$counter->min" :option="['placeholder'=>'title','required'=>true]" />
        <x-form.input type="number" name="max" :value="$counter->max" :option="['placeholder'=>'title','required'=>true]" />
        <x-form.publishStatus name="type" :list='$counter::TYPE' :value="$counter->type"  label="Counter Type"/>
        <x-form.publishStatus :value="$counter->publishStatus" />

        <x-button-component />
        </form>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="Counter"/>
@endsection
