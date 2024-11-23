
{{-- <nav class="w-full navbar sticky top-0 z-50 border-b shadow-md neon-border" style="background-image: url('{{ asset('storage/assets/background/purple-pattern-bg-navbar.png') }}')"> --}}
<nav class="w-full navbar sticky top-0 z-50 border-b shadow-md neon-border overflow-hidden">
    <div class="ml-6 mr-8 mx-auto">
        <div class="flex justify-between h-16">
            <div class="flex px-2 lg:px-0 w-full">

                <div class="flex items-center font-extrabold">

                    <a href="/" class="text-xl uppercase font-semibold tracking-wide text-white">
                        RatEscape
                    </a>

                </div>

            {{-- </div> --}}

            {{-- <div class="py-3 w-30p"> --}}
                
                <div class="flex justify-end">
                    <div class="flex mr-2">

                        {{-- <img src="{{ asset('storage/assets/nav/top-line-2.png') }}" class="lazy w-60"> --}}
                        
                        {{-- <button type="button" class="rounded-md bg-electricblue-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-electricblue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-electricblue-600">Connect</button> --}}
                        
                    </div>
                </div>

            </div>

{{--            <div class="flex items-center">--}}
{{--                <div class="flex-shrink-0">--}}
{{--                    <button type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                        <!-- Heroicon name: solid/plus-sm -->--}}
{{--                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />--}}
{{--                        </svg>--}}
{{--                        <span>New Job</span>--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--                <div class="hidden md:ml-4 md:flex-shrink-0 md:flex md:items-center">--}}
{{--                    <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                        <span class="sr-only">View notifications</span>--}}
{{--                        <!-- Heroicon name: outline/bell -->--}}
{{--                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}

{{--                    <!-- Profile dropdown -->--}}
{{--                    <div class="ml-3 relative">--}}
{{--                        <div>--}}
{{--                            <button type="button" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">--}}
{{--                                <span class="sr-only">Open user menu</span>--}}
{{--                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">--}}
{{--                            </button>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

    </div>

    {{-- <div x-cloak x-show="mobile"
         x-transition:enter="transition-transform transition-opacity ease-out duration-300"
         x-transition:enter-start="opacity-0  transform -translate-y-2"
         x-transition:enter-end="opacity-100 scale-100 transform translate-y-0"
         x-transition:leave="transition transform translate-y-2  duration-200"
         x-transition:leave-end="opacity-0  transform -translate-y-3"
         class="" id="mobile_menu">

        <div class="pt-2 pb-3 space-y-1">
            <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-blue-300 hover:text-blue-500 " -->
            <a href="{{ route('about') }}" class="@if(\Request::route()->getName() == 'about') bg-blue-50 border-blue-700 text-blue-700 @else border-transparent text-gray-500 hover:bg-gray-50 hover:border-blue-300 hover:text-blue-500  @endif font-semibold block pl-3 pr-4 py-2 border-l-4 text-sm font-medium sm:pl-5 sm:pr-6"> About </a>
            <a href="{{ route('blog') }}" class="@if(\Request::route()->getName() == 'blog' OR \Request::route()->getName() == 'show_blogpost') bg-blue-50 border-blue-700 text-blue-700 @else border-transparent text-gray-500 hover:bg-gray-50 hover:border-blue-300 hover:text-blue-500  @endif font-semibold block pl-3 pr-4 py-2 border-l-4 text-sm font-medium sm:pl-5 sm:pr-6"> Blog </a>
            <a href="{{ route('contact') }}" class="@if(\Request::route()->getName() == 'contact') bg-blue-50 border-blue-700 text-blue-700 @else border-transparent text-gray-500 hover:bg-gray-50 hover:border-blue-300 hover:text-blue-500  @endif font-semibold block pl-3 pr-4 py-2 border-l-4 text-sm font-medium sm:pl-5 sm:pr-6"> Contact </a>
        </div>

    </div> --}}

</nav>
