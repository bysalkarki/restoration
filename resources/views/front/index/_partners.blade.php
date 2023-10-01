<!-- Clients Section -->
<section class="clients-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="circle-box"></div>
            <h2>Some of our Respected and beloved partners</h2>
        </div>

        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                @foreach ($partners as $partner)
                    <li class="slide-item">
                        <figure class="image-box"><a href="{{$partner->url}}"><img src="{{$partner->image}}" alt=""></a>
                        </figure>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</section>
<!-- End Clients Section -->
