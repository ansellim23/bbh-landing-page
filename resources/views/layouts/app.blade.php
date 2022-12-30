<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('css/vendors/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('css/vendors/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/vendors/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/vendors/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        @yield('styles')

        @livewireStyles
    </head>
    <body>
        <livewire:components.nav/>
        @yield('hero-banner')
        <main id="main">
            {{$slot}}
        </main>
        <livewire:components.footer>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <div id="preloader"></div>

        @yield('modal')

        @livewireScripts
        <script src="{{ asset('js/vendors/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('js/vendors/aos/aos.js') }}"></script>
        <script src="{{ asset('js/vendors/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('js/vendors/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/vendors/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/vendors/php-email-form/validate.js') }}"></script>
        @yield('scripts')
    </body>
</html>
