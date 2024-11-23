<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="has-navbar-fixed-top">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- Favicon --}}
    {{-- <link rel="icon" href="{{ config('app.CF_URL').'/assets/default/favicon/favicon-16x16.png' }}" type="image/x-icon" sizes="16x16">
    <link rel="icon" href="{{ config('app.CF_URL').'/assets/default/favicon/favicon-32x32.png' }}" type="image/x-icon" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ config('app.CF_URL').'/assets/default/favicon/apple-touch-icon.png' }}" sizes="180x180"> --}}

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ asset_path('assets/css/app.css') }}" >

    {{-- Title --}}
    <title>@yield('title', 'Template')</title>

    {{-- Meta --}}
    <meta name="description" content="@yield('description')" />
    <meta property="og:site_name" content="Rat Escape" />
    <meta property="og:locale" content="en_US" />
    @yield('meta')

    @yield('head')

</head>

<body id="body">

    @include('partials.nav')

    <div class="container mx-auto mt-2 sm:px-2 lg:px-4">
        @yield('content')
    </div>

    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"   integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@16.0.0/dist/lazyload.min.js"></script>

    <script src="{{ asset_path('/assets/js/default/default.js') }}"></script>
    <script src="{{ asset_path('/assets/js/default/lazyLoadAssets.js') }}"></script>

    @yield('scripts')

</body>
</html>
