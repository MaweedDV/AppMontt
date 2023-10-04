<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>SUBDIRECCION DE PERSONAL</title>

    <meta name="description" content="">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    @yield('css')
    @vite(['resources/sass/main.scss', 'resources/sass/dashmix/themes/_base.scss', 'resources/js/dashmix/app.js'])

    @yield('js')
</head>

<body>
    <div id="page-container"
        class="sidebar-o enable-page-overlay sidebar-light page-header-dark light-mode side-scroll page-header-fixed">
        @include('layouts.common.sidebar')
        @include('layouts.common.header')

        <main id="main-container">
            @yield('content')
        </main>

        <footer id="page-footer" class="bg-body-light">
            <div class="content py-0">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                        <a class="fw-semibold" href="#" target="_blank">SUBDIRECCION DE PERSONAL</a> &copy;
                        <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @stack('scripts')
</body>

</html>
