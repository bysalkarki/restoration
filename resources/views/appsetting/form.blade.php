@extends('layouts.app')

@section('content')
    <x-card title="appsetting" footer="footer">
        <form action="{{ route('appsetting.store') }}" method="POST">
            @csrf
            @foreach ($appSettings as $setting)
                <x-form.input :name="$setting->key" :value="$setting->value" :type="$setting->type"
                    :option="['placeholder'=>$setting->key]" />
            @endforeach
            <x-button-component />
        </form>
    </x-card>
@endsection
