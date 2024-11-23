@extends('default')

@section('title')
    Rat Escape
@stop

@section('description')
    Rat Escape
@stop

@section('meta')
    <meta property="og:title" content="RatEscape" />
    <meta property="og:description" content="RatEscape" />
    <meta property="og:type"  content="website" />
    <meta property="og:url" content="{{ url('/') }}" />

    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="414" />
    {{--    <meta property="og:image" content="{{ config('app.CF_URL').'/assets/default/snapshots/contact.jpg' }}" />--}}

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@template">
    <meta name="twitter:creator" content="@template">
    <meta name="twitter:title" content="RatEscape">
    <meta name="twitter:description" content="RatEscape">
    {{--    <meta name="twitter:image" content="{{ config('app.CF_URL').'/assets/default/snapshots/contact.jpg' }}">--}}
@stop

@section('head')
    {{-- Typed JS   --}}
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
@endsection

@section('content')

<div class="relative min-h-screen flex flex-col items-center justify-center text-center" style="position: relative;">

    <div 
        class="absolute inset-0 bg-cover bg-center bg-pulse-opacity"  
        style="background-image: url('{{ asset('storage/assets/escape-rat-race.png') }}'); z-index: -1;">
    </div>

    @include('partials.nav')

    <div class="flex min-h-screen flex-col items-center justify-center px-10 text-center">

        <div id="typed-container" style="margin-top: -100px; px-2 py-2 overflow-visible">
            <p id="typed-intro" class="text-gray-50 text-3xl font-permanentMarket"></p>
            <h1 id="typed-heading" class="text-gray-50 text-5xl font-bold mb-4 font-permanentMarket"></h1>
            <p id="typed-paragraph-1" class="mt-10 text-gray-200 text-lg max-w-2xl font-chewy"></p>
            <p id="typed-paragraph-2" class="mt-4 text-gray-200 text-lg max-w-2xl font-chewy"></p>
            <p id="typed-paragraph-3" class="mt-4 text-gray-200 text-lg max-w-2xl font-chewy"></p>
            <p id="typed-paragraph-4" class="mt-6 text-gray-200 text-lg max-w-2xl font-chewy"></p>
        </div>
                
    </div> 

</div>

{{-- Cheese Divider 1 --}}
<img class="w-full h-16 opacity-70" src="{{ asset('storage/assets/cheese-maze-divider-2-sm.png') }}" />

{{-- About Section --}}
<div class="flex relative min-h-screen flex-col items-left justify-center px-10 text-center">

    <div 
        class="absolute inset-0 bg-cover bg-center"  
        style="background-image: url('{{ asset('storage/assets/escape-rat-race-bg-2.png') }}'); opacity:0.3; z-index: -1;">
    </div>

    <span id="about"></span>

    <div class="bg-gray-800 rounded-lg opacity-80 px-4 pt-4 pb-8 w-[45%] ml-12 border border-yellow-300">
        <h1 class="text-yellow-300 text-5xl mt-2 mb-4 font-bangers tracking-wide">
            About
        </h1>
        
        <p class="text-gray-200 text-lg max-w-2xl space-y-2 font-chewy tracking-wide">
            RAT is the ultimate memecoin for bag holders trapped in the rat race, offering nothing but a shot at freedom. Join the escape plan led by Rattus and turn your bags into squeaks of victory! 🚀 🐀
        </p>

        <h2 class="text-yellow-300 text-3xl mt-8 mb-4 font-bangers tracking-widest">
            Why $RAT?
        </h2>

        <div class="font-chewy"> 
            <p class="text-gray-200 text-lg max-w-2xl space-y-2">RATs are resilient because of their many physical and behavioral capabilities, including:</p>
            <ul class="list-disc list-inside tracking-wide text-gray-200 text-lg max-w-2xl space-y-2 mt-4 text-left pl-10">
                <li><span class="text-yellow-300">Treading water:</span> RATs can tread water for up to three days.</li>
                <li><span class="text-yellow-300">Jumping:</span> RATs can jump up to three feet in the air.</li>
                <li><span class="text-yellow-300">Falling:</span> RATs can land uninjured from a 50-foot fall.</li>
                <li><span class="text-yellow-300">Squeezing:</span> RATs can squeeze through tiny crevices.</li>
                <li><span class="text-yellow-300">Reproduction:</span> RATs reproduce prolifically.</li>
                <li><span class="text-yellow-300">Sense of smell:</span> RATs have a highly developed sense of smell, which helps them find food and water.</li>
                <li><span class="text-yellow-300">Climbing:</span> RATs are excellent climbers.</li>
                <li><span class="text-yellow-300">Problem solving:</span> RATs can learn, solve problems, and innovate.</li>
            </ul>
        </div>

    </div>
</div>

{{-- Cheese Divider 2 --}}
<img class="w-full h-16 opacity-70 transform -scale-x-100" src="{{ asset('storage/assets/cheese-maze-divider-2-sm.png') }}" />

{{-- Escape Plan Section --}}
<div id="escape-plan" class="flex relative min-h-screen flex-col items-center justify-center px-10 text-center">

    <div 
        class="absolute inset-0 bg-cover bg-center transform -scale-x-100"  
        style="background-image: url('{{ asset('storage/assets/rat-escape-plan.png') }}'); opacity:0.3; z-index: -1;">
    </div>

    <div class="bg-gray-800 rounded-lg opacity-80 px-4 pt-4 pb-8 w-[45%] ml-12 border border-yellow-300">
        <h1 class="text-yellow-300 text-5xl mt-2 mb-4 font-bangers tracking-wide">
            Escape Plan
        </h1>

        <div class="font-chewy "> 
            {{-- <p class="text-gray-200 text-lg max-w-2xl space-y-2">RATs are resilient because of their many physical and behavioral capabilities, including:</p> --}}
            <ul class="list-disc list-inside tracking-wide text-gray-200 text-lg max-w-2xl space-y-2 mt-4 text-left pl-10">
                <li>Launch on pump.fun - completed</li>
                <li>Website - completed</li>
                <li>Public promotion - to start once socials are ready to go</li>
                <li>Launch on Raydium - in progress (requires reaching 100k mcap)</li>
            </ul>
        </div>

    </div>
</div>

{{-- Cheese Divider 3 --}}
<img class="w-full h-16 opacity-70 transform -scale-x-100 " src="{{ asset('storage/assets/cheese-maze-divider-2-sm.png') }}" />

{{-- How to buy Section --}}
<div id="how" class="flex relative min-h-screen flex-col items-center justify-center px-10 text-center">

    <div 
        class="absolute inset-0 bg-cover bg-center"  
        style="background-image: url('{{ asset('storage/assets/how-to-buy-rat.png') }}'); opacity:0.3; z-index: -1;">
    </div>

    <div class="bg-gray-800 rounded-lg opacity-80 px-8 pt-8 pb-8 w-[45%] ml-12 border border-yellow-300">

        <h1 class="text-yellow-300 text-5xl mt-2 mb-4 font-bangers tracking-wide">
            How To Buy $RAT
        </h1>

        <div class="flex items-center justify-start mt-10 mb-4 text-3xl">
            <div class="list-number font-bangers">
                <div>1</div>
            </div>
            <div class="font-chewy text-gray-50">Have or create a Phantom wallet</div>
        </div>

        <div class="flex items-center justify-start mt-10 mb-4 text-3xl">
            <div class="list-number font-bangers">
                <div>2</div>
            </div>
            <div class="font-chewy text-gray-50">Buy SOLANA and send it your wallet</div>
        </div>

        <div class="flex items-center justify-start mt-10 mb-4 text-3xl">
            <div class="list-number font-bangers">
                <div>3</div>
            </div>
            <div class="font-chewy text-gray-50">Connect it to <a href="https://pump.fun/coin/3vJenGaGsuKG5shPhi7rjnuy3MV6xjmBTGjYqYzXpump" class="hover:underline" target="_blank">Pump.Fun</a></div>
        </div>

        <div class="flex items-center justify-start mt-10 mb-4 text-3xl">
            <div class="list-number font-bangers">
                <div>4</div>
            </div>
            <div class="font-chewy text-gray-50">Swap SOLANA for $RAT</div>
        </div>


    </div>
</div>


{{-- Last Cheese Divider before footer --}}
<img class="w-full h-10 opacity-70 transform" src="{{ asset('storage/assets/cheese-maze-divider-2-sm.png') }}" />


@endsection


@section('scripts')

    <script src="{{ asset('/assets/js/pages/home.js') }}"></script>

@endsection
