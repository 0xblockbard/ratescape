{{--@extends('default_admin')--}}

{{--@section('content')--}}

{{--    <section class="hero hero_title" style="background-image: url('/assets/images/home-banner.png')">--}}
{{--        <div class="hero-body">--}}
{{--            <div class="container">--}}
{{--                <h1 class="title">--}}
{{--                    Admin Dashboard--}}
{{--                </h1>--}}
{{--                <h2 class="subtitle is-size-6">--}}
{{--                    Manage everything here--}}
{{--                </h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <div class="container_section">--}}

{{--    </div>--}}

{{--@endsection--}}

{{--@extends('default_no_sidebar')--}}

{{--@section('mobile_sidebar')--}}
{{--    --}}{{-- Set admin default sidebar --}}
{{--    @yield('sidebar', \View::make('admin.partials.mobile_sidebar'))--}}
{{--@endsection--}}

{{--@section('sidebar')--}}
{{--    --}}{{-- Set admin default sidebar --}}
{{--    @yield('sidebar', \View::make('admin.partials.sidebar'))--}}
{{--    --}}
{{--@endsection--}}

{{--@section('content')--}}

{{--    <div class="flex flex-col sm:flex-row w-full px-6">--}}
{{--        <div class="w-full sm:w-1/6 flex">--}}
{{--            @include('admin.partials.sidebar')--}}
{{--        </div>--}}

{{--        <div class="flex w-full sm:w-5/6 border-l border-gray-200 dark:border-gray-400 my-4" style="height: 95%;">--}}
{{--            @yield('content_admin')--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}

{{--@section('scripts')--}}

{{--    @yield('scripts')--}}
{{--    @include('components.delete_modal')--}}

{{--@endsection--}}

@extends('default_admin')

@section('content_admin')

    <div class="pt-2 pb-16 h-full min-h-screen ">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-graphite-500">Admin Dashboard</h1>
        </div>


        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

            <h1 class="dark:text-gray-200 mt-6">Hello World</h1>

        </div>

    </div>

@endsection

