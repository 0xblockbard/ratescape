
@extends('default')

@section('content')

<div class="overflow-hidden ">

    <div class="relative mx-auto max-w-7xl py-6 px-10 sm:px-6 lg:px-8 lg:py-24">
        
        <div class="absolute inset-x-0 -top-10 -left-20 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
            <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#E07A5F] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

        <svg class="absolute top-0 right-0 -mt-20 -mr-20 hidden lg:block" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
            <defs>
                <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-neongreen-300" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
        </svg>

        <div class="mx-auto text-base lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-8">

            <div class="lg:col-start-1 mt-32">
                <h2 class="text-2xl font-semibold text-graphite-500">Magic Link Expired!</h2>

                <div class="mt-2">

                    <h3 class="mt-4 text-base text-graphite-500 font-semibold">
                        Please login again <a href="{{ route('login')}}" class="text-neongreen-500 hover:underline">here</a>.
                    </h3>

                </div>
            </div>
            <div class="relative lg:col-start-2 sm:ml-20">
                <figure>
                    <div class="aspect-w-12 aspect-h-7 lg:aspect-none ">   

                        <img class="lazy rounded-lg object-cover object-center shadow-lg w-full " data-src="{{ asset('assets/pages/login/enter.png') }}" alt="" >

                    </div>
                    <figcaption class="mt-4 flex text-sm text-gray-500">

                        {{-- <svg class="relative top-0.5 h-4 w-4 flex-none text-graphite-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                        </svg>                                  

                        <span class="ml-1 italic text-graphite-300">enter the library of knowledge</span> --}}

                    </figcaption>
                </figure>
            </div>
        </div>
  
    </div>
</div>



@endsection

@section('scripts')

@endsection
