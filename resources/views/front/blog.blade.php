@extends('front.layouts.front')

@section('content')
    <x-front.breadcrumb title="blog" image="front/images/2.jpg" />
    <!-- Blog Page Section -->
    <section class="blog-page-section">
        <div class="auto-container">
            <div class="row clearfix">

                @foreach ($blogs as $blog)
                    <!-- News Block -->
                    <div class="news-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{ route('blog.detail', $blog->slug) }}"><img src="{{ $blog->image }}"
                                        alt="{{ $blog->title }}" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>{{ $blog->publishAt->format('M d, Y') }}</li>
                                    <li><span class="icon fa fa-eye"></span>{{ $blog->view }}</li>
                                </ul>
                                <h4><a href="{{ route('blog.detail', $blog->slug) }}">Read More</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Styled Pagination -->
                {{ $blogs->links() }}
            <!-- End Styled Pagination -->

        </div>
    </section>
    <!-- End Blog Page Section -->
@endsection
