@extends('layouts.app')

@section('content')
    <x-card title="Menu Form" footer="">
        @if ($menu->id)
            <form action="{{ route('menu.update', $menu->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('menu.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="title" :value="$menu->title" :option="['placeholder'=>'menu','required'=>true]" />

        <x-form.publishStatus name="type" :list='$menu::getType()' :value="$menu->type" label="menu category" />
        <x-form.input name="description" type="textarea" :value="$menu->description"
            :option="['placeholder'=>'menu description','required'=>true]" />
        <x-form.publishStatus :value="$menu->publishStatus" />
        <x-form.image title="parallexImage" :value="$menu->parallexImage" />
        <x-form.image title="featuredImage" :value="$menu->featuredImage" />
        <x-form.input name="externalUrl" type="url" :value="$menu->externalUrl"
            :option="['placeholder'=>'menu','required'=>true]" />
        <div class="h4 p-2 text-center col-12 bg-dark my-3">Meta Attributes</div>
        <x-form.input name="metaTitle" :value="$menu->metaTitle" :option="['placeholder'=>'menu','required'=>true]" />
        <x-form.input name="metaDescription" type="textarea" :value="$menu->metaDescription"
            :option="['placeholder'=>'menu metaDescription','required'=>true]" />
        <x-form.input name="metaKeyphrase" :value="$menu->metaKeyphrase"
            :option="['placeholder'=>'Write keywords to identify this page. seperated by commas','required'=>true]" />

        <x-button-component />
        </form>
    </x-card>
@endsection
@section('breadcrumb')
    <x-breadcrumb title="menu"/>
@endsection
