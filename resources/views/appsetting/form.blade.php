@extends('layouts.app')

@section('content')
    <x-card title="appsetting" footer="footer">
        <form action="{{ route('appsetting.store',request()->get('type')) }}" method="POST">
            @csrf
            @foreach ($appSettings as $setting)
                @if ($setting->type == 'image')
                    <x-form.image :title="$setting->key" :value="$setting->value" />
                    @continue
                @endif
                <x-form.input :name="$setting->key" :value="$setting->value" :type="$setting->type"
                    :option="['placeholder'=>$setting->key]" />
            @endforeach
            <x-button-component />
        </form>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="appsettings" />
@endsection
