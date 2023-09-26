    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="circle-box"></div>
                <div class="title">Article</div>
                <h2>Latest Article</h2>
            </div>
            <div class="row clearfix">

                <!-- News Block -->
                @foreach ($blogs as $blog)
                    <div class="news-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow @if ($loop->first)
                           {{ 'fadeInLeft' }}
                            @else
                           {{ 'fadeInRight' }}
                        @endif"
                            data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="{{route('blog.detail',$blog->slug)}}"><img src="{{ $blog->image }}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>{{ $blog->publishAt->format('M d, Y') }}</li>
                                    <li><span class="icon fa fa-eye"></span>{{ $blog->view }}</li>
                                </ul>
                                <h4><a href="{{route('blog.detail',$blog->slug)}}">{{ $blog->title }}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- End News Section Two -->
