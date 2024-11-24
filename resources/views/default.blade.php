<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="has-navbar-fixed-top">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('storage/assets/favicon/favicon-16x16.png') }}" type="image/x-icon" sizes="16x16">
    <link rel="icon" href="{{ asset('storage/assets/favicon/favicon-32x32.png')  }}" type="image/x-icon" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('storage/assets/favicon/apple-touch-icon.png')  }}" sizes="180x180">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Chewy&family=Luckiest+Guy&family=Permanent+Marker&display=swap" rel="stylesheet">

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}" >

    {{-- Title --}}
    <title>@yield('title', 'Rat Escape')</title>

    {{-- Meta --}}
    <meta name="description" content="RAT is the ultimate memecoin for bag holders trapped in the rat race, offering nothing but a shot at freedom." />
    <meta property="og:site_name" content="Rat Escape" />
    <meta property="og:locale" content="en_US" />
    @yield('meta')

    @yield('head')

</head>

<body id="body">

    @yield('content')

    @include('partials.footer')

    <script src="{{ asset('/assets/js/default/default.js') }}"></script>

    @yield('scripts')

</body>
</html>
