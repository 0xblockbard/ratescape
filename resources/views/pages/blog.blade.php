@extends('default_no_sidebar')

@section('title')
    {{ $page->meta_title }}
@stop

@section('description')
    {{ $page->meta_description }}
@stop

@section('meta')
    <meta property="og:title" content="{{ $page->meta_title }}" />
    <meta property="og:description" content="{{ $page->meta_description }}" />
    <meta property="og:type"  content="website" />
    <meta property="og:url" content="{{ url('/blog') }}" />

    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="414" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@template">
    <meta name="twitter:creator" content="@template">
    <meta name="twitter:title" content="{{ $page->meta_title }}">
    <meta name="twitter:description" content="{{ $page->meta_description }}">

    @if($page->featured_image_full_url !== NULL)
        @if($page->featured_image_processed == 1)
            <meta name="twitter:image" content="{{ config('app.CF_URL').$page->featured_image_url.'-medium.webp' }}">
            <meta name="og:image" content="{{ config('app.CF_URL').$page->featured_image_url.'-medium.webp' }}">
        @else
            <meta name="twitter:image" content="{{  asset($page->featured_image_full_url)}}">
            <meta name="og:image" content="{{  asset($page->featured_image_full_url)}}">
        @endif
    @endif
@stop



@section('content')

    <div class="relative bg-white pt-6 pb-20 px-8 sm:px-6 lg:pt-12 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-left">
                <h1 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Blog</h1>
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                
                @foreach($posts as $post)
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden group hover:drop-shadow-xl duration-500">
                        <div class="flex-shrink-0">

                            <a href="{{ route('show_blogpost', $post->slug) }}">
                                @if($post->featured_image_full_url !== NULL)
                                    @if($post->featured_image_processed == 1)
                                        <img class="h-48 w-full object-cover lazy group-hover:opacity-80 group-hover:scale-110 duration-500" data-src="{{ config('app.CF_URL').$post->featured_image_url.'-small.webp' }}" >
                                    @else
                                        <img class="h-48 w-full object-cover lazy group-hover:opacity-80 group-hover:scale-110 duration-500" data-src="{{ asset($post->featured_image_full_url) }}" >
                                    @endif
                                @else 
                                <!-- show placeholder -->
                                @endif
                            </a>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-blue-600">
                                    <a href="#" class="hover:underline"> Article </a>
                                </p>
                                <a href="{{ route('show_blogpost', $post->slug) }}" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">{{ $post->title }}</p>
                                    <p class="mt-3 text-base text-gray-500">{{ $post->excerpt }} </p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
