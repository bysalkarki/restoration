@php use App\utilities\Helpers; @endphp
    <!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Images Column -->
            <div class="images-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <span class="quote-icon flaticon-quote-1"></span>
                    @foreach ($testimonials as $key=> $testimonial)
                        @php $words = Helpers::getNumbersWord($key+1) @endphp
                        <div class="author{{$words}}">
                            <img src="{{ $testimonial->image }}" alt=""/>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Carousel Column -->
            <div class="carousel-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="icon-layer-one" style="background-image: url('front/images/icon-3.png')"></div>
                    <div class="icon-layer-two" style="background-image: url('front/images/icon-4.jpg')"></div>
                    <div class="sec-title">
                        <h2>Our Testimonials</h2>
                    </div>
                    <!-- Carousel -->
                    <div class="single-item-carousel owl-carousel owl-theme">

                        <!-- Testimonial Block -->
                        @foreach ($testimonials as $testimonial)
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="text">{{ $testimonial->description }}</div>
                                    <div class="author">{{ $testimonial->name }}
                                        <span>{{ $testimonial->description }}</span></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Testimonial Section -->
