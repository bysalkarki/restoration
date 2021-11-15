@php
$data = ['fadeInLeft', 'fadeInUp', 'fadeInRight'];
@endphp
<section class="feature-section">
    <div class="auto-container">
        <div class="row clearfix">

            @foreach ($features as $key => $feature)
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow {{ $data[$key % 3] }}" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="image-layer" style="background-image: url(front/images/feature-1.jpg)"></div>
                            <span class="icon "><img src="{{ $feature->image }}" alt="" /></span>
                        </div>
                        <div class="lower-content">
                            <h4><a href="#">{{ $feature->title }}</a></h4>
                            <div class="text">{{ $feature->description }}</div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Feature Section -->
