@extends('front.layouts.front')

@section('content')
    @include('front.index._slider')
    @include('front.index._popups')
    @include('front.index._feature')
    @include('front.index._about')
    @include('front.index._project')
    @include('front.index._progress')
    @include('front.index._partners')

    @include('front.index._counter')
    @include('front.index._blog')
    @include('front.index._testimonial')
@endsection


