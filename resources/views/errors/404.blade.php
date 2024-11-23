@extends('default')

@section('content')

    <div class="">
        <main class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
        
            <div class="mx-auto max-w-xl py-16 sm:py-24">
                
                <div class="text-center">
                    <p class="text-6xl font-semibold text-blue-600">404</p>
                    <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">This page does not exist.</h1>
                    <p class="mt-2 text-lg text-gray-500">Oops, the page you are looking for could not be found.</p>
                </div>

                <div class="mt-12">
                
                    {{-- <h2 class="text-base font-semibold text-gray-500">Popular pages</h2> --}}

                    <ul role="list" class="mt-4 divide-y divide-gray-200 border-t border-b border-gray-200">
                        <li class="relative flex items-start space-x-4 py-6">
                        <div class="flex-shrink-0">
                            <span class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50">
                            <!-- Heroicon name: info-circle -->
                            <svg class="h-6 w-6 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg>                      
                            </span>
                        </div>
                        <div class="min-w-0 flex-1">
                            <h3 class="text-base font-medium text-gray-900">
                            <span class="rounded-sm focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2">
                                <a href="{{ route('about') }}" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                About
                                </a>
                            </span>
                            </h3>
                            <p class="text-base text-gray-500">More about me</p>
                        </div>
                        <div class="flex-shrink-0 self-center">
                            <!-- Heroicon name: mini/chevron-right -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        </li>
            
            
                        <li class="relative flex items-start space-x-4 py-6">
                        <div class="flex-shrink-0">
                            <span class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50">
                            <!-- Heroicon name: outline/book-open -->
                            <svg class="h-6 w-6 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            </span>
                        </div>
                        <div class="min-w-0 flex-1">
                            <h3 class="text-base font-medium text-gray-900">
                            <span class="rounded-sm focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2">
                                <a href="{{ route('blog') }}" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Blog
                                </a>
                            </span>
                            </h3>
                            <p class="text-base text-gray-500">Read my latest articles and blogposts</p>
                        </div>
                        <div class="flex-shrink-0 self-center">
                            <!-- Heroicon name: mini/chevron-right -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        </li>
            
                        <li class="relative flex items-start space-x-4 py-6">
                        <div class="flex-shrink-0">
                            <span class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50">
                            <!-- Heroicon name: chat bubble -->
                            <svg class="h-6 w-6 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                            </svg>
                            </span>
                        </div>
                        <div class="min-w-0 flex-1">
                            <h3 class="text-base font-medium text-gray-900">
                            <span class="rounded-sm focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2">
                                <a href="{{ route('contact') }}" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Contact
                                </a>
                            </span>
                            </h3>
                            <p class="text-base text-gray-500">Get in touch with me</p>
                        </div>
                        <div class="flex-shrink-0 self-center">
                            <!-- Heroicon name: mini/chevron-right -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        </li>
                    </ul>

                    <div class="mt-8">
                        <a href="{{ route('home') }}" class="text-base font-medium text-blue-600 hover:text-blue-500">
                        Or go back home
                        <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>

                </div>

            </div>

        </main>

    </div>
      

@endsection
