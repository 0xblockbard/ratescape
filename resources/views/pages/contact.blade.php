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
    <meta property="og:url" content="{{ url('/contact') }}" />

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

    <div class=" flex flex-grow items-center justify-center w-full h-screen">

        <div class="w-full mx-auto h-full mt-6">
            <div class="relative bg-white h-full dark:bg-black">
                <h2 class="sr-only">Contact us</h2>

                <div class="h-full grid grid-cols-1 lg:grid-cols-3">

                    {{-- Contact information --}}
                    <div class="contact_left_container relative py-10 px-6 bg-blue-900 sm:px-10 xl:p-12 rounded-xl mx-5">
                        <div class="absolute inset-0 pointer-events-none sm:hidden" aria-hidden="true">
                            <svg class="absolute inset-0 w-full h-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" />
                                <defs>
                                    <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fff"></stop>
                                        <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none sm:block lg:hidden" aria-hidden="true">
                            <svg class="absolute inset-0 w-full h-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" />
                                <defs>
                                    <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fff"></stop>
                                        <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none lg:block" aria-hidden="true">
                            <svg class="absolute inset-0 w-full h-full" width="160" height="678" viewBox="0 0 160 678" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" />
                                <defs>
                                    <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fff"></stop>
                                        <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h1 class="text-2xl font-title font-medium text-white">{{ $page->title }}</h1>
                        <div class="mt-6 font-text text-base text-gray-50 max-w-2xl">{!! $page->content !!}</div>
                        <dl class="mt-8 space-y-6">

                            {{--                            <dt><span class="sr-only">Email</span></dt>--}}
{{--                            <dd class="flex text-base text-gray-50">--}}
{{--                                <!-- Heroicon name: outline/mail -->--}}
{{--                                <svg class="flex-shrink-0 w-6 h-6 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />--}}
{{--                                </svg>--}}
{{--                                <span class="font-text ml-3">hello@template.com</span>--}}
{{--                            </dd>--}}
                        </dl>

                    </div>

                    {{-- Contact Form --}}
                    <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                        <h3 class="text-lg font-title font-medium text-gray-900 dark:text-gray-100">Drop me a message</h3>

                        @include('partials.flash_messages')

                        <form action="{{ route('submit_contact_message') }}" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">

                            {{ csrf_field() }}

                            @hiddencaptcha

                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-900 dark:text-gray-200">Name</label>
                                <div class="mt-1">
                                    <input type="text"
                                           required name="name" id="name"
                                           value="{{ old('name') }}" placeholder="Your Name" autocomplete="given-name"
                                           class="py-2 px-4 text-sm block w-full shadow-sm text-gray-900 focus:ring-gray-500 focus:border-blue-500 border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-100 dark:focus:ring-gray-200 dark:focus:border-gray-200 dark:placeholder-gray-400">
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-900 dark:text-gray-200">Email</label>
                                <div class="mt-1">
                                    <input id="email"
                                           required name="email" type="email"
                                           value="{{ old('email') }}" autocomplete="email" placeholder="Your Email"
                                           class="py-2 px-4 text-sm block w-full shadow-sm text-gray-900 focus:ring-gray-500 focus:border-blue-500 border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-100 dark:focus:ring-gray-200 dark:focus:border-gray-200 dark:placeholder-gray-400">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="subject" class="block text-sm font-medium text-gray-900 dark:text-gray-200">Subject</label>
                                <div class="mt-1">
                                    <input type="text"
                                           required  name="subject" id="subject"
                                           value="{{ old('subject') }}" placeholder="Your Subject"
                                           class="py-2 px-4 text-sm block w-full shadow-sm text-gray-900 focus:ring-gray-500 focus:border-blue-500 border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-100 dark:focus:ring-gray-200 dark:focus:border-gray-200 dark:placeholder-gray-400">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex justify-between">
                                    <label for="message" class="block text-sm font-medium text-gray-900 dark:text-gray-200">Message</label>
                                    <span id="message-max" class="text-sm text-gray-500 dark:text-gray-400">Max. 1000 characters</span>
                                </div>
                                <div class="mt-1">
                                    <textarea id="message" placeholder="Type your message here" required name="message" rows="4" class="py-3 px-4 text-sm block w-full shadow-sm text-gray-900 focus:ring-gray-500 focus:border-blue-500 border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-100 dark:focus:ring-gray-200 dark:focus:border-gray-200 dark:placeholder-gray-400" aria-describedby="message-max">
                                        {{ old('message') }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:flex sm:justify-end">
                                <button type="submit" umami--click--contact-submit-button class="mt-2 w-full inline-flex items-center justify-center px-6 py-3 black-button focus:outline-none focus:ring-2 focus:ring-offset-2 sm:w-auto">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

