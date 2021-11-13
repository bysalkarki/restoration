<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <div class="page-wrapper">
        <!-- Main Header-->
        <header class="main-header">

            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container clearfix">

                        <!-- Top Left -->
                        <div class="top-left pull-left">
                            <!-- Info List -->
                            <ul class="info-list">
                                <li><span class="icon flaticon-call-1"></span> <a
                                        href="tel:{{ config('settings.phone') }}">{{ config('settings.phone') }}</a>
                                </li>
                                <li><span class="icon flaticon-email-2"></span><a
                                        href="mailto:{{ config('settings.email') }}">{{ config('settings.email') }}</a>
                                </li>
                                <li><span class="icon flaticon-maps-and-flags"></span>{{ config('settings.address') }}
                                </li>
                            </ul>
                        </div>

                        <!-- Top Right -->
                        <div class="top-right pull-right">
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href="{{ config('settings.facebook') }}"
                                        class="fab fa-facebook-f"></a></li>
                                <li class="google"><a href="{{ config('settings.google') }}"
                                        class="fab fa-google"></a></li>
                                <li class="twitter"><a href="{{ config('settings.twitter') }}"
                                        class="fab fa-linkedin-in"></a></li>
                                <li class="youtube"><a href="{{ config('settings.youtube') }}"
                                        class="fab fa-google "></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container clearfix">

                        <div class="pull-left logo-box">
                            <div class="logo"><a href="index.html"><img src="images/logo.png" alt=""
                                        title=""></a></div>
                        </div>

                        <x-front.navbar />
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav><!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">

                            <!-- Search Btn -->
                            <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                            <!-- Quote Btn -->
                            <div class="btn-box">
                                <a href="contact.html" class="theme-btn btn-style-one"><span
                                        class="txt">Donate Now</span></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->
        </header>
        <!-- End Main Header -->
        @yield('content')













        <!-- Counter Section -->
        <section class="counter-section" style="background-image: url(images/bg2.jpg)">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Video Column -->
                    <div class="video-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                class="lightbox-image video-box"><span class="fa fa-play"><i
                                        class="ripple"></i></span></a>
                            <h2>Your Goals are Individual. We Believe Business Advice.</h2>
                            <div class="phone">Free Consulting: <a href="tel:+1-800-100-900">+1 800 100
                                    900</a></div>
                        </div>
                    </div>
                    <!-- Counter Column -->
                    <div class="counter-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <!-- Fact Counter -->
                            <div class="fact-counter">

                                <!-- Column -->
                                <div class="column counter-column">
                                    <div class="inner">
                                        <div class="icon flaticon-settings"></div>
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2500" data-stop="7">0</span>M
                                            </div>
                                            <h4 class="counter-title">Digital Projects</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column -->
                                <div class="column counter-column">
                                    <div class="inner">
                                        <div class="icon flaticon-darts"></div>
                                        <div class="content">
                                            <div class="count-outer count-box alternate">
                                                <span class="count-text" data-speed="2000"
                                                    data-stop="5000">0</span>+
                                            </div>
                                            <h4 class="counter-title">Active Subscribing</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column -->
                                <div class="column counter-column">
                                    <div class="inner">
                                        <div class="icon flaticon-online-learning"></div>
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2000" data-stop="1">0</span>m
                                            </div>
                                            <h4 class="counter-title">Monthly Customer</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column -->
                                <div class="column counter-column">
                                    <div class="inner">
                                        <div class="icon flaticon-search"></div>
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2000"
                                                    data-stop="160">0</span>+
                                            </div>
                                            <h4 class="counter-title">Professional Team</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter Section -->

        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="circle-box"></div>
                    <div class="title">Our News</div>
                    <h2>Latest News</h2>
                </div>
                <div class="row clearfix">

                    <!-- News Block -->
                    <div class="news-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="news-detail.html"><img src="images/news-1.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>Dec 20, 2020</li>
                                    <li><span class="icon fa fa-eye"></span>130.5k</li>
                                    <li><span class="icon fa fa-comment"></span>2</li>
                                </ul>
                                <h4><a href="news-detail.html">We would love to share a similar experience</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="news-detail.html"><img src="images/news-2.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>Dec 20, 2020</li>
                                    <li><span class="icon fa fa-eye"></span>130.5k</li>
                                    <li><span class="icon fa fa-comment"></span>2</li>
                                </ul>
                                <h4><a href="news-detail.html">We would love to share a similar experience</a></h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End News Section Two -->

        <!-- Testimonial Section -->
        <section class="testimonial-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Images Column -->
                    <div class="images-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <span class="quote-icon flaticon-quote-1"></span>
                            <div class="author">
                                <img src="images/author-1.jpg" alt="" />
                            </div>
                            <div class="author-two">
                                <img src="images/author-2.jpg" alt="" />
                            </div>
                            <div class="author-three">
                                <img src="images/author-3.jpg" alt="" />
                            </div>
                            <div class="author-four">
                                <img src="images/author-4.jpg" alt="" />
                            </div>
                            <div class="author-five">
                                <img src="images/author-5.jpg" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Column -->
                    <div class="carousel-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="icon-layer-one" style="background-image: url(images/icon-3.png)"></div>
                            <div class="icon-layer-two" style="background-image: url(images/icon-4.jpg)"></div>
                            <div class="sec-title">
                                <h2>Satisfied Client’s Reviews.</h2>
                            </div>
                            <!-- Carousel -->
                            <div class="single-item-carousel owl-carousel owl-theme">

                                <!-- Testimonial Block -->
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="text">They quickly developed the requisite knowledge
                                            about our industry and internal processes. We couldn’t have achieved the
                                            same level of success without them.</div>
                                        <div class="author">Walkar James <span>Company Director</span></div>
                                    </div>
                                </div>

                                <!-- Testimonial Block -->
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="text">They quickly developed the requisite knowledge
                                            about our industry and internal processes. We couldn’t have achieved the
                                            same level of success without them.</div>
                                        <div class="author">Walkar James <span>Company Director</span></div>
                                    </div>
                                </div>

                                <!-- Testimonial Block -->
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="text">They quickly developed the requisite knowledge
                                            about our industry and internal processes. We couldn’t have achieved the
                                            same level of success without them.</div>
                                        <div class="author">Walkar James <span>Company Director</span></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Testimonial Section -->

        <!-- Appointment Section -->
        <section class="appointment-section">
            <div class="inner-container">
                <div class="side-image">
                    <img src="images/appointment.png" alt="" />
                </div>
                <div class="icon-layer-one" style="background-image: url(images/appointment-layer.png)"></div>
                <div class="icon-layer-two" style="background-image: url(images/pattern-2.png)"></div>
                <div class="sec-title">
                    <h2>Book an appointment</h2>
                    <div class="text">Get appointments from your website. Turn your followers into new
                        clients.</div>
                </div>
                <div class="row clearfix">

                    <!-- Info Column -->
                    <div class="info-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <ul class="list">
                                <li>30 Commercial Road new <br> Fratton, Australia</li>
                                <li><a href="tel:+01473-5538561">+01473 5538561</a> <br> <a
                                        href="mailto:username@domain.com">username@domain.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <!-- Appointment Form -->
                            <div class="appointment-form">
                                <form method="post" action="contact.html">

                                    <div class="form-group">
                                        <input type="text" name="username" placeholder="Complate Name" required="">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email Address" required="">
                                    </div>

                                    <div class="form-group">
                                        <textarea class="darma" name="message"
                                            placeholder="Your Message"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                                class="txt">send message</span></button>
                                    </div>

                                </form>
                            </div>
                            <!-- End Appointment Form -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Appointment Section -->

        <!-- Main Footer -->
        <footer class="main-footer style-two" style="background-image: url(images/bg3.jpg)">
            <div class="auto-container">
                <div class="logo">
                    <a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
                </div>
                <div class="text">We bring the years, global experience, and stamina to guide our <br>
                    clients through new and often disruptive realities.</div>
                <ul class="footer-list">
                    <li><a href="#">Privacy Statement</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
                <div class="copyright">&copy; Copyright 2021 <a href="index.html">Uricko.</a> All Rights Reserved.
                </div>
            </div>
        </footer>
        <!-- End Main Footer -->

    </div>
    <!--End pagewrapper-->

    <!-- Search Popup -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
        <button class="close-search"><span class="fa fa-arrow-up"></span></button>
        <form method="post" action="blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <!-- Scroll To Top -->
    <div class="back-to-top scroll-to-target show-back-to-top" data-target="html">TOP</div>

    <script src="{{ asset('front/js/jquery.js') }}"></script>
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('front/js/appear.js') }}"></script>
    <script src="{{ asset('front/js/parallax.min.js') }}"></script>
    <script src="{{ asset('front/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.js') }}"></script>
    <script src="{{ asset('front/js/wow.js') }}"></script>
    <script src="{{ asset('front/js/nav-tool.js') }}"></script>
    <script src="{{ asset('front/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('front/js/validate.js') }}"></script>
    <script src="{{ asset('front/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
    <script src="{{ asset('front/js/color-settings.js') }}"></script>
</body>

</html>
