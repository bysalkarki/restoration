@extends('layouts.app')

@section('content')
    <x-card title="event Form" footer="">
        @if ($event->id)
            <form action="{{ route('event.update', $event->id) }}" method="POST">
                @method('PATCH')
            @else
                <form action="{{ route('event.store') }}" method="POST">
        @endif
        @csrf
        <x-form.input name="title" :value="$event->title" :option="['placeholder'=>'title','required'=>true]" />
            <x-form.input name="summary" type="textarea" :value="$event->summary"
                :option="['placeholder'=>'Event description','required'=>true]" />

            <x-form.publishStatus :value="$event->publishStatus" />
            <x-form.input name="date" type="date" :value="$event->date"
                :option="['placeholder'=>'publish At','required'=>true]" />
            <x-form.input name="description" type="textarea" :value="$event->description"
                :option="['placeholder'=>'Event description','required'=>true]" />

            <x-form.image title="image" :value="$event->image" />
          <x-form.input name="location" :value="$event->location" :option="['placeholder'=>'location']" />
            <x-form.input name="venue" :value="$event->venue" :option="['placeholder'=>'venue']" />

                <x-button-component />
        </form>
    </x-card>
@endsection

@section('breadcrumb')
    <x-breadcrumb title="events"/>
@endsection
