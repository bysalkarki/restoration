<div class="nav-outer clearfix">
    <!--Mobile Navigation Toggler-->
    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
    <!-- Main Menu -->
    <nav class="main-menu navbar-expand-md">
        <div class="navbar-header">
            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
            <ul class="navigation clearfix">
                @foreach ($navbars as $navbar)
                    <li @if (request()->is($navbar->route))
                        class="current"
                        @endif><a href="{{ url($navbar->route) }}">{{ $navbar->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </nav>

    <!-- Main Menu End-->
    <div class="outer-box clearfix">

        <!-- Search Btn -->
        <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span>
        </div>

        <!-- Quote Btn -->
        <div class="btn-box">
            <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">make an
                    appointment</span></a>
        </div>

    </div>
</div>
