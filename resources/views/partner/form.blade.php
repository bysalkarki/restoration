@extends('layouts.app')

@section('content')
    <x-card title="partner Form" footer="">
        @if ($partner->id)
            <form action="{{ route('partner.update', $partner->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('partner.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="name" :value="$partner->name" :option="['placeholder'=>'partner','required'=>true]" />
        <x-form.publishStatus :value="$partner->publishStatus" />
        <x-form.image title="image" :value="$partner->image" />
        <x-form.input type="url" :value="$partner->website" name="website" :option="['placeholder'=>'website','required'=>true]"  />
        <x-button-component />
        </form>
    </x-card>
@endsection
