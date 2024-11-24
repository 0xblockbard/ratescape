@extends('default')

@section('content')

    @include('partials.nav')

    <main class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8" style="background-color: #2B2B2B">
    
        <div class="mx-auto max-w-xl py-16 sm:py-40">
            
            <div class="text-center min-h-80">
                <p class="text-6xl font-semibold text-yellow-200">404</p>
                <h1 class="mt-2 text-4xl font-bold tracking-tight text-yellow-300 sm:text-5xl">This page does not exist.</h1>
                <p class="mt-2 text-lg text-gray-50">Oops, the page you are looking for could not be found.</p>
            </div>

        </div>

    </main>

@endsection
