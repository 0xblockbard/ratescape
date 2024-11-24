
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

                    <a href="#tokenomics" 
                        class="flex flex-row items-center px-1 hover:text-yellow-300">
                        <span>Tokenomics</span>
                    </a>
    
                </div>

            </div>

                <div class="flex items-center">

                    <div class="flex flex-row items-center space-x-6 mr-6">

                        {{-- Twitter --}}
                        <a href="https://x.com/RATescapeplan" class="text-gray-100 hover:text-yellow-300 transition duration-300 ease-in-out" target="_blank">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                
                        {{-- Discord --}}
                        <a href="{{ url('/discord') }}" class="text-gray-100 hover:text-yellow-300 transition duration-300 ease-in-out" target="_blank">
                            <span class="sr-only">Discord</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 -28.5 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                                <g>
                                    <path d="M216.856339,16.5966031 C200.285002,8.84328665 182.566144,3.2084988 164.041564,0 C161.766523,4.11318106 159.108624,9.64549908 157.276099,14.0464379 C137.583995,11.0849896 118.072967,11.0849896 98.7430163,14.0464379 C96.9108417,9.64549908 94.1925838,4.11318106 91.8971895,0 C73.3526068,3.2084988 55.6133949,8.86399117 39.0420583,16.6376612 C5.61752293,67.146514 -3.4433191,116.400813 1.08711069,164.955721 C23.2560196,181.510915 44.7403634,191.567697 65.8621325,198.148576 C71.0772151,190.971126 75.7283628,183.341335 79.7352139,175.300261 C72.104019,172.400575 64.7949724,168.822202 57.8887866,164.667963 C59.7209612,163.310589 61.5131304,161.891452 63.2445898,160.431257 C105.36741,180.133187 151.134928,180.133187 192.754523,160.431257 C194.506336,161.891452 196.298154,163.310589 198.110326,164.667963 C191.183787,168.842556 183.854737,172.420929 176.223542,175.320965 C180.230393,183.341335 184.861538,190.991831 190.096624,198.16893 C211.238746,191.588051 232.743023,181.531619 254.911949,164.955721 C260.227747,108.668201 245.831087,59.8662432 216.856339,16.5966031 Z M85.4738752,135.09489 C72.8290281,135.09489 62.4592217,123.290155 62.4592217,108.914901 C62.4592217,94.5396472 72.607595,82.7145587 85.4738752,82.7145587 C98.3405064,82.7145587 108.709962,94.5189427 108.488529,108.914901 C108.508531,123.290155 98.3405064,135.09489 85.4738752,135.09489 Z M170.525237,135.09489 C157.88039,135.09489 147.510584,123.290155 147.510584,108.914901 C147.510584,94.5396472 157.658606,82.7145587 170.525237,82.7145587 C183.391518,82.7145587 193.761324,94.5189427 193.539891,108.914901 C193.539891,123.290155 183.391518,135.09489 170.525237,135.09489 Z" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                
                    {{-- Escape button --}}
                    <a href="https://photon-sol.tinyastro.io/en/lp/BrNb8tqwwhpdwkVPtPGjCzZuTevcDcWSsJ2AMotfi1uo" target="_blank">
                        <button id="escape-btn" type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-xl font-medium rounded-md text-white bg-gray-800 shadow-sm hover:bg-gray-900 hover:text-yellow-300 hover:border-yellow-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 transition duration-300 ease-in-out font-permanentMarket">
                            <svg class="mr-2 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M4.519 20.008L21 20v-3.5a2 2 0 1 1 0-4V9H4.278"/><path d="m21 9l-9.385-4.992c-2.512.12-4.758 1.42-6.327 3.425C3.865 9.253 3 11.654 3 14.287c0 2.117.56 4.085 1.519 5.721M15 13v.01M8 13v.01M11 16v.01"/></g></svg>
                            <span>Escape</span>
                        </button>
                    </a>

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
