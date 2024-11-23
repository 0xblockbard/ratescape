@extends('default')

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
    <meta property="og:url" content="{{ url('/about') }}" />

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


    <div class="overflow-hidden ">
        <div class="relative mx-auto max-w-7xl mx-4 py-6 px-4 sm:px-6 lg:px-8 lg:py-16">
            
            {{-- <div class="absolute top-0 bottom-0 left-3/4 hidden w-screen bg-gray-50 lg:block"></div> --}}

            <div class="mx-auto max-w-prose text-base lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-8">
                <div>
                    <h2 class="text-lg font-semibold text-graphite-500">About</h2>

                    <h3 class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">
                        Template
                    </h3>
                </div>
            </div>
            <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="relative lg:col-start-2 lg:row-start-1">
                    <svg class="absolute top-0 right-0 -mt-20 -mr-20 hidden lg:block" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                        <defs>
                            <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
                    </svg>
                    <div class="relative mx-auto max-w-prose text-base lg:max-w-none">
                        <figure>
                            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">                                

                                @if($page->featured_image_full_url !== NULL)
                                    @if($page->featured_image_processed == 1)
                                        <img class="lazy rounded-lg object-cover object-center shadow-lg" data-src="{{ config('app.CF_URL').$page->featured_image_url.'-large.webp' }}" alt="tech labtop journal" width="1184" height="1376">
                                    @else
                                        <img class="lazy rounded-lg object-cover object-center shadow-lg" data-src="{{ asset($page->featured_image_full_url) }}" alt="tech labtop journal" width="1184" height="1376" >
                                    @endif
                                @endif

                            </div>
                            <figcaption class="mt-3 flex text-sm text-gray-500">
                                <!-- Heroicon name: mini/camera -->
                                <svg class="h-5 w-5 flex-none text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M1 8a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 018.07 3h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0016.07 6H17a2 2 0 012 2v7a2 2 0 01-2 2H3a2 2 0 01-2-2V8zm13.5 3a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM10 14a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2">Photograph by Kevin Canlas</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0">
                    <div class="mx-auto max-w-prose text-base lg:max-w-none">
                        <p class="text-lg text-gray-500">Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi.</p>
                    </div>
                    <div class="prose prose-indigo mx-auto mt-5 text-gray-500 lg:col-start-1 lg:row-start-1 lg:max-w-none">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
