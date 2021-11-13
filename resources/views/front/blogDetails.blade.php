@extends('front.layouts.front')

@section('content')
    <x-front.breadcrumb :title="$blog->title" :image="$blog->image" />
    <!-- Services Detail Section -->
    <section class="services-detail-section">
        <div class="auto-container">
            <div class="image">
                <img src="{{ $blog->image }}" alt="" />
                <div class="icon-layer-one" style="background-image: url({{ asset('front/images/icon-1.png') }})"></div>
                <div class="icon-layer-two" style="background-image: url({{ asset('front/images/icon-2.png') }})"></div>
            </div>
            <div class="lower-content">
                <div class="icon-layer-three" style="background-image: url({{ asset('front/images/icon-3.png') }})"></div>
                <div class="icon-layer-four" style="background-image: url({{ asset('front/images/icon-3.png') }})"></div>
                <div class="row clearfix">
                    <!-- Icon Column -->
                    <div class="icon-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="icon-outer">
                                <div class="image-layer" style="background-image: url({{ $blog->image }})"></div>
                                <span class="icon "><img src="{{ asset('front/images/feature-icon-2.png') }}"
                                        alt="" /></span>
                            </div>
                        </div>
                    </div>
                    <!-- Content Column -->
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2>{{ $blog->title }}</h2>
                            <div class="text">
                                <p>{!! $blog->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Detail Section -->
@endsection
