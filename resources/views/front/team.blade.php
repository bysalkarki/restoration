@extends('front.layouts.front')
@php
$data = ['fadeInLeft', 'fadeInUp', 'fadeInRight'];
@endphp
@section('content')
    <x-front.breadcrumb title="team" image="front/images/2.jpg" />
    <!-- Team Page Section -->
    <section class="team-page-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="circle-box"></div>
                <h2>Meet Our Leadership Team</h2>
            </div>

            <div class="row clearfix">

                @foreach ($teams as $key => $team)
                    <!-- Team Member -->
                    <div class="team-member col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow {{ $data[$key % 3] }}" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <!--Image Box-->
                            <div class="image-box">
                                <!--Image-->
                                <figure class="image">
                                    <img src="{{ $team->image }}" alt="" />
                                </figure>
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="inner">
                                        <!--Social Icon One-->
                                        <ul class="social-icon-one">
                                            <li><a class="fab fa-facebook-f" href="{{ $team->facebook }}"></a></li>
                                            <li><a class="fab fa-twitter" href="{{ $team->twitter }}"></a></li>
                                            <li><a class="fab fa-instagram" href="{{ $team->instagram }}"></a></li>
                                            <li><a class="fab fa-linkedin" href="{{ $team->linkedin }}"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Lower Content-->
                            <div class="lower-content">
                                <h5><a href="{{ route('team.detail', $team->username) }}">{{ $team->name }}</a></h5>
                                <div class="designation">{{ $team->designation }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
    <!-- End Team Page Section -->

    <!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">

            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    @foreach ($partners as $partner)
                        <li class="slide-item" title="{{ $partner->name }}">
                            <figure class="image-box"><a href="{{ $partner->website }}"><img
                                        src="{{ $partner->image }}" alt="{{ $partner->name }}"></a></figure>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->
@endsection
