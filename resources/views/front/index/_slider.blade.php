@if ($sliders->count())
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="main-slider-carousel owl-carousel owl-theme">
            @foreach ($sliders as $slider)
                <div class="slide">
                    <div class="icon-layer-one" style="background-image: url('front/images/icon-1.png')"></div>
                    <div class="icon-layer-two" style="background-image: url('front/images/icon-2.png')"></div>
                    <div class="icon-layer-three" style="background-image: url('front/images/icon-3.png')"></div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h1>{{ $slider->title }}</h1>
                                    <div class="text">{{ $slider->description }}</div>
                                    <div class="btns-box">
                                        <a href="about.html" class="theme-btn btn-style-one"><span
                                                class="txt">started consulting</span></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{ $slider->image }}" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <!-- Waves Container -->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!-- Waves End -->
    </section>
    <!-- End Banner Section -->
@endif
