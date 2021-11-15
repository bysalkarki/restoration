<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">
    @stack('style')
    <link rel="shortcut icon" href="{{ config('settings.favicon') }}" type="image/x-icon">
    <link rel="icon" href="{{ config('settings.favicon') }}" type="image/x-icon">
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
                            <div class="logo"><a href="{{ route('index') }}"><img
                                        src="{{ config('settings.logo') }}" alt="" title=""></a></div>
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
                        <a href="{{ route('index') }}" title=""><img src="{{ config('settings.logo') }}" alt=""
                                title="{{ config('settings.name') }}"></a>
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
                    <div class="nav-logo"><a href="{{ route('index') }}"><img
                                src="{{ config('settings.logo') }}" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->
        </header>
        <!-- End Main Header -->
        @yield('content')
        <!-- Main Footer -->
        <footer class="main-footer style-two" style="background-image: url(images/bg3.jpg)">
            <div class="auto-container">
                <div class="logo">
                    <a href="{{ route('index') }}"><img src="{{ config('settings.footerLogo') }}" alt="" /></a>
                </div>
                <div class="text">{{ config('settings.footerText') }}</div>
                <ul class="footer-list">
                    <li><a href="#">Privacy Statement</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
                <div class="copyright">&copy; Copyright {{now()->format('Y')}} <a
                        href="{{ route('index') }}">{{ config('settings.name') }}.</a> All Rights
                    Reserved.
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
    @stack('scripts')
</body>

</html>
