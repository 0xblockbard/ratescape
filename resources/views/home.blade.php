@extends('default')

@section('title')
    RatEscape
@stop

@section('description')
    RatEscape
@stop

@section('meta')
    <meta property="og:title" content="RatEscape" />
    <meta property="og:description" content="RatEscape" />
    <meta property="og:type"  content="website" />
    <meta property="og:url" content="{{ url('/') }}" />

    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="414" />
    {{--    <meta property="og:image" content="{{ config('app.CF_URL').'/assets/default/snapshots/contact.jpg' }}" />--}}

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@template">
    <meta name="twitter:creator" content="@template">
    <meta name="twitter:title" content="RatEscape">
    <meta name="twitter:description" content="RatEscape">
    {{--    <meta name="twitter:image" content="{{ config('app.CF_URL').'/assets/default/snapshots/contact.jpg' }}">--}}
@stop

@section('head')
    {{-- Typed JS   --}}
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
@endsection

@section('content')

    <div class="homepage_container relative ">

        <div class="homepage_content flex min-h-screen pt-10 pb-16 px-10">

        
        </div> {{-- End homepage_content --}}

        {{-- <div class="pt-20">
            @include('partials.footer')
        </div> --}}

    </div> {{-- End homepage_container --}}


@endsection


@section('scripts')

    <script src="{{ asset_path('/assets/js/pages/home.js') }}"></script>

@endsection
