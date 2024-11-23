
@extends('default')

@section('content')

<div class=" flex">
    <div class="flex flex-col w-full justify-center py-12">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <div class="flex-shrink-0 flex items-center font-extrabold text-3xl">
                    Login
                </div>

            </div>

            <div class="mt-2">

                <div class="mt-2">
                    <form action="{{ route('login') }}" method="POST" class="space-y-6">

                        @include('partials.flash_messages')

                        {{ csrf_field() }}

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
                            <div class="mt-1">
                                <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

    <script>

        $('.email_signup_btn').on('click', function(){
            $('.auth_form_container').show();
            $('.auth_initial').hide();
        });

        $('.chevron_back').on('click', function(){
            $('.auth_form_container').hide();
            $('.auth_initial').show();
        });


    </script>

@endsection
