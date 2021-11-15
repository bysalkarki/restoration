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
                                            <li><a class="fab fa-linkedin" href="{{$team->linkedin}}"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Lower Content-->
                            <div class="lower-content">
                                <h5><a href="team-detail.html">Richard Will.</a></h5>
                                <div class="designation">CEO</div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Team Member -->
                <div class="team-member col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--Image Box-->
                        <div class="image-box">
                            <!--Image-->
                            <figure class="image">
                                <img src="images/team-5.jpg" alt="" />
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <!--Social Icon One-->
                                    <ul class="social-icon-one">
                                        <li><a class="fab fa-facebook-f" href="#"></a></li>
                                        <li><a class="fab fa-twitter" href="#"></a></li>
                                        <li><a class="fab fa-instagram" href="#"></a></li>
                                        <li><a class="fab fa-linkedin" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Lower Content-->
                        <div class="lower-content">
                            <h5><a href="team-detail.html">Roy Albert.M</a></h5>
                            <div class="designation">Senior Manager</div>
                        </div>
                    </div>
                </div>

                <!-- Team Member -->
                <div class="team-member col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--Image Box-->
                        <div class="image-box">
                            <!--Image-->
                            <figure class="image">
                                <img src="images/team-2.jpg" alt="" />
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <!--Social Icon One-->
                                    <ul class="social-icon-one">
                                        <li><a class="fab fa-facebook-f" href="#"></a></li>
                                        <li><a class="fab fa-twitter" href="#"></a></li>
                                        <li><a class="fab fa-instagram" href="#"></a></li>
                                        <li><a class="fab fa-linkedin" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Lower Content-->
                        <div class="lower-content">
                            <h5><a href="team-detail.html">Roy Albert.</a></h5>
                            <div class="designation">Manager</div>
                        </div>
                    </div>
                </div>

                <!-- Team Member -->
                <div class="team-member col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--Image Box-->
                        <div class="image-box">
                            <!--Image-->
                            <figure class="image">
                                <img src="images/team-3.jpg" alt="" />
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <!--Social Icon One-->
                                    <ul class="social-icon-one">
                                        <li><a class="fab fa-facebook-f" href="#"></a></li>
                                        <li><a class="fab fa-twitter" href="#"></a></li>
                                        <li><a class="fab fa-instagram" href="#"></a></li>
                                        <li><a class="fab fa-linkedin" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Lower Content-->
                        <div class="lower-content">
                            <h5><a href="team-detail.html">James Dip.</a></h5>
                            <div class="designation">Market Manager</div>
                        </div>
                    </div>
                </div>

                <!-- Team Member -->
                <div class="team-member col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--Image Box-->
                        <div class="image-box">
                            <!--Image-->
                            <figure class="image">
                                <img src="images/team-4.jpg" alt="" />
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <!--Social Icon One-->
                                    <ul class="social-icon-one">
                                        <li><a class="fab fa-facebook-f" href="#"></a></li>
                                        <li><a class="fab fa-twitter" href="#"></a></li>
                                        <li><a class="fab fa-instagram" href="#"></a></li>
                                        <li><a class="fab fa-linkedin" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Lower Content-->
                        <div class="lower-content">
                            <h5><a href="team-detail.html">Richard Will.</a></h5>
                            <div class="designation">Auditor</div>
                        </div>
                    </div>
                </div>

                <!-- Team Member -->
                <div class="team-member col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--Image Box-->
                        <div class="image-box">
                            <!--Image-->
                            <figure class="image">
                                <img src="images/team-6.jpg" alt="" />
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <!--Social Icon One-->
                                    <ul class="social-icon-one">
                                        <li><a class="fab fa-facebook-f" href="#"></a></li>
                                        <li><a class="fab fa-twitter" href="#"></a></li>
                                        <li><a class="fab fa-instagram" href="#"></a></li>
                                        <li><a class="fab fa-linkedin" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Lower Content-->
                        <div class="lower-content">
                            <h5><a href="team-detail.html">James Dip.</a></h5>
                            <div class="designation">Employee</div>
                        </div>
                    </div>
                </div>

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
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/2.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/3.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/4.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/2.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/3.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/4.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/2.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/3.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/4.png" alt=""></a></figure>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->
@endsection
