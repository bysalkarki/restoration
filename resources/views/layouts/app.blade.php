<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ucwords(config('settings.name').'-'.preg_replace('/admin|\//','-',request()->getRequestUri()))}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> --}}
        @include('layouts._includes._topnav')
        @include('layouts._includes._sidebar')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('breadcrumb')
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        @include('layouts._includes._asidebar')
        @include('layouts._includes._footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')
    @include('layouts._includes._notify')

</body>

</html>
