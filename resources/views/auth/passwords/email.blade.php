@extends('default')

@section('content')

    <div class="auth_content">

        {{-- <div class="background_container"> --}}
            <img src="{{ asset('/landing_page/mockup-bg-1.jpg') }}" />
        {{-- </div> --}}

        <div class="columns password_container forgot_password_container auth_container">

            <div class="auth_form_container">
                <h1 class="mb-4">Forgot your password?</h1>

                @include('partials.flash_messages')

                <form class="forgot-password-form" method="POST" action="{{ route('password.email') }}">

                    {{ csrf_field() }}

                    <div class="field">
                        <div class="form-control">
                            <input id="email" name="email" class="input is-centered" type="email" placeholder="jonsmith@example.com" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-body">
                            <div class="field is-centered">
                                <div class="control">
                                    <button type="submit" class="button is-primary">Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

@endsection
