@extends('default_no_sidebar')

@section('content')

    <div class="auth_content">

        <div class="background_container">
            {{-- <img src="{{ asset('/landing_page/mockup-bg-1.jpg') }}" /> --}}
        </div>

        <div class="columns password_container reset_password_container auth_container">

            <div class="auth_form_container">
                <h1 class="mb-4 is-centered">Reset Password</h1>

                @include('partials.flash_messages')

                <form class="password-reset-form" method="POST" action="{{ route('password.update') }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="field is-horizontal">
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input id="email" name="email" class="input is-centered" type="email" placeholder="jonsmith@example.com" value="{{ old('email') }}" required autofocus>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input  id="password" class="input is-centered"type="password" name="password" placeholder="Password" required>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="field is-horizontal">
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input id="password-confirm" class="input is-centered" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="field is-horizontal">
                        <div class="field-body">
                            <div class="field is-centered">
                                <div class="control">
                                    <button type="submit" class="button is-primary">Reset Password </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
