@extends('default')

@section('title')
    Rat Escape
@stop

@section('description')
    RAT is the ultimate memecoin for bag holders trapped in the rat race, offering nothing but a shot at freedom.
@stop

@section('meta')
    <meta property="og:title" content="Rat Escape" />
    <meta property="og:description" content="RAT is the ultimate memecoin for bag holders trapped in the rat race, offering nothing but a shot at freedom." />
    <meta property="og:type"  content="website" />
    <meta property="og:url" content="{{ url('/') }}" />

    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="414" />
    <meta property="og:image" content="{{ asset('storage/assets/rat-home-sc.png') }}" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="Rat Escape">
    <meta name="twitter:description" content="RAT is the ultimate memecoin for bag holders trapped in the rat race, offering nothing but a shot at freedom.">
    <meta name="twitter:image" content="{{ asset('storage/assets/rat-home-sc.png') }}">
@stop

@section('head')
    {{-- Typed JS   --}}
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
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
            <h1 id="typed-heading" class="text-gray-50 text-5xl font-bold mt-6 mb-4 font-permanentMarket"></h1>
            <p id="typed-paragraph-1" class="mt-10 text-gray-200 text-lg max-w-2xl font-chewy"></p>
            <p id="typed-paragraph-2" class="mt-4 text-gray-200 text-lg max-w-2xl font-chewy"></p>
            <p id="typed-paragraph-3" class="mt-4 text-gray-200 text-lg max-w-2xl font-chewy"></p>
            <p id="typed-paragraph-4" class="mt-6 text-gray-200 text-lg max-w-2xl font-chewy"></p>

            <div class="typed-socials flex flex-row justify-between rounded-md border-t mt-10 border-yellow-300">

                <div class="flex  text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                    <p class="">
                        <a class="flex items-center justify-center hover:underline" href="https://pump.fun/coin/3vJenGaGsuKG5shPhi7rjnuy3MV6xjmBTGjYqYzXpump" target="_blank"> 
                            <img class="inline h-6 w-6 mr-2" src="{{ asset('storage/assets/links/pump-fun-logo.png') }}" />
                            Pump.fun
                        </a>
                    </p>
                </div>
    
                <div class="flex text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                    <p class="">
                        <a class="flex items-center justify-center hover:underline" href="https://www.geckoterminal.com/solana/pools/BrNb8tqwwhpdwkVPtPGjCzZuTevcDcWSsJ2AMotfi1uo" target="_blank"> 
                            <img class="inline h-6 w-6 mr-2" src="{{ asset('storage/assets/links/gecko-terminal-logo.png') }}" />
                            GeckoTerminal
                        </a>
                    </p>
                </div>
                
                <div class="flex text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                    <p class="">
                        <a class="flex items-center justify-center hover:underline" href="https://dexscreener.com/solana/brnb8tqwwhpdwkvptpgjczzutevcdcwssj2amotfi1uo" target="_blank"> 
                            <svg class="inline h-6 w-6 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" fill-rule="evenodd" viewBox="0 0 252 300" focusable="false">
                                <path d="M151.818 106.866c9.177-4.576 20.854-11.312 32.545-20.541 2.465 5.119 2.735 9.586 1.465 13.193-.9 2.542-2.596 4.753-4.826 6.512-2.415 1.901-5.431 3.285-8.765 4.033-6.326 1.425-13.712.593-20.419-3.197m1.591 46.886l12.148 7.017c-24.804 13.902-31.547 39.716-39.557 64.859-8.009-25.143-14.753-50.957-39.556-64.859l12.148-7.017a5.95 5.95 0 003.84-5.845c-1.113-23.547 5.245-33.96 13.821-40.498 3.076-2.342 6.434-3.518 9.747-3.518s6.671 1.176 9.748 3.518c8.576 6.538 14.934 16.951 13.821 40.498a5.95 5.95 0 003.84 5.845zM126 0c14.042.377 28.119 3.103 40.336 8.406 8.46 3.677 16.354 8.534 23.502 14.342 3.228 2.622 5.886 5.155 8.814 8.071 7.897.273 19.438-8.5 24.796-16.709-9.221 30.23-51.299 65.929-80.43 79.589-.012-.005-.02-.012-.029-.018-5.228-3.992-11.108-5.988-16.989-5.988s-11.76 1.996-16.988 5.988c-.009.005-.017.014-.029.018-29.132-13.66-71.209-49.359-80.43-79.589 5.357 8.209 16.898 16.982 24.795 16.709 2.929-2.915 5.587-5.449 8.814-8.071C69.31 16.94 77.204 12.083 85.664 8.406 97.882 3.103 111.959.377 126 0m-25.818 106.866c-9.176-4.576-20.854-11.312-32.544-20.541-2.465 5.119-2.735 9.586-1.466 13.193.901 2.542 2.597 4.753 4.826 6.512 2.416 1.901 5.432 3.285 8.766 4.033 6.326 1.425 13.711.593 20.418-3.197"></path><path d="M197.167 75.016c6.436-6.495 12.107-13.684 16.667-20.099l2.316 4.359c7.456 14.917 11.33 29.774 11.33 46.494l-.016 26.532.14 13.754c.54 33.766 7.846 67.929 24.396 99.193l-34.627-27.922-24.501 39.759-25.74-24.231L126 299.604l-41.132-66.748-25.739 24.231-24.501-39.759L0 245.25c16.55-31.264 23.856-65.427 24.397-99.193l.14-13.754-.016-26.532c0-16.721 3.873-31.578 11.331-46.494l2.315-4.359c4.56 6.415 10.23 13.603 16.667 20.099l-2.01 4.175c-3.905 8.109-5.198 17.176-2.156 25.799 1.961 5.554 5.54 10.317 10.154 13.953 4.48 3.531 9.782 5.911 15.333 7.161 3.616.814 7.3 1.149 10.96 1.035-.854 4.841-1.227 9.862-1.251 14.978L53.2 160.984l25.206 14.129a41.926 41.926 0 015.734 3.869c20.781 18.658 33.275 73.855 41.861 100.816 8.587-26.961 21.08-82.158 41.862-100.816a41.865 41.865 0 015.734-3.869l25.206-14.129-32.665-18.866c-.024-5.116-.397-10.137-1.251-14.978 3.66.114 7.344-.221 10.96-1.035 5.551-1.25 10.854-3.63 15.333-7.161 4.613-3.636 8.193-8.399 10.153-13.953 3.043-8.623 1.749-17.689-2.155-25.799l-2.01-4.175z"></path>
                            </svg>
                            DexScreener
                        </a>
                    </p>
                </div>
    
            </div>
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

    <div class="bg-gray-800 rounded-lg opacity-80  mt-10 mb-10 px-4 pt-4 pb-8 w-[45%] ml-12 border border-yellow-300">
        <h1 class="text-yellow-300 text-5xl mt-2 mb-4 font-bangers tracking-wide">
            About
        </h1>
        
        <p class="text-gray-200 text-lg max-w-2xl font-chewy tracking-wide">
            RAT is the ultimate memecoin for bag holders trapped in the rat race, offering nothing but a shot at freedom.
        </p>
        <p class="text-gray-200 text-lg max-w-2xl mt-4 font-chewy tracking-wide">
            Join the escape plan led by Rattus, our leader. He was the first to escape.
        </p>
        <p class="text-gray-200 text-lg max-w-2xl mt-4 font-chewy tracking-wide">
            Turn your bags into squeaks of victory! 🚀 🐀
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
                <li>Launch on pump.fun <span class="text-yellow-300">(completed)</span></li>
                <li>Website <span class="text-yellow-300">(completed)</span></li>
                <li>Launch on Raydium <span class="text-yellow-300">(completed - required 100k mcap)</span></li>
                <li>Viral Marketing <span class="text-yellow-300">(soon - still in stealth mode)</span></li>
                <li>Huge Announcement <span class="text-yellow-300">(25 Dec 2024)</span></li>
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

    <div class="bg-gray-800 rounded-lg opacity-80 my-12 px-8 pt-8 pb-8 w-[55%] ml-12 border border-yellow-300">

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

        <h2 id="tokenomics" class="text-yellow-300 text-3xl mt-10 mb-4 font-bangers tracking-wide">
            Tokenomics
        </h1>

        <div class="flex flex-col rounded-md border-t border-yellow-300">

            <div class="flex flex-row w-full justify-between text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                <p class="">Contract Address:</p>
                <p class="w-[406px]"><a class="hover:underline" href="https://dexscreener.com/solana/brnb8tqwwhpdwkvptpgjczzutevcdcwssj2amotfi1uo" target="_blank">3vJenGaGsuKG5shPhi7rjnuy3MV6xjmBTGjYqYzXpump</a></p>
            </div>

            <div class="flex flex-row w-full justify-between text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                <p class="">Liquidity Pool:</p>
                <p class=""><a class="hover:underline" href="https://dexscreener.com/solana/brnb8tqwwhpdwkvptpgjczzutevcdcwssj2amotfi1uo" target="_blank">BrNb8tqwwhpdwkVPtPGjCzZuTevcDcWSsJ2AMotfi1uo</a></p>
            </div>

            {{-- <div class="flex flex-row w-full justify-between">

                <div class="flex flex-row text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                    <p class="flex">Locked Liquidity with Fair Launch (Creator holds only 2%)</p>
                </div>

                <div class="flex flex-row text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                    <p class="flex">100% Community Driven</p>
                </div>
            </div> --}}

            <div class="flex flex-row w-full justify-between">

                <div class="flex flex-row text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                    <p class="flex">Ticker: $RAT</p>
                </div>
                
                <div class="flex flex-row text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                    <p class="flex">Total Supply: 1 billion</p>
                </div>

                <div class="flex flex-row text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                    <p class="flex">Tax: 0</p>
                </div>

                {{-- <div class="flex flex-row text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                    <p class="flex">LP: BURNED</p>
                </div> --}}
            </div>

        </div>

        <h2 class="text-yellow-300 text-3xl mt-10 mb-4 font-bangers tracking-wide">
            Links
        </h1>

        <div class="flex flex-row justify-between rounded-md border-t border-yellow-300">

            <div class="flex  text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                <p class="">
                    <a class="flex items-center justify-center hover:underline" href="https://pump.fun/coin/3vJenGaGsuKG5shPhi7rjnuy3MV6xjmBTGjYqYzXpump" target="_blank"> 
                        <img class="inline h-6 w-6 mr-2" src="{{ asset('storage/assets/links/pump-fun-logo.png') }}" />
                        Pump.fun
                    </a>
                </p>
            </div>

            <div class="flex text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                <p class="">
                    <a class="flex items-center justify-center hover:underline" href="https://www.geckoterminal.com/solana/pools/BrNb8tqwwhpdwkVPtPGjCzZuTevcDcWSsJ2AMotfi1uo" target="_blank"> 
                        <img class="inline h-6 w-6 mr-2" src="{{ asset('storage/assets/links/gecko-terminal-logo.png') }}" />
                        GeckoTerminal
                    </a>
                </p>
            </div>
            
            <div class="flex text-yellow-300 px-4 py-4 font-chewy tracking-widest"> 
                <p class="">
                    <a class="flex items-center justify-center hover:underline" href="https://dexscreener.com/solana/brnb8tqwwhpdwkvptpgjczzutevcdcwssj2amotfi1uo" target="_blank"> 
                        <svg class="inline h-6 w-6 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" fill-rule="evenodd" viewBox="0 0 252 300" focusable="false">
                            <path d="M151.818 106.866c9.177-4.576 20.854-11.312 32.545-20.541 2.465 5.119 2.735 9.586 1.465 13.193-.9 2.542-2.596 4.753-4.826 6.512-2.415 1.901-5.431 3.285-8.765 4.033-6.326 1.425-13.712.593-20.419-3.197m1.591 46.886l12.148 7.017c-24.804 13.902-31.547 39.716-39.557 64.859-8.009-25.143-14.753-50.957-39.556-64.859l12.148-7.017a5.95 5.95 0 003.84-5.845c-1.113-23.547 5.245-33.96 13.821-40.498 3.076-2.342 6.434-3.518 9.747-3.518s6.671 1.176 9.748 3.518c8.576 6.538 14.934 16.951 13.821 40.498a5.95 5.95 0 003.84 5.845zM126 0c14.042.377 28.119 3.103 40.336 8.406 8.46 3.677 16.354 8.534 23.502 14.342 3.228 2.622 5.886 5.155 8.814 8.071 7.897.273 19.438-8.5 24.796-16.709-9.221 30.23-51.299 65.929-80.43 79.589-.012-.005-.02-.012-.029-.018-5.228-3.992-11.108-5.988-16.989-5.988s-11.76 1.996-16.988 5.988c-.009.005-.017.014-.029.018-29.132-13.66-71.209-49.359-80.43-79.589 5.357 8.209 16.898 16.982 24.795 16.709 2.929-2.915 5.587-5.449 8.814-8.071C69.31 16.94 77.204 12.083 85.664 8.406 97.882 3.103 111.959.377 126 0m-25.818 106.866c-9.176-4.576-20.854-11.312-32.544-20.541-2.465 5.119-2.735 9.586-1.466 13.193.901 2.542 2.597 4.753 4.826 6.512 2.416 1.901 5.432 3.285 8.766 4.033 6.326 1.425 13.711.593 20.418-3.197"></path><path d="M197.167 75.016c6.436-6.495 12.107-13.684 16.667-20.099l2.316 4.359c7.456 14.917 11.33 29.774 11.33 46.494l-.016 26.532.14 13.754c.54 33.766 7.846 67.929 24.396 99.193l-34.627-27.922-24.501 39.759-25.74-24.231L126 299.604l-41.132-66.748-25.739 24.231-24.501-39.759L0 245.25c16.55-31.264 23.856-65.427 24.397-99.193l.14-13.754-.016-26.532c0-16.721 3.873-31.578 11.331-46.494l2.315-4.359c4.56 6.415 10.23 13.603 16.667 20.099l-2.01 4.175c-3.905 8.109-5.198 17.176-2.156 25.799 1.961 5.554 5.54 10.317 10.154 13.953 4.48 3.531 9.782 5.911 15.333 7.161 3.616.814 7.3 1.149 10.96 1.035-.854 4.841-1.227 9.862-1.251 14.978L53.2 160.984l25.206 14.129a41.926 41.926 0 015.734 3.869c20.781 18.658 33.275 73.855 41.861 100.816 8.587-26.961 21.08-82.158 41.862-100.816a41.865 41.865 0 015.734-3.869l25.206-14.129-32.665-18.866c-.024-5.116-.397-10.137-1.251-14.978 3.66.114 7.344-.221 10.96-1.035 5.551-1.25 10.854-3.63 15.333-7.161 4.613-3.636 8.193-8.399 10.153-13.953 3.043-8.623 1.749-17.689-2.155-25.799l-2.01-4.175z"></path>
                        </svg>
                        DexScreener
                    </a>
                </p>
            </div>

        </div>


    </div>
</div>


{{-- Cheese Divider 4 --}}
{{-- <img class="w-full h-16 opacity-70 transform -scale-x-100 " src="{{ asset('storage/assets/cheese-maze-divider-2-sm.png') }}" /> --}}

{{-- Tokenomics --}}
{{-- <div id="tokenomics" class="flex relative min-h-screen flex-col items-center justify-center px-10 text-center">

    <div 
        class="absolute inset-0 bg-cover bg-center"  
        style="background-image: url('{{ asset('storage/assets/how-to-buy-rat.png') }}'); opacity:0.3; z-index: -1;">
    </div>

    <div class="bg-gray-800 rounded-lg opacity-80 px-8 pt-8 pb-8 w-[75%] ml-12 border border-yellow-300">

        <h1 class="text-yellow-300 text-5xl mt-2 mb-4 font-bangers tracking-wide">
            Tokenomics
        </h1>

    </div>
</div> --}}


{{-- Last Cheese Divider before footer --}}
<img class="w-full h-10 opacity-70 transform" src="{{ asset('storage/assets/cheese-maze-divider-2-sm.png') }}" />

{{-- Disclaimer Section --}}
<div class="flex relative flex-col items-center justify-center text-center">

    <div class="rounded-lg opacity-80 pt-8 pb-4 w-full text-2xl text-yellow-300 font-chewy" style="background-color: #2B2B2B">

        <p>Disclaimer: RAT is a community-driven meme coin. Its holders are stuck in the rat race - help them escape! </br>We make no promises of return, except having fun!</p>

    </div>
</div>

@endsection


@section('scripts')



@endsection
