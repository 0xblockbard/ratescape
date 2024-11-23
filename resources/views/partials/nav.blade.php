
<nav class="w-full navbar py-4 z-20">
    <div class="max-w-screen-xl mx-auto">
        <div class="flex justify-between h-16">
            <div class="flex px-2 lg:px-0 w-full">

                <div class="flex items-center font-extrabold">

                    <img class="h-14 w-14 rounded-full mr-4" src="{{ asset('storage/assets/rat-escape-sm.png') }}" />
                    <a href="/" class="text-3xl uppercase font-semibold tracking-wide text-gray-100 hover:text-yellow-200 font-permanentMarket">
                        Rat Escape
                    </a>

                </div>
                
                <div class="hidden xl:ml-14 xl:flex xl:space-x-6 text-xl text-gray-100 font-chewy transition duration-200 ease-in-out font-permanentMarket">

                    <a href="#about" 
                        class="flex flex-row items-center px-1 hover:text-yellow-300 ">
                        <span>About</span>
                    </a>
    
                    <a href="#escape-plan"
                        class="flex flex-row items-center px-1 hover:text-yellow-300 ">
                        <span>Escape Plan</span>
                    </a>
                    
                    <a href="#how" 
                        class="flex flex-row items-center px-1 hover:text-yellow-300 ">
                        <span>How to buy</span>
                    </a>

                    {{-- <a href="#socials" 
                        class="flex flex-row items-center px-1 hover:text-yellow-300">
                        <span>Socials</span>
                    </a> --}}
    
                </div>

            </div>

           <div class="flex items-center">
               <div class="flex-shrink-0">
                    <a href="https://pump.fun/coin/3vJenGaGsuKG5shPhi7rjnuy3MV6xjmBTGjYqYzXpump" target="_blank">
                        <button type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-xl font-medium rounded-md text-white bg-gray-800 shadow-sm hover:bg-gray-900 hover:text-yellow-300 hover:border-yellow-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 transition duration-300 ease-in-out font-permanentMarket">
                            <svg class="mr-2 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M4.519 20.008L21 20v-3.5a2 2 0 1 1 0-4V9H4.278"/><path d="m21 9l-9.385-4.992c-2.512.12-4.758 1.42-6.327 3.425C3.865 9.253 3 11.654 3 14.287c0 2.117.56 4.085 1.519 5.721M15 13v.01M8 13v.01M11 16v.01"/></g></svg>
                            <span>Escape</span>
                        </button>
                    </a>
               </div>

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
           </div>
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
