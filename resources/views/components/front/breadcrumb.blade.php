@props(['title', 'image' => 'front/images/4.jpg'])

<!-- Page Title Section -->
<section class="page-title" style="background-image: url({{ asset($image) }})">
    <div class="icon-layer-one" style="background-image: url(front/images/icon-1.png)"></div>
    <div class="icon-layer-two" style="background-image: url(front/images/icon-3.png)"></div>
    <div class="icon-layer-three" style="background-image: url(front/images/icon-2.png)"></div>
    <div class="auto-container">
        <h2>{{ $title }}</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('index') }}">home</a></li>
            <li>{{ $title }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title Section -->
