@extends('default')

@section('title')
    {{ $post->title }}
@stop

@section('description')
    {{ $post->meta_description }}
@stop

@section('meta')
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ $post->meta_description }}" />
    <meta property="og:type"  content="article" />
    <meta property="og:url" content="{{ url('/blog/'.$post->slug) }}" />

    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="414" />
    <meta property="og:image" content="{{ config('app.CF_URL').$post->featured_image_full_url }}" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@template">
    <meta name="twitter:creator" content="@template">
    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ $post->tagline }}">
    <meta name="twitter:image" content="{{ config('app.CF_URL').$post->featured_image_full_url }}">

@stop

@section('content')

    <article>
        <div class="flex flex-grow items-center justify-center w-full relative whitespace-normal break-words">

            <div class="relative mx-5 py-8 lg:py-12 xl:py-16  overflow-hidden dark:bg-black">

                <div class="relative px-6 lg:px-8">
                    <div class="text-lg max-w-prose mx-auto text-center">

                        <h1>
                            <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-gray-100">{{ $post->title }}</span>
                        </h1>
                        <p class="text-md text-gray-500  mt-4 leading-8 dark:text-gray-300">{{ $post->tagline }}</p>
                        <div class="mt-4 mb-4">
                            @if($post->featured_image_full_url !== NULL)
                                @if($post->featured_image_processed == 1)
                                    <img class="lazy" data-src="{{ config('app.CF_URL').$post->featured_image_url.'-large.webp' }}" >
                                @else
                                    <img class="lazy" data-src="{{ asset($post->featured_image_full_url) }}" >
                                @endif
                            @endif
                        </div>
                    </div>

                    @if($post->status == 0)
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-yellow-700">
                                        Post is in draft mode.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="mt-6 prose prose-indigo prose-lg text-gray-500 text-justify mx-auto dark:prose-dark ">

                        {!! $post->content !!}

                    </div>

                </div>
            </div>

        </div>
    </article>


@endsection


@section('scripts')

    {{-- Lazy load images within article content --}}
    <script src="{{ asset_path('/assets/js/post/contentLazyLoad.js') }}"></script>

@endsection
